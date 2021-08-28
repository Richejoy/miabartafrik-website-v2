@extends('layouts.bookcast', ['title' => 'NetConcert'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('bookcast.movies') }}">NetConcert</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vidéos artistiques</li>
                    </ol>
                </div>

                <x-payment-alert />
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <!-- RIGHT ASIDE -->
                @include("layouts.partials.bookcast._right_aside")
                <!-- END RIGHT ASIDE -->

                <div class="col-xl-9 col-lg-12">
                    @livewire('bookcast.movies.player')

                    <!-- Row -->
                    <div class="row row-sm">

                        <div class="col-lg-12 col-md-12">

                            @livewire('bookcast.movies.item')

                        </div>
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
<!-- End Main Content-->

@endsection