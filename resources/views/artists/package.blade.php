@extends('layouts.auth', ['title' => "Artiste"])

@section('body')

<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-sm">
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
                            <div class="row row-sm">
                                <div class="card-body main-profile-overview mt-3 mb-3">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}"
                                        class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="text-left mb-2">COMPLETER VOTRE INSCRIPTION</h5>
                                    <p class="mb-4 text-muted tx-13 ml-0 text-left">Mettez une chance de côté en complétant vos informations de profil.</p>

                                    <section>
    <h3 class="text-center offre_exclus"><strong>Offres exclusives</strong></h3>

    <div class="row plans-list">

        @if($packages->count())

        @foreach($packages as $package)
        <div class="col-lg-6">
            <h4>{{ $package->name }}</h4>
            <p>{{ $package->expire }} AN</p>

            <p>{{ $package->price }} {{ $package->currency->name }}</p>

            {!! $package->characteristics !!}
        </div>
        @endforeach

        @else
        <div class="col-lg-12">
            <p>aucun package</p>
        </div>
        @endif

        <div class="col-lg-6 zero_padd">
            <div class="card_prices mb-3">
                <div class="body_price">
                    <form method="POST" id="" action="">
                        <input type="hidden" name="_token" value="">
                        <h4 class="plan-title mb-1  text-center">
                            Formule Basique<br>
                            1 an
                        </h4>
                        <div class="mb-1 text-center">
                            <span class="price">4 235 XOF</span> /mois *
                        </div>
                        <span class="discount_price">
                            -5 %
                        </span>

                        <input name="plan_id" type="hidden" value="">

                        <input type="hidden" name="onboarding" value="true">

                        <button type="submit" class="btnSignin ripple btn-main-primary btn-block">
                            J'EN PROFITE
                        </button>

                        <a href="#" class="avantage text-center" data-show="avantage_price">Voir les avantages <i
                                class="fas fa-chevron-down"></i></a>
                        <div id="avantage_price" class="hide" style="display: none;">
                            <ul>
                                <li><strong>3 jours d’essai</strong> gratuit</li>
                                <li><strong>Accédez et postulez à des milliers de castings</strong> en limité</li>
                                <li><strong>Stockez vos photos et vos vidéos</strong> en limité</li>
                                <li><strong>Contactez les artistes</strong></li>
                                <li><strong>Participer aux évènements culturels & artistique</strong> en ligne</li>
                            </ul>
                        </div>
                    </form>
                    <hr>
                    <p class="small-text text-center">
                        * soit 50 820 XOF payables en une fois</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 zero_padd">
            <div class="card_prices mb-3">
                <div class="body_price">
                    <form method="POST" id="" action="">
                        <input type="hidden" name="_token" value="">
                        <h4 class="plan-title mb-1 text-center">
                            Formule Pro<br>
                            1 an
                        </h4>
                        <div class="mb-1 text-center">
                            <span class="price">8 650 XOF</span> /mois *
                        </div>
                        <span class="discount_price">
                            -15 %
                        </span>

                        <input name="plan_id" type="hidden" value="">

                        <input type="hidden" name="onboarding" value="true">

                        <button type="submit" class="btnSignin ripple btn-main-primary btn-block">
                            J'EN PROFITE
                        </button>

                        <a href="#" class="avantage text-center" data-show="avantage_price1">Voir les avantages <i
                                class="fas fa-chevron-down"></i></a>
                        <div id="avantage_price1" class="hide" style="display: none;">
                            <ul>
                                <li><strong>3 jours d’essai</strong> gratuit</li>
                                <li><strong>Accédez et postulez à des milliers de castings</strong> en illimité</li>
                                <li><strong>Stockez vos photos et vos vidéos</strong> en illimité</li>
                                <li><strong>Contactez les artistes</strong></li>
                                <li><strong>Participer aux évènements culturels & artistique</strong> en ligne</li>
                            </ul>
                        </div>
                    </form>
                    <hr>
                    <p class="small-text text-center">
                        * soit 103 800 XOF payables en une fois</p>
                </div>
            </div>
        </div>
        <script>
        $('a.avantage').click(function(e) {
            e.preventDefault();
            var div = $(this).data('show');
            $('#' + div).slideToggle();
        });
        </script>
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