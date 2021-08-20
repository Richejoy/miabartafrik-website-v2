<section>
    {!! Form::open(['route' => 'artists.store']) !!}

    <p class="dowload_photoProfile small-text">
        * Veillez choisir au maximum trois(3) domaines artistique. Le premier est considérer comme le principal.
    </p>

    <div class="form-group">
        {{ Form::label('area_id', "Domaines artistique", ['class' => 'required-text']) }}
        <div class="parsley-select" id="slWrapper">
            {{ Form::select('area_id', $areas, null, ['name' => 'area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Domaines artistique"]) }}
            <div id="slErrorContainer"></div>
        </div>
    </div>

    <div class="form-group">
                        {{ Form::label('language_id', "Langue", ['class' => 'required-text mg-b-10']) }}
                        <div class="parsley-select" id="slWrapper">
                            {{ Form::select('language_id', $languages, null, ['class' => 'form-control select2', 'required' => true, 'placeholder' => "Langue", 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Langue"]) }}
                            <div id="slErrorContainer"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('language_level_id', "Niveau", ['class' => 'required-text mg-b-10']) }}
                        <div class="parsley-select" id="slWrapper">
                            {{ Form::select('language_level_id', $languageLevels, null, ['class' => 'form-control select2', 'required' => true, 'placeholder' => "Niveau", 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Niveau"]) }}
                            <div id="slErrorContainer"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('language_accent', 'Votre accent', ['class' => 'required-text']) !!}
                        {!! Form::text('language_accent', null, ['class' => 'form-control', 'placeholder' => 'Votre accent']) !!}
                    </div>

    <div class="form-group">
        {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-main-primary btn-block']) !!}
    </div>

    {!! Form::close() !!}

</section>