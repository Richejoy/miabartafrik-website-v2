@extends('layouts.auth', ['title' => "Complèter compte"])

@section('body')

<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">COMPLETER VOTRE INSCRIPTION</h6>
                                    <p class="text-muted card-sub-title">Mettez une chance de côté en complétant vos
                                        informations de profil.</p>
                                </div>
                                <div id="wizard3">
                                    <h3>Informations</h3>
                                    <x-informations />

                                    @if(session('registratedUser')->user_type_id != 2)
                                    <h3>Complèter</h3>
                                    <x-auth.artist-next-form />
                                    @endif

                                    @if((session('registratedUser')->user_type_id == 3) || (session('registratedUser')->user_type_id == 5))
                                    <h3>Packages</h3>
                                    @livewire('packages')
                                    @endif

                                    <h3>Photo de profil</h3>
                                    @livewire('avatar')

                                    <h3>Fin</h3>
                                    <x-welcome />
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

@endsection