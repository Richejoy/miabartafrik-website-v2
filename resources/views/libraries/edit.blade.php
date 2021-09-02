@extends('layouts.auth', ['title' => auth()->user()->full_name])

@section('body')

<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center details">
                                <div class="pt-5 p-2 pos-absolute">
                                    <img src="https://miabartafrik.com/public/assets/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <img src="https://miabartafrik.com/public/assets/img/svgs/file-upload.svg" class="ht-100 mb-0" alt="user">
                                    <h5 class="mt-4 text-white textSignHead">Photo de profile</h5>
                                    <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Avec une image de profile votre carrière artistique est plus avantageuse.</span>
                                </div>
                            </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body main-profile-overview mt-3 mb-3">
                                    <img src="https://miabartafrik.com/public/assets/img/brand/logo.png"
                                        class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="mb-2 textSignHead">Photo de profile</h5>

                                    <x-avatar :library="$library" />

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