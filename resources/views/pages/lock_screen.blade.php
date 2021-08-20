@extends('layouts.auth', ['title' => "Ecran véroullé"])

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
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block bg-primary details">
                        <div class="mt-4 pt-4 pl-5 ml-3 pr-5 pos-absolute">
                            <img src="{{ asset('public/assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <img src="{{ asset('public/assets/img/svgs/user0.svg') }}" class="ht-100 mb-0" alt="user">
                            <h5 class="mt-4 text-white">Unlock</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Entrez votre mot de passe pour accéder à la
                                plateforme .</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body main-profile-overview mt-3 mb-3">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}"
                                        class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="text-left mb-2">Écran verrouillé</h5>
                                    <p class="mb-4 text-muted tx-13 ml-0 text-left">Déverrouillez votre écran en entrant
                                        votre mot de passe</p>

                                    {!! Form::open() !!}
                                    {!! Form::hidden('email_phone_username', session('lockUser')->email) !!}

                                    <div class="text-left d-flex float-left mb-4 user-lock">
                                        <img alt="avatar avatar-sm" class="rounded-circle mb-0"
                                            src="{{ session('lockUser')->image->link }}">
                                        <div class="my-auto">
                                            <p class="font-weight-semibold my-auto ml-2 text-uppercase">{{ session('lockUser')->full_name }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::password('password', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Tapez votre mot de passe']) !!}
                                    </div>
                                    <div class="text-left">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox"
                                                class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">montrer le mot de passe</span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        {!! Form::submit('Dévérroullé', ['class' => 'btnSignin ripple btn-main-primary btn-block mt-3 mb-3']) !!}
                                    </div>

                                    {!! Form::close() !!}

                                    <div class="text-left mt-4 ml-0">
                                        <p class="mb-0">Se connecter avec un autre compte ? <a
                                                href="{{ route('page.logout') }}">Se déconnecter</a></p>
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