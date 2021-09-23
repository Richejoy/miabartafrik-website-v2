<section class="text-left">
    {!! Form::model($member, ['route' => 'member.store', 'id' => 'recaptcha-watcher']) !!}

    <div class="form-group">
        {{ Form::label('work_id', "Profession", ['class' => 'required-text mg-b-10']) }}
        {{ Form::select('work_id', $works, null, ['class' => 'form-control select2', 'required' => true, 'placeholder' => "Profession"]) }}
    </div>

    <div class="form-group">
        {!! Form::submit('Enregistrer', ['class' => 'btnSignin ripple btn-block']) !!}
    </div>

    {!! Form::close() !!}
</section>