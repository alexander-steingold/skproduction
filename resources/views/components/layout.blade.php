<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="אולפן מסך ירוק - מסך לבן - מסך שחור בדרום - באר שבע">
    <meta name="version" content="2.0.0">
    <!-- favicon -->
    <link href="{{ asset('theme/src/assets/images/camera.png') }}" rel="shortcut icon">
    <!-- Css -->
    <link href="{{ asset('theme/src/assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
    <link href="{{ asset('theme/src/assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{ asset('theme/src/assets/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
    <link href="{{ asset('theme/src/assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;700&display=swap" rel="stylesheet">

    {{--    <link rel="stylesheet" href="{{ asset('theme/src/assets/css/tailwind.css')}}">--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-base text-slate-900 dark:text-white dark:bg-slate-900">

<x-partials.preloader/>

<x-partials.navbar/>

{{ $slot }}

<x-partials.footer/>
<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top"
   class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-orange-600 text-white leading-9"><i
        class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- JAVASCRIPTS -->
<script src="{{ asset('theme/src/assets/libs/gumshoejs/gumshoe.polyfills.min.js') }}"></script>
<script src="{{ asset('theme/src/assets/libs/tobii/js/tobii.min.js') }}"></script>
<script src="{{ asset('theme/src/assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
<script src="{{ asset('theme/src/assets/js/plugins.init.js') }}"></script>
<script src="{{ asset('theme/src/assets/js/app.js') }}"></script>

<!-- JAVASCRIPTS -->
</body>
</html>
