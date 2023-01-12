<!DOCTYPE html>
    <html lang="en-US">
      <head>
        <meta charset="utf-8">
      </head>
      <body>
        <div>
    <p>Name  : {{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
    <p> Property Name  : {{isset($inspection_books->property->address) ? $inspection_books->property->address : ''}}</p>
    <p>Email  : {{Auth::user()->email}}</p>
    <p>Inspection Date : {{isset($request->inspection_date) ? $request->inspection_date : ''}}</p>
    <p>Inspection Time : {{ isset($request->inspection_time) ? $request->inspection_time : ''}}</p>
    <hr>
    <h2>Thank you for book inspection. </h2>
    </div>
      </body>
    </html>