<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>MMG-Seller</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('frontend/img/my_logo/png/MMG_Black_2.png')}}" sizes="64x64" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('backend/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @yield('css')
    <style>
        .dashboard_logo{
            width: 50px;
            height: 50px;
        }
        .dashboard_logo img{
            width: 100%;
            height: 100%;
        }
        .su_pl_12{
            padding-left: 10px;
        }
        .su_pr_20{
            padding-right: 20px;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            @include('backend_layouts.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('backend_layouts.header')
                <!--end::Header-->
				<!--begin::Content-->
                @yield('content')
                <!--begin::Footer-->
                @include('backend_layouts.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    
    <script>var hostUrl = "assets/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{asset('backend/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('backend/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{asset('backend/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{asset('backend/js/custom/apps/file-manager/list.js')}}"></script>
    <script src="{{asset('backend/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('backend/js/custom/widgets.js')}}"></script>
    <script src="{{asset('backend/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{asset('backend/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{asset('backend/js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{asset('backend/js/custom/utilities/modals/users-search.js')}}"></script>
    
    @yield('script')             
</body>
<script>
    setTimeout(function(){
        $('.alert').hide();
    }, 10000);

</script>


</html>