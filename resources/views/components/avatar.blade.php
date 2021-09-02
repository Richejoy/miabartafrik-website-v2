<section>

    <div class="preview_img_mba img_wrapper_mba">
        <img alt="{{ $library->description }}" src="{{ $library->remote }}" id="preview-upload">
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
        <div class="content-wrap">

            <!-- local_upload START -->
            <section id="local_upload">
                {!! Form::model($library, ['files' => true]) !!}
            {!! Form::hidden('form', 'local') !!}

            <div class="row row-sm text-left">
                <div class="col-md-12">
                    <div class="form-group mt-3">
                        {{ Form::label('photo', 'Veuillez selectionner un fichier...', ['class' => 'btn btn-dark required-text']) }}
                        {{ Form::file('photo', ['class' => 'sr-only', 'required' => true, 'data-upload '=> true]) }}
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
            </section>
            <!-- local_upload END -->

            <!-- online_upload START -->
            <section id="online_upload"> 
                 {!! Form::model($library) !!}
            {!! Form::hidden('form', 'remote') !!}

            <div class="row row-sm text-left">
                <div class="col-md-12">
                    <div class="form-group mt-3">
                        {{ Form::label('remote', 'Serveur', ['class' => 'required-text mg-b-10']) }}
                        {{ Form::text('remote', null, ['class' => 'form-control', 'placeholder' => 'Serveur', 'required' => true, 'data-upload' => true]) }}
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
            </section>

            <!-- online_upload END --> 

        </div><!-- /content -->
    </div>

</section>