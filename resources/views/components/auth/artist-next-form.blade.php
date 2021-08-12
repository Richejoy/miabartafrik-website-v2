<section>
    {!! Form::open() !!}

    {!! Form::hidden('form', 'artist') !!}

    <div class="row row-sm text-left mb-2">

        <div class="col-lg-12 mg-t-20 mg-lg-t-0">
            <p class="dowload_photoProfile small-text">
                * Veillez choisir au minimum trois(3) domaines artistique. Le premier est considérer comme le principal.
            </p>

            {{ Form::label('artistic_area_id', "Domaines artistique", ['class' => 'required-text mg-b-10 label_mba']) }}
            <div class="parsley-select" id="slWrapper">
                {{ Form::select('artistic_area_id', $artisticAreas, null, ['name' => 'artistic_area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Domaines artistique"]) }}
                <div id="slErrorContainer"></div>
            </div>
        </div><!-- Domaine principal -->
    </div>

    <div class="all_langues_parlee">

        <label for="" class="required-text mg-b-10 label_mba">
            Langue(s) parlée(s)
        </label>

        <div id="langues_artist" class="row row-sm text-left mb-2">
            <!-- Langues parlées -->

            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                {{ Form::label('language_id', "Langue", ['class' => 'required-text mg-b-10']) }}
                <div class="parsley-select" id="slWrapper">
                    {{ Form::select('language_id', $languages, null, ['class' => 'form-control select2', 'required' => true, 'placeholder' => "Langue", 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Langue"]) }}
                    <div id="slErrorContainer"></div>
                </div>
            </div><!-- Langue -->

            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                {{ Form::label('language_level_id', "Niveau de la Langue", ['class' => 'required-text mg-b-10']) }}
                <div class="parsley-select" id="slWrapper">
                    {{ Form::select('language_level_id', $languageLevels, null, ['class' => 'form-control select2', 'required' => true, 'placeholder' => "Niveau de la Langue", 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Niveau de la Langue"]) }}
                    <div id="slErrorContainer"></div>
                </div>
            </div><!-- Niveau -->

            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <label for="" class="">Accent </label>
                <input class="form-control" placeholder="Votre accent" type="text">
            </div><!-- Accent -->

            <!-- End Langues parlées -->

        </div>
    </div>

    <div class="row">
        <div class="col annuler_mbafonction">
            <p><a href="#">Ajouter une langue</a></p>
        </div>
        <div class="col enreg_mbafonction">
            <button type="submit" class="btn btn-link">
                Enregistrer mes modifications
            </button>
        </div>
    </div>

    {!! Form::close() !!}
</section>