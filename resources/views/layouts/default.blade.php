
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title') </title>
    <!-- Favicon icon -->
    {{--<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">--}}
    <link href="{{ URL::asset('focus-premium/themes/focus-premium/focus/css/style.css') }}" rel="stylesheet">
    <!-- Required validate -->
    <script src="{{ URL::asset('js/common/validate.js') }}"></script>
    <script src="{{ URL::asset('layui/layui/layui.js') }}"></script>

</head>

<body class="h-100">

    @yield('content')


    <!--**********************************Scripts***********************************-->


    <!-- Required vendors -->
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/global/global.min.js') }}"></script>
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/js/quixnav-init.js') }}"></script>
    <script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/js/custom.min.js') }}"></script>
    <script src="{{ URL::asset('js/jQuery.js') }}"></script>
    

</body>

</html>