<section>
    <div class="tabs_miabartafrik tabs_miabartafrik-style-bar">
        <nav>
            <ul>
                <li><a href="#local_upload" class="icon si si-user">
                    <span>Personne physique</span></a>
                </li>
                <li><a href="#online_upload" class="icon si si-people">
                    <span>Personne morale</span></a>
                </li> 
            </ul>
        </nav>
        <div class="content-wrap text-left">
            <section id="local_upload">
                {!! Form::model($partner, ['route' => 'partner.store', 'id' => 'recaptcha-watcher']) !!}
                {!! Form::hidden('form', 'individual') !!}
                <div class="form-group">
                    {{ Form::label('name', "Nom de marque", ['class' => 'required-text']) }}
                    {{ Form::text('name', $partner->individual->name ?? null, ['class' => 'form-control', 'placeholder' => 'Nom de marque', 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('person_level_id', "Votre niveau", ['class' => 'required-text']) }}
                    {{ Form::select('person_level_id', $personLevels, null, ['class' => 'form-control select2', 'placeholder' => "Votre niveau", 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('work_id', "Votre spécialité", ['class' => 'required-text']) }}
                    {{ Form::select('work_id', $works, $partner->individual->work_id ?? null, ['class' => 'form-control select2', 'placeholder' => "Votre spécialité", 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('area_id', "Domaines d'activité", ['class' => 'required-text']) }}
                    {{ Form::select('area_id', $areas, $partner->areas, ['name' => 'area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
                </div>

                <div class="form-group">
                    {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-block']) !!}
                </div>
                {!! Form::close() !!}
            </section>

            <section id="online_upload">
                {!! Form::model($partner, ['route' => 'partner.store', 'id' => 'recaptcha-watcher']) !!}
                {!! Form::hidden('form', 'corporation') !!}
                <div class="form-group">
                    {{ Form::label('name', "Nom de la société", ['class' => 'required-text']) }}
                    {{ Form::text('name', $partner->society->name ?? null, ['class' => 'form-control', 'placeholder' => 'Nom de la société', 'required' => true]) }}
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('rccm', "RCCM", ['class' => 'required-text']) }}
                            {{ Form::text('rccm', $partner->society->rccm ?? null, ['class' => 'form-control', 'placeholder' => 'RCCM', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('nif', "NIF", ['class' => 'required-text']) }}
                            {{ Form::text('nif', $partner->society->nif ?? null, ['class' => 'form-control', 'placeholder' => 'NIF', 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('person_level_id', "Votre niveau", ['class' => 'required-text']) }}
                    {{ Form::select('person_level_id', $personLevels, null, ['class' => 'form-control select2', 'placeholder' => "Votre niveau", 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('area_id', "Domaines d'activité", ['class' => 'required-text']) }}
                    {{ Form::select('area_id', $areas, $partner->areas, ['id' => 'areaId', 'name' => 'area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
                </div>

                <div class="form-group">
                    {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-block']) !!}
                </div>
                {!! Form::close() !!}
            </section>
        </div>
    </div> 
</section>