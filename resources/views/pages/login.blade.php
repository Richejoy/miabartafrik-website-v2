@extends('layouts.auth', ['title' => "Connexion"])

@section('stylesheet')

@endsection

@section('body')

<!-- partial:index.partial.html -->
<div id="login_Inscrit_bookArt-wrap">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('public/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <div class="login_Inscrit_bookArt-image"
        style="background: url({{ asset('public/assets/images/home/login.jpg') }}) no-repeat center / cover;">
    </div>

    <div class="login_Inscrit_bookArt-card">
        <div class="login_Inscrit_bookArt-card-header">
            <a class="header-brand" href="{{ route('page.index') }}">
                <img src="{{ asset('public/assets/images/brand/logo.png') }}" class="h-8" alt="BookCast logo">
            </a>
        </div>

        <p class="text-mutedinscrit">Entrez vos identifiants. </p>
        <div class="grid_connexionBookcast">

            {!! Form::open(['route' => 'page.login', 'class' => 'form_connexionBookcast login_connexionBookcast']) !!}

            <div class="form__field">
                <label for="email_phone_username">
                    <i class="icon icon-user iconBookconnex"></i>
                    <span class="hidden">Email/Téléphone/Nom d'utilisateur </span>
                </label>
                <input id="email_phone_username" type="text" name="email_phone_username" class="form__input"
                    placeholder="Email/Téléphone/Nom d'utilisateur" required>
            </div>

            <div class="form__field">
                <label for="Mot de passe">
                    <i class="icon icon-lock iconBookconnex"></i>
                    <span class="hidden">Mot de passe </span>
                </label>
                <input id="Mot de passe" type="password" name="password" class="form__input" placeholder="Mot de passe"
                    required>
            </div>
            <p class="mpoublier">
                <a href="{{ route('page.password_forgot') }}">J'ai perdu mon mot de passe </a>
            </p>

            <div class="form__field">
                <input type="submit" value="S'identifier">
            </div>

            {!! Form::close() !!}

            <p class="text--center">Pas un membre ? <a href="{{ route('page.register') }}">S'inscrire maintenant</a>
                <svg class="icon">
                    <use xlink:href="#icon-arrow-right"></use>
                </svg>
            </p>

        </div>

    </div>
</div>
<!-- partial -->

@endsection