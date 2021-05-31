<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}" />

  <title>{{ config('app.name') }} - {{ $title ?? 'Laravel' }}</title>
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&amp;display=swap'>
  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
  <!-- miabartafrik CSS -->
    <link href="{{ asset('public/css/miabartafrik.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/css/bookcast.css') }}" rel="stylesheet"/> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>

  <header role="banner"> 
  <a href="{{ route('page.index') }}" title="return to the homepage" id="logo">
    <img src="{{ asset('public/img/logo_homs80.svg') }}" alt="Base Apparel Logo" style="height: 3.5rem;">
  </a>
</header>

<section class="side-image"></section>

  @yield('body')

  <script src="//code.jquery.com/jquery.js"></script>
  @include('flashy::message')
  
</body>
</html>
