
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('focus-premium/themes/focus-premium/focus/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/jqvmap/css/jqvmap.min.css') }}">
    <link href="{{ URL::asset('focus-premium/themes/focus-premium/focus/css/style.css') }}" rel="stylesheet">
    <!-- datatable.css -->
    <link href="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- iconfont -->
    {{--<link rel="stylesheet" href="{{ URL::asset('font_3488849_yfroy1i6sks/iconfont.css') }}">--}}
    <!-- layui style -->
    <link href="{{ URL::asset('layui/layui/css/layui.css') }}" rel="stylesheet">
    @yield('link')
    <!-- jQuery -->
    <script src="{{ URL::asset('js/jQuery.js') }}"></script>
    <style>
        .content-body{
            min-height:0px !important;
        }
    </style>
    @yield('style')

</head>

<body>



    <!--*******************Preloader start********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************Preloader end********************-->



    <div id="main-wrapper">

        @include('Header.header')

        @include('Nav.nav')

        @yield('content')

    </div>

    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/global/global.min.js') }}"></script>
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/js/quixnav-init.js') }}"></script>
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/morris/morris.min.js') }}"></script>


    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/js/dashboard/dashboard-1.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    {{--<script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/js/plugins-init/datatables.init.js') }}"></script>--}}
    

    @yield("script")

</body>

</html>