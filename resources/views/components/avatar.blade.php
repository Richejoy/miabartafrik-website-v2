<section>
    <div class="preview_img_mba img_wrapper_mba">
        <img alt="{{ $library->description }}" src="{{ $library->remote }}" id="avatar-preview">
    </div>

    <div class="tabs_miabartafrik tabs_miabartafrik-style-bar">
        <nav>
            <ul>
                <li><a href="#local_upload" class="icon pe-7s-drawer">
                    <span>Local</span></a>
                </li>
                <li><a href="#online_upload" class="icon pe-7s-server">
                    <span>En ligne</span></a>
                </li> 
            </ul>
        </nav>
        <div class="content-wrap text-left">

            <section id="local_upload">
                {!! Form::model($library, ['files' => true]) !!}
                {!! Form::hidden('form', 'local') !!}

                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <div class="custom-file">
                                {{ Form::label('photo', 'Veuillez selectionner un fichier...', ['class' => 'custom-file-label required-text mg-b-10']) }}
                                {{ Form::file('photo', ['class' => 'custom-file-input', 'required' => true]) }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('description', 'Description (texte alternatif)', ['class' => 'required-text mg-b-10']) }}
                            {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description (texte alternatif)', 'required' => true]) }}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::submit('Appliquer les modifications', ['class' => 'btnSignin ripple btn-block']) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </section>

            <section id="online_upload"> 
                {!! Form::model($library) !!}
                {!! Form::hidden('form', 'remote') !!}

                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            {{ Form::label('remote', 'Serveur', ['class' => 'required-text mg-b-10']) }}
                            {{ Form::text('remote', null, ['class' => 'form-control', 'placeholder' => 'Serveur', 'required' => true]) }}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('description', 'Description (texte alternatif)', ['class' => 'required-text mg-b-10']) }}
                            {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description (texte alternatif)', 'required' => true]) }}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::submit('Appliquer les modifications', ['class' => 'btnSignin ripple btn-block']) !!}
                        </div>
                    </div>
                </div>

                {!! Form::close() !!}
            </section>

        </div>
    </div>
</section>