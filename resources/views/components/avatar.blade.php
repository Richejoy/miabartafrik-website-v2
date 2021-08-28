<section>
    <p>
        <img alt="{{ $library->description }}" src="{{ $library->remote }}">
    </p>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="local-tab" data-toggle="tab" href="#local" role="tab" aria-controls="local" aria-selected="true">Local</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="remote-tab" data-toggle="tab" href="#remote" role="tab" aria-controls="remote" aria-selected="false">Serveur</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="local" role="tabpanel" aria-labelledby="local-tab">
            {!! Form::model($library, ['files' => true]) !!}
            {!! Form::hidden('form', 'local') !!}

            <div class="row row-sm text-left">
                <div class="col-md-12">
                    <div class="form-group mt-3">
                        {{ Form::label('photo', 'Veuillez selectionner un fichier...', ['class' => 'btn btn-dark required-text']) }}
                        {{ Form::file('photo', ['class' => 'sr-only', 'required' => true]) }}
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('description', 'Description', ['class' => 'required-text mg-b-10']) }}
                        {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'required' => true]) }}
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::submit('Changer', ['class' => 'btnSignin ripple btn-main-primary btn-block']) !!}
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
        <div class="tab-pane fade" id="remote" role="tabpanel" aria-labelledby="remote-tab">
            {!! Form::model($library) !!}
            {!! Form::hidden('form', 'remote') !!}

        <div class="row row-sm text-left">
            <div class="col-md-12">
                <div class="form-group mt-3">
                    {{ Form::label('remote', 'Serveur', ['class' => 'required-text mg-b-10']) }}
                    {{ Form::text('remote', null, ['class' => 'form-control', 'placeholder' => 'Serveur', 'required' => true]) }}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('description', 'Description', ['class' => 'required-text mg-b-10']) }}
                    {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'required' => true]) }}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::submit('Changer', ['class' => 'btnSignin ripple btn-main-primary btn-block']) !!}
                </div>
            </div>
        </div>

        {!! Form::close() !!}
        </div>
    </div>

</section>