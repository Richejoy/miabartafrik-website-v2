<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}" />

    <!-- TITLE -->
    <title>{{ $title ?? 'Laravel' }} - BonAddress - {{ config('app.name') }}</title>

    <!-- bookcast CSS -->
    <link href="{{ asset('public/assets/css/bonaddress.css') }}" rel="stylesheet" />

    @yield('stylesheet')

</head>

<body>

<h1>Coming Soon</h1>

@yield('body')

<script type="text/javascript" src="{{ asset('js/bonaddress.js') }}"></script>

</body>

</html>