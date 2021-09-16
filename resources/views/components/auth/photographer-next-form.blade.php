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
                {!! Form::model($photographer->individual, ['route' => 'photographer.store']) !!}
                {!! Form::hidden('form', 'individual') !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('photographer_ray_id', "Type de visuo", ['class' => 'required-text']) }}
                            {{ Form::select('photographer_ray_id', $photographerRays, null, ['class' => 'form-control select2', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('person_level_id', "Votre niveau", ['class' => 'required-text']) }}
                            {{ Form::select('person_level_id', $personLevels, null, ['id' => 'dgd6dgd', 'class' => 'form-control select2', 'placeholder' => "Votre niveau", 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('name', "Nom de marque", ['class' => 'required-text']) }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom de marque', 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('photographer_category_id', "Catégorie de photographe", ['class' => 'required-text']) }}
                    {{ Form::select('photographer_category_id', $photographerCategories, null, ['id' => 'gdgsgdg', 'name' => 'photographer_category_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('work_id', "Votre spécialité", ['class' => 'required-text']) }}
                    {{ Form::select('work_id', $works, null, ['class' => 'form-control select2', 'placeholder' => "Votre spécialité", 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('area_id', "Domaines d'activité", ['class' => 'required-text']) }}
                    {{ Form::select('area_id', $areas, null, ['id' => 'nuhhsd', 'name' => 'area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
                </div>

                <div class="form-group">
                    {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-block']) !!}
                </div>
                {!! Form::close() !!}
            </section>

            <section id="online_upload">
                {!! Form::model($photographer->society, ['route' => 'photographer.store']) !!}
                {!! Form::hidden('form', 'corporation') !!}
                <div class="form-group">
                    {{ Form::label('photographer_category_id', "Catégorie de photographe", ['class' => 'required-text']) }}
                    {{ Form::select('photographer_category_id', $photographerCategories, null, ['name' => 'photographer_category_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('name', "Nom de la société", ['class' => 'required-text']) }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom de la société', 'required' => true]) }}
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('rccm', "RCCM", ['class' => 'required-text']) }}
                            {{ Form::text('rccm', null, ['class' => 'form-control', 'placeholder' => 'RCCM', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('nif', "NIF", ['class' => 'required-text']) }}
                            {{ Form::text('nif', null, ['class' => 'form-control', 'placeholder' => 'NIF', 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('person_level_id', "Votre niveau", ['class' => 'required-text']) }}
                    {{ Form::select('person_level_id', $personLevels, null, ['class' => 'form-control select2', 'placeholder' => "Votre niveau", 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('area_id', "Domaines d'activité", ['class' => 'required-text']) }}
                    {{ Form::select('area_id', $areas, null, ['name' => 'area_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
                </div>

                <div class="form-group">
                    {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-block']) !!}
                </div>
                {!! Form::close() !!}
            </section>
        </div>
    </div>
</section>