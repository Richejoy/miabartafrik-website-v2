@extends('layouts.auth', ['title' => "Mot de passe oublié ?"])

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
                        <div class="mt-3 pt-3 p-2 pos-absolute">
                            <img src="{{ asset('public/assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <img src="{{ asset('public/assets/img/svgs/user0.svg') }}" class="ht-100 mb-0" alt="user">
                            <h5 class="mt-4 text-white">Réinitialisez votre mot de passe</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Inscrivez-vous pour créer, découvrir et vous
                                connecter avec la communauté artistique africaine </span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}"
                                        class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="text-left mb-2">Mot de passe oublié ?</h5>
                                    <p class="mb-4 text-muted tx-13 ml-0 text-left">Renseigner votre email, téléphone ou
                                        nom d'utilisateur pour récuppérer votre mot de passe.</p>

                                    {!! Form::open() !!}
                                    <div class="form-group text-left">
                                        <label for="email_phone_username" class="required-text mg-b-10 label_mba">
                                            Identifiants
                                        </label>
                                        <input class="form-control" placeholder="Email | téléphone | nom d'utilisateur"
                                            type="text" id="email_phone_username" name="email_phone_username">
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Demander un lien de réinitialisation', ['class' => 'btnSignin ripple btn-main-primary btn-block mt-3 mb-3']) !!}
                                    </div>

                                    {!! Form::close() !!}

                                    <div class="card-footer border-top-0 pl-0 mt-3 text-left ">
                                        <p>Vous êtes-vous souvenu de votre mot de passe ?</p>
                                        <p class="mb-0">Essayez de <a
                                                href="{{ route('page.register') }}">S'identifier</a></p>
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