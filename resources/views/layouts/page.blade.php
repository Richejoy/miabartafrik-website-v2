<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" href="{{ asset('public/assets/img/brand/favicon.ico') }}" type="image/x-icon" />

  <!-- Title -->
    <title>{{ pageTitle($title) }} | {{ config('app.name') }}</title>
  
</head>
<body>

  <main>
    @yield('body')
  </main>

  @include('flashy::message')
  
</body>
</html>
