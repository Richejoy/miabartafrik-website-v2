@extends('layouts.auth', ['title' => "Mot de passe oublié ?"])

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
            style="background: url({{ asset('public/assets/images/home/forgotpass.jpg') }}) no-repeat center / cover;">

        </div>

        <div class="login_Inscrit_bookArt-card">
            <div class="login_Inscrit_bookArt-card-header">
                <a class="header-brand" href="index.html">
                    <img src="{{ asset('public/assets/images/brand/logo.png') }}" class="h-8" alt="BookCast logo">
                </a>


            </div>

            <p class="text-mutedinscrit">Entrez votre identifiant pour générer un nouveau mot de passe. </p>
            <div class="grid_connexionBookcast">

                {!! Form::open(['route' => 'page.password_forgot', 'class' => 'form_connexionBookcast login_connexionBookcast']) !!}

                    <div class="form__field">
                    <label for="login__username">

                        <i class="icon icon-user iconBookconnex" data-toggle="tooltip" title=""></i>
                        <span class="hidden">Nom d'utilisateur </span></label>
                    <input autocomplete="username" id="login__username" type="text" name="username" class="form__input"
                        placeholder="Nom d'utilisateur/Email/Téléphone" required>
                </div>

                    <div class="form__field">
                        <input type="submit" value="Recevoir">
                    </div>

                {!! Form::close() !!}

                <p class="text--center">Renvoyez moi sur la page <a href="{{ route('page.login') }}">Connexion</a> <svg
                        class="icon">
                        <use xlink:href="#icon-arrow-right"></use>
                    </svg></p>

            </div>

        </div>
    </div>
    <!-- partial -->

@endsection