<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('admin2/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('admin2/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin2/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('admin2/css/style.css')}}">

    <script src="{{asset('admin2/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('admin2/js/popper.min.js')}}"></script>
    <script src="{{asset('admin2/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin2/js/main.js')}}"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
