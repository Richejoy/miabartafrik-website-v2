@extends('layouts.auth', ['title' => "Connexion"])

@section('body')

<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages">
        <div class="col-md-12">
            
            <div class="row">
                @include("layouts.partials._validation_errors")
            </div>

            <div class="card">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                        <div class="mt-5 pt-4 p-2 pos-absolute">
                            <img src="{{ asset('public/assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <img src="{{ asset('public/assets/img/svgs/user0.svg') }}" class="ht-100 mb-0" alt="user">
                            <h5 class="mt-4 text-white textSignHead">Créez votre compte </h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Créer un compte artistique, pour rejoindre la
                                communauté artistique africaine.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}"
                                        class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>

                                    {!! Form::open(['route' => 'page.login']) !!}
                                    <h5 class="text-left mb-2 textSignHead">Se connecter à votre compte</h5>
                                    <p class="mb-4 text-muted tx-13 ml-0 text-left">Se connecté pour créer, partager son
                                        book et se connecter au monde artistique.</p>
                                    
                                    <div class="form-group text-left">
                                        {{ Form::label('email_phone_username', "Identifiants", ['class' => 'required-text mg-b-10 label_mba']) }}
                                        {!! Form::text('email_phone_username', null, ['class' => 'form-control', 'required' => true, 'placeholder' => "Email | téléphone | nom d'utilisateur"]) !!}
                                    </div>

                                    <div class="form-group text-left">
                                        {{ Form::label('password', "Mot de passe", ['class' => 'required-text mg-b-10 label_mba']) }}
                                        {!! Form::password('password', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Entrer votre mot de passe']) !!}
                                    </div>
                                    
                                    <div class="form-group">
                                        {!! Form::submit('Se connecter', ['class' => 'btnSignin ripple btn-main-primary btn-block mt-3 mb-3']) !!}
                                    </div>

                                    <div class="form-group mb-0 text-left">
                                        <label class="ckbox" for="remember">
                                            <input type="checkbox" id="remember" name="remember"><span class="">
                                                Se souvenir de moi
                                            </span>
                                        </label>
                                    </div>
                                    {!! Form::close() !!}

                                    <div class="text-left mt-4 ml-0">
                                        <div class="mb-1"><a href="{{ route('page.password_forgot') }}">J'ai perdu mon
                                                mot de passe</a></div>
                                        <div>Je n'ai pas un compte. <a href="{{ route('page.register') }}">S'inscrire
                                                maintenant</a></div>

                                        @if(session()->has('lockUser'))
                                        <div>
                                            <a href="{{ route('page.lock_screen') }}">Page de vérroullage</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>

@endsection