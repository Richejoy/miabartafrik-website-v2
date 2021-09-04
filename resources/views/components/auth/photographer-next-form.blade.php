<section>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="individual-tab" data-toggle="tab" href="#individual" role="tab" aria-controls="individual"
                aria-selected="true">Personne Physique</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="corporation-tab" data-toggle="tab" href="#corporation" role="tab" aria-controls="corporation"
                aria-selected="false">Personne Morale</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active py-3" id="individual" role="tabpanel" aria-labelledby="individual-tab">
            {!! Form::model($photographer->individual, ['route' => 'photographer.store']) !!}
            {!! Form::hidden('form', 'individual') !!}

            <div class="form-group">
                {{ Form::label('name', "Nom de marque", ['class' => 'required-text']) }}
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom de marque', 'required' => true]) }}
            </div>

            <div class="form-group">
                {{ Form::label('person_level_id', "Votre niveau", ['class' => 'required-text']) }}
                <div class="parsley-select">
                    {{ Form::select('person_level_id', $personLevels, null, ['class' => 'form-control select2', 'placeholder' => "Votre niveau", 'required' => true]) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('work_id', "Votre spécialité", ['class' => 'required-text']) }}
                <div class="parsley-select">
                    {{ Form::select('work_id', $works, null, ['class' => 'form-control select2', 'placeholder' => "Votre spécialité", 'required' => true]) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('area_id', "Domaines d'activité", ['class' => 'required-text']) }}
                {{ Form::select('area_id', $areas, null, ['name' => 'area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
            </div>

            <div class="form-group">
                {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-main-primary btn-block']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        <div class="tab-pane fade py-3" id="corporation" role="tabpanel" aria-labelledby="corporation-tab">
            {!! Form::model($photographer->society, ['route' => 'photographer.store']) !!}
            {!! Form::hidden('form', 'corporation') !!}

            <div class="form-group">
                {{ Form::label('name', "Nom de la société", ['class' => 'required-text']) }}
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom de la société', 'required' => true]) }}
            </div>

            <div class="form-group">
                {{ Form::label('rccm', "RCCM", ['class' => 'required-text']) }}
                {{ Form::text('rccm', null, ['class' => 'form-control', 'placeholder' => 'RCCM', 'required' => true]) }}
            </div>

            <div class="form-group">
                {{ Form::label('nif', "NIF", ['class' => 'required-text']) }}
                {{ Form::text('nif', null, ['class' => 'form-control', 'placeholder' => 'NIF', 'required' => true]) }}
            </div>

            <div class="form-group">
                {{ Form::label('area_id', "Domaines d'activité", ['class' => 'required-text']) }}
                <div class="parsley-select">
                    {{ Form::select('area_id', $areas, null, ['name' => 'area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-main-primary btn-block']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</section>