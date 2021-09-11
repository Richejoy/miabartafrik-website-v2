@extends('layouts.auth', ['title' => $partner->user->full_name])

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
                            <img src="{{ $partner->user->library->remote }}" class="ht-100 mb-0 avatar_inscription" alt="{{ $partner->user->library->description }}">
                            <h5 class="mt-4 text-white textSignHead">{{ auth()->user()->username }}</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Description</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
                        <div class="log_mba">
                            <div class="card-body p-1">
                                <div class="head_fixed_mba_connex">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="textSignHead">Titre</h5>
                                    <p class="text-muted tx-13 m-0">Description</p>
                                </div>

                                <div id="content-3" class="custom-scrollbar-js">
                                    
                                    <x-auth.partner-next-form :partner="$partner" />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection