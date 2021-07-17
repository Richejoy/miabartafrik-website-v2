<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{ config('app.name') }} - Services</title>

    <link href="{{ asset('public/assets/css/servicesstyle.css') }}" rel="stylesheet"/>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
</head>
<body>

<div class='split-pane col-xs-12 col-sm-4 bookcastimagservice'>
  <div>
    <div class='text-content'>
      <div class="bold">Vous voulez</div>
      <div class='big'>BOOKCAST ?</div>
    </div>
    <a href="{{ route('bookcast.index') }}">
      Découvrir
    </a>
  </div>
</div>

<div class='split-pane col-xs-12 col-sm-4 boutikart_service'>
  <div>
    <div class='text-content'>
      <div class="bold">Vous voulez</div>
      <div class='big'>BOUTIKART ?</div>
    </div>
    <a href="{{ route('boutikart.index') }}">
      Découvrir
    </a>
  </div>
</div>
<div class='split-pane col-xs-12 col-sm-4 bonadress_service'>
  <div>
    <div class='text-content'>
      <div class="bold">Vous voulez</div>
      <div class='big'>BONADDRESS ?</div>
    </div>
    <a href="{{ route('bonaddress.index') }}">
      Découvrir 
    </a>
  </div>
</div>
  
</body>
</html>
