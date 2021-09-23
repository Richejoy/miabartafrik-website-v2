@extends('layouts.auth', ['title' => "Réinitialisation de mot de passe"])

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
                            
                            <span class="avatar_inscription">
                                <img src="{{ asset('public/assets/img/svgs/user0.svg') }}"  alt="user">
                            </span>
                            
                            <h5 class="mt-4 text-white textSignHead">Réinitialisez votre mot de passe</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Veillez resignez ls champs pour la
                                reinitialisation de votre mot de passe.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
                        <div class="log_mba">
                            <div class="card-body p-1">
                                <div class="head_fixed_mba_connex">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="textSignHead">Réinitialisez votre mot de passe</h5>
                                    <p class="text-muted tx-13 m-0">Réinitialiser en quelque seconde
                                        votre mot de passe.</p>
                                </div>

                                <div id="content-3" class="custom-scrollbar-js">
                                    {!! Form::open() !!}
                                    <div class="form-group text-left">
                                        {{ Form::label('password', "Nouveau mot de passe", ['class' => 'required-text mg-b-10 label_mba']) }}
                                        <div class="input-group" id="show_hide_password">
                                            {!! Form::password('password', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Nouveau mot de passe']) !!}
                                            <div class="input-group-addon">
                                                <a href=""><i class="fe fe-eye-off small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-left">
                                        {{ Form::label('password_confirmation', "Confirmez le mot de passe", ['class' => 'required-text mg-b-10 label_mba']) }}
                                        <div class="input-group" id="show_hide_password">
                                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Confirmer le mot de passe']) !!}
                                            <div class="input-group-addon">
                                                <a href=""><i class="fe fe-eye-off small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Réinitialiser le mot de passe', ['class' => 'btnSignin ripple btn-block']) !!}
                                    </div>
                                    {!! Form::close() !!}

                                    <div class="text-center mt-4 ml-0">
                                        <div>
                                            J'ai un compte.
                                            <a href="{{ route('page.login') }}">
                                            Se connecter maintenant</a>
                                        </div>

                                        <div>
                                            Je n'ai pas un compte.
                                            <a href="{{ route('page.register') }}">S'inscrire
                                                maintenant</a>
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