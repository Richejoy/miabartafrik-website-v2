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