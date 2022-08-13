<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MMG</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    @yield('css')
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
    <div class="body-wrapper">
        @include('frontend.layouts.header')
        @yield('content')

        @include('frontend.layouts.footer')
    </div>

    <!-- All JS Plugins -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    
    <script>
        var HOST_URL = "{{ url('/') }}";
    </script>
    <script>
        $(document).on('click','.fav_property',function(){
            @if(Auth::check())
                var property_id = $(this).attr('data-property_id');
                var this_ = $(this);
                $.ajax({
                    url: "{{route('add_to_favourite','')}}/"+property_id,
                    success: function(result) {
                        if(result.success)
                        {
                            if(result.is_fav)
                            {
                                this_.children('i').removeClass('far');
                                this_.children('i').addClass('fa');
                            }
                            else
                            {
                                this_.closest('i').removeClass('fa');
                                this_.closest('i').addClass('far');
                            }
                        }
                    }
                });
            @else
                window.location.href = "{{route('login')}}";
            @endif
        })
    </script>
    @yield('script')
</body>
<!--end::Body-->

</html>
