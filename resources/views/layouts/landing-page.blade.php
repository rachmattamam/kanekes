<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    </head>
    <body>
        @include('landing-page.navbar')

        @include('landing-page.header')

        @include('landing-page.main')

        @include('landing-page.footer')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
