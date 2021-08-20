<section>
    {!! Form::open() !!}

    <div class="row mb-2">
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('civility_id', "Civilité", ['class' => 'required-text mg-b-10 label_mba']) }}
            <div class="parsley-select" id="slWrapper">
                {{ Form::select('civility_id', $civilities, null, ['class' => 'form-control select2', 'placeholder' => "Civilité", 'required' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Civilité"]) }}
                <div id="slErrorContainer"></div>
            </div>
        </div>
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('country_id', "Votre pays d'origine", ['class' => 'required-text mg-b-10 label_mba']) }}
            <div class="parsley-select" id="slWrapper">
                {{ Form::select('country_id', $countries, null, ['class' => 'form-control select2', 'placeholder' => "Pays d'origine", 'required' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Pays d'origine"]) }}
                <div id="slErrorContainer"></div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('last_name', 'Votre nom', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Votre nom', 'required' => true]) }}
        </div>
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('first_name', 'Votre prénoms', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Votre prénoms', 'required' => true]) }}
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('email', 'Votre email', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::email('email', $subscriber->email, ['class' => 'form-control', 'placeholder' => 'Votre email', 'required' => true, 'readonly' => true]) }}
        </div>
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('phone', 'Votre téléphone', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Votre téléphone', 'required' => true]) }}
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('city', 'Ville', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Ville', 'required' => true]) }}
        </div>
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('address', 'Adresse', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Adresse', 'required' => true]) }}
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('password', 'Mot de passe', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe', 'required' => true]) }}
        </div>
        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            {{ Form::label('password_confirmation', 'Confirmation mot de passe', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe', 'required' => true]) }}
        </div>
    </div>

    <div class="form-group mt-3">
        <label class="ckbox" for="tou">
            <input type="checkbox" id="tou" name="tou" required><span class="">
                J'accepte les <a href="{{ route('page.terms') }}" target="_blank">termes</a> et <a
                    href="{{ route('page.conditions') }}" target="_blank">conditions</a>
            </span>
        </label>
    </div>

    <div class="form-group">
        {!! Form::submit('Créer mon compte', ['class' => 'btnSignin ripple
        btn-main-primary btn-block mt-3 mb-3']) !!}
    </div>

    {!! Form::close() !!}
</section>