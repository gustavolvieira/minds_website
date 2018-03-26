<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
    <!-- Site Title-->
    <title>MINDS</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    {{--<link rel="icon" href="{{asset('images/template/favicon.ico')}}" type="image/x-icon">--}}
{{--    <link rel="icon" href="{{asset('images/logo-white-bg-tab.png')}}">--}}
    <link rel="icon" href="{{asset('images/logo-white-bg-tab.ico')}}" type="image/x-icon">
{{--    <link rel="icon" href="{{asset('images/logo-white-bg-tab.jpg')}}">--}}
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,700%7COrbitron:400,700">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{asset('images/template/ie8-panel/warning_bar_0000_us.jpg')}}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="{{asset('js/template/html5shiv.min.js')}}"></script>
    <![endif]-->

    {{--Custom--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body id="page-top" class="index">

    <div class="page">
    @include('partials.header')

    <main class="page-content">
    @yield('content')
    </main>

    @include('partials.footer')
    </div>

    <script src="{{asset('js/template/core.min.js')}}"></script>
    <script src="{{asset('js/template/script.js')}}"></script>
    {{--<script src="{{asset('js/app.js')}}"></script>--}}
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>