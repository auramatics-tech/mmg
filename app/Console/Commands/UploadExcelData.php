<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Log;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateTimeZone;
use App\Helpers\Helper;
use App\Models\ExcelCron;
use App\Models\Sheet;
use App\Models\ItemMaster;
use App\Models\SupplierItems;
use App\Models\StockUpdate;
use App\Models\ManufacturerMaster;
use App\Models\LineBusiness;
use App\Models\ItemCategory;
use Crypt;
use App\Models\SessionBooking;
use DB;
use Auth;
use Session;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class UploadExcelData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upload:excel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload excel records';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sheet_ids = ExcelCron::select('excel_cron.excel_id')->Groupby('excel_id')->get();

        if (count($sheet_ids)) {
            foreach ($sheet_ids as $sheet_id) {
                $sheet_detail = $sheet_ids = ExcelCron::where('excel_id', $sheet_id['excel_id'])->get();
                $excel_file = Sheet::find($sheet_id['excel_id']);
                $extension = 'csv';
                if ($extension  == 'csv') {
                    $reader = IOFactory::createReader('Csv');
                } else if ($extension  == 'xls') {
                    $reader = IOFactory::createReader('Xls');
                } else
                    $reader = IOFactory::createReader('Xlsx');
                $reader->setReadDataOnly(TRUE);
                $spreadsheet = $reader->load(public_path('Excel/' . $excel_file->file_name));
                $all = $spreadsheet->getSheetNames();
                $data = $spreadsheet->getSheet($sheet_detail[0]->selected_sheet);
                $sheetData = $data->toArray(null, true, true, true);
                $insert_data = [];
                $data = array();
                if (count($sheetData)) {
                    foreach ($sheetData as $s_d) {
                        if (count($sheet_detail)) {
                            foreach ($sheet_detail as $key => $val) {

                                if ($val->column_name == 'part_number') {
                                    $part = ItemMaster::where('part_number', $s_d[$val->key_name])->first();

                                    if (!empty($part)) {
                                        $data[$val->column_name] = $s_d[$val->key_name];
                                        $data['id'] = $part->id;
                                    } else {
                                        $data['id'] = '';
                                    }
                                    $data['part_number'] = $s_d[$val->key_name];
                                } elseif ($val->column_name == 'mfr') {
                                    $manufac = ManufacturerMaster::where('name', trim($s_d[$val->key_name]))->first();
                                    if (!isset($manufac->id)) {
                                        $manufac = new ManufacturerMaster();
                                        $manufac->name = $s_d[$val->key_name];
                                        $manufac->save();
                                    }
                                    $data['mfr'] = $manufac->id;
                                } elseif ($val->column_name == 'line_item') {
                                    $LineBusiness = LineBusiness::where('business_line', trim($s_d[$val->key_name]))->first();
                                    if (!isset($LineBusiness->id)) {
                                        $LineBusiness = new LineBusiness();
                                        $LineBusiness->business_line = $s_d[$val->key_name];
                                        $LineBusiness->save();
                                    }
                                    $data['line_item'] = $LineBusiness->id;
                                } elseif ($val->column_name == 'category') {
                                    $ItemCategory = ItemCategory::where('name', trim($s_d[$val->key_name]))->first();
                                    if (!isset($ItemCategory->id)) {
                                        $ItemCategory = new ItemCategory();
                                        $ItemCategory->name = $s_d[$val->key_name];
                                        $ItemCategory->save();
                                    }
                                    $data['item_category'] = $ItemCategory->id;
                                } else {
                                    $data[$val->column_name] = $s_d[$val->key_name];
                                }
                                $data['user_id'] = $val->user_id;
                            }
                        }
                        $insert_data[] = $data;
                    }
                }
                $user = User::find($sheet_detail[0]->uploaded_by);
                
                $stock_update = new StockUpdate();
                $stock_update->supplier_id = $sheet_detail[0]->user_id;
                $stock_update->uploaded_by = $sheet_detail[0]->uploaded_by;
                $stock_update->item_count = count($insert_data)-1;
                $stock_update->stock_date = now();
                
                $stock_update->transaction_id = $sheet_id['excel_id'];
                $stock_update->save();

                $insert_data = collect($insert_data);
                $part_count = 0;
                $chunks = $insert_data->chunk(500);
                for ($i = 0; $i < count($chunks); $i++) {
                    foreach ($chunks[$i] as $key => $chunk) {
                        if (is_int($chunk['quantity'])) {
                            $item_master = ItemMaster::updateOrcreate(['part_number' => $chunk['part_number']], $chunk);
                            $part_count  += $item_master['quantity'];

                            // supplier_item
                            $supplier_item = SupplierItems::where(['item'=>$item_master->id,'supplier'=>$sheet_detail[0]->user_id])->first();
                            if(empty($supplier_item)){
                                $supplier_item = new SupplierItems();
                            }
                            $supplier_item->item = $item_master->id;
                            $supplier_item->supplier = $sheet_detail[0]->user_id;
                            $supplier_item->quantity = $chunk['quantity'];
                            if($user->role == 1){
                                $supplier_item->active = 1;
                            }else{
                                $supplier_item->active = 0;
                            }
                           
                            $supplier_item->stock_id = $stock_update->id;
                            $supplier_item->save();
                        }
                    }
                }
                if($user->role == 1){
                    $stock_update->verified = 1;
                }
                $stock_update->part_count  = $part_count;
                $stock_update->save();

                ExcelCron::where('excel_id', $sheet_id['excel_id'])->delete();
            }
        }
    }
}
