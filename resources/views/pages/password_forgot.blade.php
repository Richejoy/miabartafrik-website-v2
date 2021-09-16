@extends('layouts.auth', ['title' => "Mot de passe oublié ?"])

@section('body')

<div class="page main-signin-wrapper">
    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            
            @include("layouts.partials._validation_errors")

            <div class="card">
                <div class="row row-sm m-0">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center details">
                        <div class="pt-5 p-2">
                            <img src="{{ asset('public/assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <img src="{{ asset('public/assets/img/svgs/user0.svg') }}" class="ht-100 mb-0" alt="user">
                            <h5 class="mt-4 text-white textSignHead">Réinitialisez votre mot de passe</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Inscrivez-vous pour créer, découvrir et vous connecter avec la communauté artistique africaine </span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
                        <div class="log_mba">
                            <div class="card-body p-1">
                                <div class="head_fixed_mba_connex">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="textSignHead">Mot de passe oublié ?</h5>
                                    <p class="text-muted tx-13 m-0">Renseigner votre email, téléphone ou nom d'utilisateur pour récuppérer votre mot de passe.</p>
                                </div>

                                <div id="content-3" class="custom-scrollbar-js">
                                    {!! Form::open() !!}
                                    <div class="form-group text-left">
                                        {{ Form::label('email_phone_username', "Identifiants", ['class' => 'required-text mg-b-10 label_mba']) }}
                                        {!! Form::text('email_phone_username', null, ['class' => 'form-control', 'required' => true, 'placeholder' => "Email | téléphone | nom d'utilisateur"]) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Demander un lien de réinitialisation', ['class' => 'btnSignin ripple btn-block mt-3 mb-3']) !!}
                                    </div>
                                    {!! Form::close() !!}

                                    <div class="text-center mt-4 ml-0">
                                        <div>Vous êtes-vous souvenu de votre mot de passe ?</div>
                                        
                                        <div>
                                            Essayez de
                                            <a href="{{ route('page.register') }}">S'inscrire</a>
                                            ou
                                            <a href="{{ route('page.login') }}">S'identifier</a>
                                        </div>
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