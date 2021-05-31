@extends('layouts.auth', ['title' => "Inscription"])

@section('stylesheet')


@endsection

@section('body')

<!-- partial:index.partial.html -->
<div id="login_Inscrit_bookArt-wrap">
  <!-- GLOBAL-LOADER -->
    <div id="global-loader">
      <img src="{{ asset('public/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <div class="login_Inscrit_bookArt-image" style="background: url({{ asset('public/assets/images/home/register.jpg') }}) no-repeat center / cover;"> 

    </div>

    <div class="login_Inscrit_bookArt-card">
        <div class="login_Inscrit_bookArt-card-header logconnexbottom">  
      <a class="header-brand" href="index.html">
        <img src="{{ asset('public/assets/images/brand/logo.png') }}" class="h-8" alt="BookCast logo"> 
      </a>
             
            
        </div>

      <p class="text-mutedinscrit">Inscrivez-vous enfin de profiter de plusieurs avantages. </p>
    <div class="grid_connexionBookcast">

      {!! Form::open(['route' => 'page.register', 'class' => 'form_connexionBookcast login_connexionBookcast']) !!}

      <div class="form__field">
        <label for="user_type_id">

          <i class="fe fe-users iconBookconnex" data-toggle="tooltip" title=""></i>
          <span class="hidden">Profil </span></label>
        {!! Form::select('user_type_id', $userTypes, null, ['class' => 'select_on_bookcast', 'placeholder' => 'Profil', 'required' => true]) !!}
      </div>

      <div class="form__field">
        <label for="civility_id">

          <i class="icon icon-symbol-female iconBookconnex" data-toggle="tooltip" title=""></i>
          <span class="hidden">Civilité </span></label>

        {!! Form::select('civility_id', $civilities, null, ['class' => 'select_on_bookcast', 'placeholder' => 'Civilité', 'required' => true]) !!}
      </div>

      <div class="form__field">
        <label for="country_id">

          <i class="fe fe-map-pin iconBookconnex" data-toggle="tooltip" title=""></i>
          <span class="hidden">Pays </span></label>

          {!! Form::select('country_id', $countries, null, ['class' => 'select_on_bookcast', 'placeholder' => 'Pays', 'required' => true]) !!}
      </div>

      <div class="form__field">
        <label for="last_name">
          <i class="fe fe-user" data-toggle="tooltip" title=""></i>
          <span class="hidden">Nom </span></label>
        <input id="last_name" type="text" name="last_name" class="form__input" placeholder="Nom" required>
      </div>

      <div class="form__field">
        <label for="first_name">
          <i class="fe fe-user" data-toggle="tooltip" title=""></i>
          <span class="hidden">Prénoms </span></label>
        <input id="first_name" type="text" name="first_name" class="form__input" placeholder="Prénoms" required>
      </div>

      <div class="form__field">
        <label for="email">
          <i class="fe fe-at-sign" data-toggle="tooltip" title=""></i>
          <span class="hidden">Email </span></label>
        <input id="email" type="email" name="email" class="form__input" placeholder="Email" required>
      </div>

      <div class="form__field">
        <label for="phone">
          <i class="fe fe-phone" data-toggle="tooltip" title=""></i>
          <span class="hidden">Téléphone </span></label>
        <input id="phone" type="tel" name="phone" class="form__input" placeholder="Téléphone" required>
      </div>

      <p class="text--center">
        <input class="inputbookcast2021" id="c1" name="tou" type="checkbox"> J'accepte les<a href="{{ route('page.terms') }}"> condition d'utilisation </a>
      </p> 
                 
      <div class="form__field">
        <input type="submit" value="Créer mon compte">
      </div>

    {!! Form::close() !!}

    <p class="text--center">Je suis déjà membre <a href="{{ route('page.login') }}">Se connecter</a> <svg class="icon">
        <use xlink:href="#icon-arrow-right"></use>
      </svg>
    </p>

  </div> 
      
    </div>
</div>
<!-- partial -->

@endsection