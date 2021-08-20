<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }} - BonAddress - {{ $title ?? 'Laravel' }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="icon" type="image/png" href="{{ asset('public/images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fonts/iconic/css/material-design-iconic-font.min.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/main.css') }}">
</head>
<body>
    
    @yield('body')

    <script src="{{ asset('public/js/main.js') }}"></script>
</body>
</html>