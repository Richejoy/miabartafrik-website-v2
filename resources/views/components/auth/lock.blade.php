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
                                <img src="{{ session('lockUser')->library->remote }}"  alt="{{ session('lockUser')->library->description }}">
                            </span>
                            
                            <h5 class="mt-4 text-white textSignHead">Ecran vérroullé</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Entrez votre mot de passe pour accéder à la
                                plateforme .</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
                        <div class="log_mba">
                            <div class="card-body p-1">
                                <div class="head_fixed_mba_connex">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="textSignHead">Ecran de vérroullage</h5>
                                    <p class="text-muted tx-13 m-0">Déverroullez votre écran en entrant
                                        votre mot de passe</p>
                                </div>

                                <div id="content-3" class="custom-scrollbar-js">
                                    {!! Form::open(['route' => 'page.lock_screen']) !!}
                                        {!! Form::hidden('email_phone_username', session('lockUser')->email) !!}
                                        <div class="text-left d-flex float-left mb-4 user-lock">
                                            <img alt="avatar avatar-sm" class="rounded-circle mb-0"
                                                src="{{ session('lockUser')->library->remote }}">
                                            <div class="my-auto">
                                                <p class="font-weight-semibold my-auto ml-2 text-uppercase">{{ session('lockUser')->username }}
                                                </p>
                                                <p class="font-weight-semibold my-auto ml-2">{{ session('lockUser')->userType->name }}
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="input-group" id="show_hide_password">
                                            {!! Form::password('password', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Taper votre mot de passe']) !!}
                                            <div class="input-group-addon">
                                                <a href=""><i class="fe fe-eye-off small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::submit('Dévérroullé', ['class' => 'btnSignin ripple btn-block']) !!}
                                        </div>
                                    {!! Form::close() !!}

                                    <div class="text-center mt-4 ml-0">
                                        <div>
                                            Se connecter avec un autre compte ?
                                            <a href="{{ route('page.logout') }}">Se déconnecter</a>
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