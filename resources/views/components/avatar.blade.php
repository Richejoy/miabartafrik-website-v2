<section>
    <p>
        <img alt="{{ $image->description }}" src="{{ $image->link }}">
    </p>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="url-tab" data-toggle="tab" href="#url" role="tab" aria-controls="url"
                aria-selected="true">URL</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="link-tab" data-toggle="tab" href="#link" role="tab" aria-controls="link"
                aria-selected="false">LIEN</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="url" role="tabpanel" aria-labelledby="url-tab">
            {!! Form::model($image, ['files' => true]) !!}
            {!! Form::hidden('form', 'url') !!}

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
        <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="link-tab">
            {!! Form::model($image) !!}
            {!! Form::hidden('form', 'link') !!}

        <div class="row row-sm text-left">
            <div class="col-md-12">
                <div class="form-group mt-3">
                    {{ Form::label('link', 'Lien', ['class' => 'required-text mg-b-10']) }}
                    {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Lien', 'required' => true]) }}
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