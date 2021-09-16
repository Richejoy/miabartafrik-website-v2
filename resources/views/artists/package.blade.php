@extends('layouts.auth', ['title' => $artist->name])

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
                            <img src="{{ auth()->user()->library->remote }}" class="ht-100 mb-0 avatar_inscription" alt="{{ auth()->user()->library->description }}">
                            <h5 class="mt-4 text-white textSignHead">{{ $artist->name }}</h5>
                            <div class="all_services_mba tx-white-6 tx-13 mb-5 mt-xl-0">
                                @forelse($artist->areas as $area)
                                <small class="all_services_mba_small">{{ $area->name }}</small>
                                @empty
                                <small class="all_services_mba_small">Aucun</small>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
                        <div class="log_mba">
                            <div class="card-body p-1">
                                <div class="head_fixed_mba_connex">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="textSignHead">Offres exclusives</h5>
                                    <p class="text-muted tx-13 m-0">Description</p>
                                </div>

                                <div id="content-3" class="custom-scrollbar-js">
                                    <div class="row plans-list m-0 p-0">

                                        @forelse($packages as $package)
                                        <div class="col-lg-6 zero_padd">
                                            <div class="card_prices mb-3">
                                                <div class="body_price">
                                                    <h4 class="plan-title mb-1  text-center">
                                                        {{ $package->name }}
                                                    </h4>
                                                    <div class="mb-1 text-center">
                                                        <span class="price">{{ $package->getPrice() }}</span>
                                                        /AN
                                                    </div>
                                                    <span class="discount_price">
                                                        {{ $package->getPercentage() }}
                                                    </span>

                                                    <p>
                                                        <a href="#" class="avantage text-center"
                                                            data-show="avantage_price{{ $package->id }}">Voir
                                                            les
                                                            avantages <i class="fas fa-chevron-down"></i></a>
                                                    </p>
                                                    <div id="avantage_price{{ $package->id }}" class="hide"
                                                        style="display: none;">

                                                        {!! nl2br($package->characteristics) !!}
                                                    </div>

                                                    <p class="small-text text-center">
                                                        <a href="{{ route('artist.package', array('package' => $package)) }}"
                                                            class="btnSignin ripple btn-main-primary btn-block">J'EN
                                                            PROFITE</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        @empty
                                        @endforelse
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

@endsection

@push('scripts')

@endpush