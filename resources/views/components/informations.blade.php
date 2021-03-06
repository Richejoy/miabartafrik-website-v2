<section class="text-left">
    {!! Form::model($subscriber, ['id' => 'recaptcha-watcher']) !!}
    <div class="form-group">
        {{ Form::label('username', "Nom d'utilisateur", ['class' => 'required-text']) }}
        {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => "Nom d'utilisateur", 'required' => true]) }}
    </div>

    <div class="row my-2">
        <div class="col-lg-6">
            {{ Form::label('civility_id', "Civilité", ['class' => 'required-text']) }}
            {{ Form::select('civility_id', $civilities, null, ['class' => 'form-control select2', 'placeholder' => "Civilité", 'required' => true]) }}
        </div>
        <div class="col-lg-6">
            {{ Form::label('country_id', "Votre pays d'origine", ['class' => 'required-text']) }}
            {{ Form::select('country_id', $countries, null, ['class' => 'form-control select2', 'placeholder' => "Pays d'origine", 'required' => true]) }}
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            {{ Form::label('last_name', 'Votre nom', ['class' => 'required-text']) }}
            {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Votre nom', 'required' => true]) }}
        </div>
        <div class="col-lg-6">
            {{ Form::label('first_name', 'Votre prénoms', ['class' => 'required-text']) }}
            {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Votre prénoms', 'required' => true]) }}
        </div>
    </div>

    <div class="row my-2">
        <div class="col-lg-6">
            {{ Form::label('email', 'Votre email', ['class' => 'required-text']) }}
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email', 'required' => true, 'readonly' => true]) }}
        </div>
        <div class="col-lg-6">
            {{ Form::label('phone', 'Votre téléphone', ['class' => 'required-text']) }}
            {{ Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Votre téléphone', 'required' => true]) }}
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            {{ Form::label('city', 'Ville', ['class' => 'required-text']) }}
            {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Ville', 'required' => true]) }}
        </div>
        <div class="col-lg-6">
            {{ Form::label('address', 'Adresse', ['class' => 'required-text']) }}
            {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Adresse', 'required' => true]) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_of_birth', "Date de naissance", ['class' => 'required-text']) }}
        {{ Form::date('date_of_birth', now(), ['class' => 'form-control', 'required' => true]) }}
    </div>

    <div class="row my-2">
        <div class="col-lg-6">
            {{ Form::label('password', 'Mot de passe', ['class' => 'required-text']) }}
            <div class="input-group" id="show_hide_password">
                {!! Form::password('password', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Mot de passe']) !!}
                <div class="input-group-addon">
                    <a href=""><i class="fe fe-eye-off small" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            {{ Form::label('password_confirmation', 'Confirmer le mot de passe', ['class' => 'required-text']) }}
            <div class="input-group" id="show_hide_password">
                {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Confirmer le mot de passe']) !!}
                <div class="input-group-addon">
                    <a href=""><i class="fe fe-eye-off small" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group mt-3">
        <label class="ckbox" for="tou">
            <input type="checkbox" id="tou" name="tou" required><span class="">
                J'accepte les <a href="{{ route('page.terms') }}" target="_blank">termes</a> et <a href="{{ route('page.conditions') }}" target="_blank">conditions</a>
            </span>
        </label>
    </div>

    <div class="form-group">
        {!! Form::submit('Complèter mon compte', ['class' => 'btnSignin ripple btn-block']) !!}
    </div>
    {!! Form::close() !!}
</section>