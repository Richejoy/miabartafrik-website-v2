@extends('layouts.auth', ['title' => "Réinitialisation de mot de passe"])

@section('body')

<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                        <div class="mt-4 pt-5 p-2 pos-absolute">
                            <img src="{{ asset('public/assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <img src="{{ asset('public/assets/img/svgs/user0.svg') }}" class="ht-100 mb-0" alt="user">
                            <h5 class="mt-4 text-white">Réinitialisez votre mot de passe</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Veillez resignez ls champs pour la
                                reinitialisation de votre mot de passe.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}"
                                        class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="text-left mb-2">Réinitialisez votre mot de passe</h5>
                                    <p class="mb-4 text-muted tx-13 ml-0 text-left">Réinitialiser en quelque seconde
                                        votre mot de passe.</p>

                                    {!! Form::open() !!}
                                    <div class="form-group text-left">
                                        <label for="profile_phone" class="required-text mg-b-10 label_mba">
                                            Email
                                        </label>
                                        <input class="form-control" placeholder="Entrer votre Email " type="text">
                                    </div>
                                    <div class="form-group text-left">
                                        <label for="profile_phone" class="required-text mg-b-10 label_mba">
                                            Nouveau mot de passe
                                        </label>
                                        <input class="form-control" placeholder="Tapez votre mot de passe"
                                            type="password">
                                    </div>
                                    <div class="form-group text-left">
                                        <label for="profile_phone" class="required-text mg-b-10 label_mba">
                                            Confirmez le mot de passe
                                        </label>
                                        <input class="form-control" placeholder="Tapez votre mot de passe"
                                            type="password">
                                    </div>
                                    
                                    <div class="form-group">
                                        {!! Form::submit('Réinitialiser le mot de passe', ['class' => 'btnSignin ripple btn-main-primary btn-block mt-3 mb-3']) !!}
                                    </div>

                                    {!! Form::close() !!}

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