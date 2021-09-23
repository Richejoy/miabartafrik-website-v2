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
                {!! Form::model($photographer, ['route' => 'photographer.store', 'id' => 'recaptcha-watcher']) !!}
                {!! Form::hidden('form', 'individual') !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('photographer_ray_id', "Type de visuo", ['class' => 'required-text mg-b-10 label_mba']) }}
                            {{ Form::select('photographer_ray_id', $photographerRays, null, ['data-ray' => true, 'class' => 'form-control select2', 'placeholder' => "Type de visuo", 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('person_level_id', "Votre niveau", ['class' => 'required-text mg-b-10 label_mba']) }}
                            {{ Form::select('person_level_id', $personLevels, null, ['class' => 'form-control select2', 'placeholder' => "Votre niveau", 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('name', "Nom de marque", ['class' => 'required-text mg-b-10 label_mba']) }}
                    {{ Form::text('name', $photographer->individual->name ?? null, ['class' => 'form-control', 'placeholder' => 'Nom de marque', 'required' => true]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('photographer_category_id', "Domaines", ['class' => 'required-text mg-b-10 label_mba']) }}
                    {{ Form::select('photographer_category_id', $photographerCategories, $photographer->photographerCategories, ['data-categories' => true, 'name' => 'photographer_category_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
                </div>

                <div class="form-group">
                    {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-block']) !!}
                </div>
                {!! Form::close() !!}
            </section>

            <section id="online_upload">
                {!! Form::model($photographer, ['route' => 'photographer.store', 'id' => 'recaptcha-watcher']) !!}
                {!! Form::hidden('form', 'corporation') !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('photographer_ray_id', "Type de visuo", ['class' => 'required-text mg-b-10 label_mba']) }}
                            {{ Form::select('photographer_ray_id', $photographerRays, null, ['id' => 'photographerRayId', 'data-ray' => true, 'class' => 'form-control select2', 'placeholder' => "Type de visuo", 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('person_level_id', "Votre niveau", ['class' => 'required-text mg-b-10 label_mba']) }}
                            {{ Form::select('person_level_id', $personLevels, null, ['id' => 'personLevelId', 'class' => 'form-control select2', 'placeholder' => "Votre niveau", 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('name', "Nom de la société", ['class' => 'required-text mg-b-10 label_mba']) }}
                    {{ Form::text('name', $photographer->society->name ?? null, ['class' => 'form-control', 'placeholder' => 'Nom de la société', 'required' => true]) }}
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('rccm', "RCCM", ['class' => 'required-text mg-b-10 label_mba']) }}
                            {{ Form::text('rccm', $photographer->society->rccm ?? null, ['class' => 'form-control', 'placeholder' => 'RCCM', 'required' => true]) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('nif', "NIF", ['class' => 'required-text mg-b-10 label_mba']) }}
                            {{ Form::text('nif', $photographer->society->nif ?? null, ['class' => 'form-control', 'placeholder' => 'NIF', 'required' => true]) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('photographer_category_id', "Domaines", ['class' => 'required-text mg-b-10 label_mba']) }}
                    {{ Form::select('photographer_category_id', $photographerCategories, $photographer->photographerCategories, ['id' => 'photographerCategoryId', 'data-categories' => true, 'name' => 'photographer_category_id[]', 'class' => 'form-control select2', 'required' => true, 'multiple' => true]) }}
                </div>

                <div class="form-group">
                    {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-block']) !!}
                </div>
                {!! Form::close() !!}
            </section>
        </div>
    </div>
</section>