<!DOCTYPE html>
    <html lang="en-US">
      <head>
        <meta charset="utf-8">
      </head>
      <body>
        <div>
    <p>Name  : {{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
    <p>Email  : {{Auth::user()->email}}</p>
    <p> Property Name  : {{isset($offer->property->address) ? $offer->property->address : ''}}</p>
    <p> Offer Price  : {{isset($offer->offer_price) ? $offer->offer_price : ''}}</p>
    @if(isset($offer->listing_expiry_date))
    <p> Listing Expiry Date  : {{isset($offer->listing_expiry_date) ? date('Y-m-d', strtotime($offer->listing_expiry_date)) : ''}}</p>
    @endif
    @if(isset($offer->reference_id))
    <p> Croud Seller Name  : {{isset($offer->croud_seller_name->first_name) ? $offer->croud_seller_name->first_name : ''}}
    {{isset($offer->croud_seller_name->last_name) ? $offer->croud_seller_name->last_name : ''}}
    </p>
    @endif
    <hr>
    <h2>Thank you for Offer. </h2>
    </div>
      </body>
    </html>