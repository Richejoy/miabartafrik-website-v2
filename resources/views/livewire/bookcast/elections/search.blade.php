<div class="search_mba_forms">
    <!-- Div2 Input de recher (ici en saisissant, les données correspondante seront autommatiquement visible) -->
    <div class="recherche_miabartafrik_forAll">
        <div class="row m-0">
            <!-- FORM -->
            <form class="col-md-11">
                <div class="inner-form">
                    <div class="main-form" id="main-form">
                        <div class="row secondsearch">
                            <div class="input-wrap">
                                <div class="icon-wrap">
                                    <i class="fe fe-search"></i>
                                </div>
                                <div class="input-field">
                                    <input type="search" class="form-control rounded-0"
                                        placeholder="Que recherchez-vous ?">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Close FORM -->
        </div>
    </div>
    <!-- Close Div2 Input de recher (ici en saisissant, les données correspondante seront autommatiquement visible) -->


    <!-- Div3 recherche par sélecte & son bouton Go () -->

    <div class="recherche_miabartafrik_forAll">

        <!-- FORM-->
        <form class="row m-0">

            <div class="col-md-11 inner-form">

                <div class="main-form" id="main-form">

                    <div class="row second">
                        <div class="input-wrap">
                            <div class="icon-wrap">
                                <i class="si si-location-pin" data-toggle="tooltip" title=""
                                    data-original-title="Choix de pays" width="24" height="24"></i>
                            </div>
                            <div class="input-field">
                                <div class="parsley-select">
                                    {!! Form::select('country_id', $countries, null, ['class' => 'form-control select2', 'placeholder' =>
            'Pays']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="input-wrap">
                            <div class="icon-wrap">
                                <i class="si si-graduation" data-toggle="tooltip" title=""
                                    data-original-title="Choix du domaine artistique" width="24" height="24"></i>
                            </div>
                            <div class="input-field">
                                <div class="parsley-select">
                                    {!! Form::select('area_ray_id', $areaRays, null, ['class' => 'form-control select2', 'placeholder' =>
            'Rayons artistique']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="input-wrap">
                            <div class="icon-wrap">
                                <i class="si si-briefcase" data-toggle="tooltip" title=""
                                    data-original-title="Catégories de vote"></i>
                            </div>
                            <div class="input-field">
                                <div class="parsley-select">
                                    {!! Form::select('area_id', $areas, null, ['class' => 'form-control select2', 'placeholder' =>
            'Domaines artistique']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-1 pr-1">
                <button class="btn-search" type="button">Go</button>
            </div>
        </form>
        <!-- Close FORM-->

    </div>
    <!--  Close Div3 recherche par sélecte & son bouton Go () -->


    <!-- Div4 recherche Avancée () -->
    <div class="row m-0 p-0 search_advanced_mba">

        <!-- FORM -->
        <form class="col-md-12 m-0 p-0">

            <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#advancedsearch">Recherche
                avancée <i class="fe fe-sliders"></i></a>

            <div id="advancedsearch" class="collapse recherche_avancee_mba_2021">
                <div class="collapse-in">
                    <h1 class="comedien-search-form">Recherche détaillée</h1>

                    <div class="card-body m-0 p-0">
                        <h2 class="titre_profil_book">Niveaux</h2>

                        <div class="row">
                            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                <label class="rdiobox"><input checked="" name="rdio" type="radio">
                                    <span>Indifférents</span></label>
                            </div>
                            <div class="col-lg-3">
                                <label class="rdiobox"><input name="rdio" type="radio">
                                    <span>Professionnel(lle)</span></label>
                            </div>
                            <div class="col-lg-3">
                                <label class="rdiobox"><input name="rdio" type="radio">
                                    <span>Débutant(e)</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="card-body m-0 p-0">
                        <h2 class="titre_profil_book">Civilités</h2>

                        <div class="row row-sm">
                            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                <label class="ckbox"><input checked="" type="checkbox"><span>Indifférents</span></label>
                            </div>
                            <div class="col-lg-3">
                                <label class="ckbox"><input type="checkbox"><span>Femme</span></label>
                            </div>
                            <div class="col-lg-3">
                                <label class="ckbox"><input type="checkbox"><span>Homme</span></label>
                            </div>
                            <div class="col-lg-3">
                                <label class="ckbox"><input type="checkbox"><span>Fille</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="soumettre_advanced_search_form__submit">
                        <button type="submit" class="soumettre_advanced_search_form__submit__button">Recherche
                            avancée</button>
                    </div>
                </div>
            </div>

        </form>
        <!-- Close FORM -->
    </div>
    <!-- Close Div4 recherche Avancée () -->
</div>