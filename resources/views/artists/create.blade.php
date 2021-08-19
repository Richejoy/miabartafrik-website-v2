@extends('layouts.auth', ['title' => $artist->user->full_name])

@section('body')

<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block bg-primary details">
                        <div class="mt-4 pt-4 ml-3 pr-3 pos-absolute text-center">
                            <p>
                                <img src="{{ asset('public/assets/img/brand/logo-light.png') }}"
                                    class="header-brand-img mb-4" alt="logo">
                            </p>
                            <div class="clearfix"></div>
                            <p>
                                <img src="{{ asset('public/assets/img/svgs/user0.svg') }}" class="ht-100 mb-0"
                                    alt="user">
                            </p>
                            <h5 class="mt-4 text-white">Créer 2 compte sur 3</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Completer votre compte selon votre profil, pour
                                rejoindre la communauté artistique africaine.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="card-body main-profile-overview mt-3 mb-3">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}"
                                        class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="text-left mb-2">COMPLETER VOTRE INSCRIPTION</h5>
                                    <p class="mb-4 text-muted tx-13 ml-0 text-left">Mettez une chance de côté en
                                        complétant vos informations de profil.</p>

                                    <x-auth.artist-next-form :artist="$artist" />

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