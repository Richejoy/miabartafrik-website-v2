@extends('layouts.auth', ['title' => "Réinitialisation de mot de passe"])

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
                <a class="header-brand" href="{{ route('page.index') }}">
                    <img src="{{ asset('public/assets/images/brand/logo.png') }}" class="h-8" alt="BookCast logo">
                </a>
            </div>

            <p class="text-mutedinscrit">Choisi un nouveau mot de passe. </p>

            <div class="grid_connexionBookcast">

                {!! Form::open(['route' => 'page.password_reset', 'class' => 'form_connexionBookcast login_connexionBookcast']) !!}

                    <div class="form__field">
                        <label for="login__password">
                            <i class="icon icon-lock iconBookconnex" data-toggle="tooltip" title=""></i>
                            <span class="hidden">Nouveau mot de passe </span></label>
                        <input id="login__password" type="password" name="password" class="form__input"
                            placeholder="Nouveau mot de passe" required>
                    </div>

                    <div class="form__field">
                        <label for="login__password">
                            <i class="icon icon-lock iconBookconnex" data-toggle="tooltip" title=""></i>
                            <span class="hidden">Confirmer Nouveau mot de passe </span></label>
                        <input id="login__password" type="password" name="password" class="form__input"
                            placeholder="Confirmer Nouveau mot de passe" required>
                    </div>

                    <div class="form__field">
                        <input type="submit" value="Réinitialiser">
                    </div>

                {!! Form::close() !!}

            </div>

        </div>
    </div>
    <!-- partial -->

@endsection