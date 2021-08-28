<section>
    {!! Form::open(['route' => 'artists.store']) !!}

    <p class="dowload_photoProfile small-text">
        * Veillez choisir au maximum trois(3) domaines artistique. Le premier est considérer comme le principal.
    </p>

    <div class="form-group">
        {{ Form::label('area_id', "Domaines artistique", ['class' => 'required-text']) }}
        <div class="parsley-select">
            {{ Form::select('area_id', $areas, null, ['name' => 'area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('language_id', "Langue", ['class' => 'required-text mg-b-10']) }}
        <div class="parsley-select">
            {{ Form::select('language_id', $languages, null, ['class' => 'form-control select2', 'required' => true, 'placeholder' => "Langue"]) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('language_level_id', "Niveau", ['class' => 'required-text mg-b-10']) }}
        <div class="parsley-select">
            {{ Form::select('language_level_id', $languageLevels, null, ['class' => 'form-control select2', 'required' => true, 'placeholder' => "Niveau"]) }}
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