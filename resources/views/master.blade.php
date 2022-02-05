<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Mosaic Maker">
    <meta name="keywords" content="piastrelle, mosaici, artigiano">
    <meta name="author" content="Mattia Pedone">
    <title>Rid Website</title>

    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
</head>
<body>
    <div id="app">
        <div class="page-wrapper">
            @include('layouts.partials._top-nav')
            <div class="main-wrapper">
                @include('layouts.partials._header')
                @include('layouts.partials._main')
            </div>
            @include('layouts.partials._footer')
        </div>
    </div>

    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>