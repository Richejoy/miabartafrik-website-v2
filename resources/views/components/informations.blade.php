{!! Form::open() !!}

<div class="form-group text-left">
    {{ Form::label('username', "Nom d'utilisateur", ['class' => 'required-text']) }}
        {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => "Nom d'utilisateur", 'required' => true]) }}
</div>

<div class="row my-2">
    <div class="col-lg-6 text-left">
        {{ Form::label('civility_id', "Civilité", ['class' => 'required-text']) }}
        {{ Form::select('civility_id', $civilities, null, ['class' => 'form-control select2', 'placeholder' => "Civilité", 'required' => true]) }}
    </div>
    <div class="col-lg-6 text-left">
        {{ Form::label('country_id', "Votre pays d'origine", ['class' => 'required-text']) }}
        {{ Form::select('country_id', $countries, null, ['class' => 'form-control select2', 'placeholder' => "Pays d'origine", 'required' => true]) }}
    </div>
</div>

<div class="row">
    <div class="col-lg-6 text-left">
        {{ Form::label('last_name', 'Votre nom', ['class' => 'required-text']) }}
        {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Votre nom', 'required' => true]) }}
    </div>
    <div class="col-lg-6 text-left">
        {{ Form::label('first_name', 'Votre prénoms', ['class' => 'required-text']) }}
        {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Votre prénoms', 'required' => true]) }}
    </div>
</div>

<div class="row my-2">
    <div class="col-lg-6 text-left">
        {{ Form::label('email', 'Votre email', ['class' => 'required-text']) }}
        {{ Form::email('email', $subscriber->email, ['class' => 'form-control', 'placeholder' => 'Votre email', 'required' => true, 'readonly' => true]) }}
    </div>
    <div class="col-lg-6 text-left">
        {{ Form::label('phone', 'Votre téléphone', ['class' => 'required-text']) }}
        {{ Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Votre téléphone', 'required' => true]) }}
    </div>
</div>

<div class="row">
    <div class="col-lg-6 text-left">
        {{ Form::label('city', 'Ville', ['class' => 'required-text']) }}
        {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Ville', 'required' => true]) }}
    </div>
    <div class="col-lg-6 text-left">
        {{ Form::label('address', 'Adresse', ['class' => 'required-text']) }}
        {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Adresse', 'required' => true]) }}
    </div>
</div>

<div class="row my-2">
    <div class="col-lg-6 text-left">
        {{ Form::label('password', 'Mot de passe', ['class' => 'required-text']) }}
        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe', 'required' => true]) }}
    </div>
    <div class="col-lg-6 text-left">
        {{ Form::label('password_confirmation', 'Confirmer le mot de passe', ['class' => 'required-text']) }}
        {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmer le mot de passe', 'required' => true]) }}
    </div>
</div>

<div class="form-group text-left mt-3">
    <label class="ckbox" for="tou">
        <input type="checkbox" id="tou" name="tou" required><span class="">
            J'accepte les <a href="{{ route('page.terms') }}" target="_blank">termes</a> et <a
                href="{{ route('page.conditions') }}" target="_blank">conditions</a>
        </span>
    </label>
</div>

<div class="form-group">
    {!! Form::submit('Complèter mon compte', ['class' => 'btnSignin ripple btn-block']) !!}
</div>

{!! Form::close() !!}