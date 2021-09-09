@extends('layouts.auth', ['title' => "Inscription"])

@section('body')

<div class="page main-signin-wrapper">
    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            
            <div class="row">
                @include("layouts.partials._validation_errors")
            </div>

            <div class="card">
                <div class="row row-sm m-0">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center details">
                        <div class="pt-5 p-2">
                            <img src="{{ asset('public/assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <img src="{{ asset('public/assets/img/svgs/customer.svg') }}" class="ht-100 mb-0" alt="user">
                            <h5 class="mt-4 text-white textSignHead">Créer 1 compte sur 3</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Créer un compte selon votre profil (Membre - Artiste - Réseaux artistique - Photographe/Videaste) pour rejoindre la communauté artistique africaine.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
                        <div class="log_mba">
                            <div class="card-body p-1">
                                <div class="head_fixed_mba_connex">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="textSignHead">Inscription gratuite</h5>
                                    <p class="text-muted tx-13 m-0">L'inscription est gratuite et ne prend qu'une minute.</p>
                                </div>

                                <div id="content-3" class="custom-scrollbar-js">
                                    {!! Form::open(['route' => 'page.register']) !!}
                                    <div class="form-group text-left">
                                        {{ Form::label('user_type_id', "Votre profil", ['class' => 'required-text mg-b-10 label_mba']) }}
                                        {{ Form::select('user_type_id', $userTypes, null, ['class' => 'form-control select2', 'placeholder' => "Votre profil", 'required' => true]) }}
                                    </div>

                                    <div class="form-group text-left">
                                        {{ Form::label('email', 'Votre email', ['class' => 'required-text mg-b-10 label_mba']) }}
                                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email', 'required' => true]) }}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Créer mon compte', ['class' => 'btnSignin ripple btn-block']) !!}
                                    </div>
                                    {!! Form::close() !!}

                                    <div class="text-center mt-4 ml-0">
                                        <div>
                                            Vous avez déjà un compte ?
                                            <a href="{{ route('page.login') }}">Se connecter</a>
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