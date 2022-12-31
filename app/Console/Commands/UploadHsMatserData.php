<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Log;
use App\Models\ManufactureSheet;
use App\Models\HsMaster;
use App\Models\BulkExcelCron;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateTimeZone;
use App\Helpers\Helper;
use Crypt;
use DB;
use Auth;
use Session;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class UploadHsMatserData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upload:hsMatser';

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
       $sheets = ManufactureSheet::where('is_for_upload',1)->where('type','hsn_master')->get();
       if(count($sheets)){
            foreach($sheets as $key => $val){
                $extension = 'csv';
                if ($extension  == 'csv') {
                    $reader = IOFactory::createReader('Csv');
                } else if ($extension  == 'xls') {
                    $reader = IOFactory::createReader('Xls');
                } else
                    $reader = IOFactory::createReader('Xlsx');
                $reader->setReadDataOnly(TRUE);
                $spreadsheet = $reader->load(public_path('ManufactureExcel/' . $val->sheet));
                $all = $spreadsheet->getSheetNames();
                $data = $spreadsheet->getSheet(0);
                $sheet_data = $data->toArray(null, true, true, true);
                $sheet_detail = BulkExcelCron::where('excel_id',$val->id)->get();
                $data = array();
                unset($sheet_data[1]);
                if(count($sheet_data)){
                    foreach($sheet_data as $k => $v){
                        $sheet_name = array();
                        foreach($sheet_detail as $key => $s_id){
                            if ($s_id->column_name == 'hsn_code') {
                                $sheet_name = HsMaster::where('hsn_code',$v[$s_id->key_name])->first();
                            } 
                            
                            if(empty($sheet_name)){
                                $data[$s_id->column_name] = $v[$s_id->key_name];
                            }
                        }
                        if(!empty($data)){
                            HsMaster::create($data);
                        }
                    }
                }
                BulkExcelCron::where('excel_id',$val->id)->delete();
                ManufactureSheet::where('id', $val->id)->delete();
                
            }
       }
    }
}
