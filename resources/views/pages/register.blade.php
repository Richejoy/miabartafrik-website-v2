@extends('layouts.auth', ['title' => "Inscription"])

@section('body')

<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                        <div class="pt-5 p-2 pos-absolute">
                            <img src="{{ asset('public/assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <img src="{{ asset('public/assets/img/svgs/user0.svg') }}" class="ht-100 mb-0" alt="user">
                            <h5 class="mt-4 text-white textSignHead">Créer 1 compte sur 3</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Créer un compte selon votre profil, pour
                                rejoindre la communauté artistique africaine.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}"
                                        class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="text-left mb-2 textSignHead">Inscription gratuite</h5>
                                    <p class="mb-4 text-muted tx-13 ml-0 text-left">L'inscription est gratuite et ne
                                        prend que moins de 15s.</p>

                                    {!! Form::open() !!}

                                    <div class="row row-sm text-left">
                                        <div class="col-lg-12 mg-t-20 mg-lg-t-0">

                                            {{ Form::label('user_type_id', "Quel compte crée ?", ['class' => 'required-text mg-b-10 label_mba']) }}

                                            <div class="parsley-select" id="slWrapper">

                                                {{ Form::select('user_type_id', $userTypes, null, ['class' => 'form-control select2', 'placeholder' => "Quel compte crée ?", 'required' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Quel compte crée ?"]) }}

                                                <div id="slErrorContainer"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-sm text-left mt-3">
                                        <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                                            {{ Form::label('email', 'Votre email', ['class' => 'required-text mg-b-10 label_mba']) }}
                                            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email', 'required' => true]) }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Créer mon compte', ['class' => 'btnSignin ripple
                                        btn-main-primary btn-block mt-3 mb-3']) !!}
                                    </div>

                                    {!! Form::close() !!}

                                    <div class="text-left mt-4 ml-0">
                                        <p class="mb-0">Vous avez déjà un compte ? <a
                                                href="{{ route('page.login') }}">Se connecter</a></p>
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