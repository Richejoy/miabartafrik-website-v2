@extends('layouts.auth', ['title' => auth()->user()->full_name])

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

                                    <section>
                                        <h3 class="text-center offre_exclus"><strong>Offres exclusives</strong></h3>

                                        <div class="row plans-list">

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
                                                            <a href="{{ route('photographer.package', array('package' => $package)) }}"
                                                                class="btnSignin ripple btn-main-primary btn-block">J'EN
                                                                PROFITE</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            @empty
                                            @endforelse

                                        </div>
                                    </section>

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

@push('scripts')
<script>
$('a.avantage').click(function(e) {
    e.preventDefault();
    var div = $(this).data('show');
    $('#' + div).slideToggle();
});
</script>
@endpush