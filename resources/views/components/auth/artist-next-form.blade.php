<section>
    {!! Form::open(['route' => 'artists.store']) !!}
    {!! Form::hidden('form', 'artisticArea') !!}

    <p class="dowload_photoProfile small-text">
        * Veillez choisir au maximum trois(3) domaines artistique. Le premier est considérer comme le principal.
    </p>

    <div class="form-group">
        {{ Form::label('artistic_area_id', "Domaines artistique", ['class' => 'required-text']) }}
        <div class="parsley-select" id="slWrapper">
            {{ Form::select('artistic_area_id', $artisticAreas, null, ['name' => 'artistic_area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Domaines artistique"]) }}
            <div id="slErrorContainer"></div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-main-primary btn-block']) !!}
    </div>

    {!! Form::close() !!}

    <h6 class="font-weight-bold">Langues parlées</h6>
    <p>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#languageModal">Ajouter une
            langue</button>
    </p>

    <div class="modal fade" id="languageModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajout de langue</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    {!! Form::open(['route' => 'artists.store']) !!}
                    {!! Form::hidden('form', 'language') !!}


                    <div class="form-group">
                        {{ Form::label('language_id', "Langue", ['class' => 'required-text mg-b-10']) }}
                        <div class="parsley-select" id="slWrapper">
                            {{ Form::select('language_id', $languages, null, ['class' => 'form-control select2', 'required' => true, 'placeholder' => "Langue", 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Langue"]) }}
                            <div id="slErrorContainer"></div>
                        </div>
                    </div><!-- Langue -->

                    <div class="form-group">
                        {{ Form::label('language_level_id', "Niveau", ['class' => 'required-text mg-b-10']) }}
                        <div class="parsley-select" id="slWrapper">
                            {{ Form::select('language_level_id', $languageLevels, null, ['class' => 'form-control select2', 'required' => true, 'placeholder' => "Niveau", 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Niveau"]) }}
                            <div id="slErrorContainer"></div>
                        </div>
                    </div><!-- Niveau -->

                    <div class="form-group">
                        {!! Form::label('language_accent', 'Votre accent', ['class' => 'required-text']) !!}
                        {!! Form::text('language_accent', null, ['class' => 'form-control', 'placeholder' => 'Votre accent']) !!}
                    </div><!-- Accent -->

                    <div class="form-group">
                        <label for="leave_page">
                            <input type="checkbox" id="leave_page" name="leave_page">
                            Quitter une fois valider ?
                        </label>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-main-primary btn-block']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>

            </div>
        </div>
    </div>

</section>