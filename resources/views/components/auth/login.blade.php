<div class="page main-signin-wrapper">
    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            
            @include("layouts.partials._validation_errors")

            <div class="card">
                <div class="row row-sm m-0">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center details">
                        <div class="pt-5 p-2">
                            <img src="{{ asset('public/assets/img/brand/logo-light.png') }}"
                                class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>

                            <span class="avatar_inscription">
                                <img src="{{ asset('public/assets/img/svgs/user0.svg') }}"  alt="user">
                            </span>

                            <h5 class="mt-4 text-white textSignHead">Connectez-vous !</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Réseau Artistique Africaine</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
                        <div class="log_mba">
                            <div class="card-body p-1">
                                <div class="head_fixed_mba_connex">
                                    <img src="{{ asset('public/assets/img/brand/logo.png') }}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="textSignHead">Connexion</h5>
                                    <p class="text-muted tx-13 m-0">Membre - Artiste - Réseaux artistique - Photographe/Videaste</p>
                                </div>

                                <div id="content-3" class="custom-scrollbar-js">
                                    {!! Form::open(['route' => 'page.login']) !!}
                                    <div class="form-group text-left">
                                        {{ Form::label('email_phone_username', "Identifiants", ['class' => 'required-text mg-b-10 label_mba']) }}
                                        {!! Form::text('email_phone_username', null, ['class' => 'form-control', 'required' => true, 'placeholder' => "Email | Téléphone | Nom d'utilisateur"]) !!}
                                    </div>

                                    <div class="form-group text-left">
                                        {{ Form::label('password', "Mot de passe", ['class' => 'required-text mg-b-10 label_mba']) }}
                                        <div class="input-group" id="show_hide_password">
                                            {!! Form::password('password', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Entrer votre mot de passe']) !!}
                                            <div class="input-group-addon">
                                                <a href=""><i class="fe fe-eye-off small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-left">
                                        <label class="ckbox" for="remember">
                                            <input type="checkbox" id="remember" name="remember">
                                            <span>Se souvenir de moi</span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Se connecter', ['class' => 'btnSignin ripple btn-block']) !!}
                                    </div>
                                    {!! Form::close() !!}

                                    <div class="text-center mt-4 ml-0">
                                        <div>
                                            <a href="{{ route('page.password_forgot') }}">
                                            J'ai perdu mon mot de passe</a>
                                        </div>

                                        <div>
                                            Je n'ai pas un compte.
                                            <a href="{{ route('page.register') }}">S'inscrire
                                                maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>