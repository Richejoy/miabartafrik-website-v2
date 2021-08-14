<section>
    {!! Form::open(['route' => 'partners.store']) !!}

    <div class="row mb-2">
        <div class="col-lg-12 mg-t-20 mg-lg-t-0">
            <label for="" class="required-text mg-b-10 label_mba">
                Vous êtes une personne:
            </label> <br>
            <div class="btn-group" data-toggle="buttons">
                <label class="btn active">
                    <input type="radio" name='gender2' checked> <span> Physique</span>
                </label>
                <label class="btn">
                    <input type="radio" name='gender2'> <span> Morale</span>
                </label>
            </div>
        </div><!-- Domaine principal -->
    </div>

    <p>Cas personne morale only</p>
    <div class="row mb-2">
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <label for="" class="required-text mg-b-10 label_mba">
                Nom société ou école référente
            </label>
            <input class="form-control" placeholder="Nom société ou école référente" type="text">
        </div><!-- Domaine principal -->

        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <label for="" class="required-text mg-b-10 label_mba">
                N° Enrégistrement
            </label>
            <input class="form-control" placeholder="N°RCCM / ..." type="text">
        </div><!-- Domaine principal -->
    </div>

    <p>Cas personne physique only</p>
    <div class="row mb-2">
        <div class="col-lg-12 mg-t-20 mg-lg-t-0">
            <label for="" class="required-text mg-b-10 label_mba">
                Votre nom de marque
            </label>
            <input class="form-control" placeholder="Décrivez votre nom de marque" type="text">
        </div><!-- Domaine principal -->
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 mg-t-20 mg-lg-t-0">
            {{ Form::label('area_id', "Domaines d'activité", ['class' => 'required-text mg-b-10 label_mba']) }}
            <div class="parsley-select" id="slWrapper">
                {{ Form::select('area_id', $areas, null, ['class' => 'form-control select2', 'required' => true, 'multiple' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Domaines d'activité"]) }}
                <div id="slErrorContainer"></div>
            </div>
        </div><!-- Domaine principal -->
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('person_level_id', "Votre niveau", ['class' => 'required-text mg-b-10 label_mba']) }}
            <div class="parsley-select" id="slWrapper">
                {{ Form::select('person_level_id', $personLevels, null, ['class' => 'form-control select2', 'placeholder' => "Votre niveau", 'required' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Votre niveau"]) }}
                <div id="slErrorContainer"></div>
            </div>
        </div><!-- Domaine principal -->

        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('work_id', "Votre spécialité", ['class' => 'required-text mg-b-10 label_mba']) }}
            <div class="parsley-select" id="slWrapper">
                {{ Form::select('work_id', $works, null, ['class' => 'form-control select2', 'placeholder' => "Votre spécialité", 'required' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Votre spécialité"]) }}
                <div id="slErrorContainer"></div>
            </div>
        </div><!-- Domaine principal -->
    </div>

    <div class="row">
        <div class="col annuler_mbafonction">

        </div>
        <div class="col enreg_mbafonction">
            <button type="submit" class="btn btn-link">
                Enregistrer mes modifications
            </button>
        </div>
    </div>

    {!! Form::close() !!}
</section>