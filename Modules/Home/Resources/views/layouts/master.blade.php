<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'صفحه اصلی')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font/font.css') }}">
    @stack('styles')
</head>
<body>
@include('home::layouts.header')
<main id="index">
    @yield('content')
</main>
@include('home::layouts.footer')
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/js.js') }}"></script>
@stack('scripts')
</body>
</html>
