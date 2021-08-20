@extends('layouts.bookcast', ['title' => 'Votes'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-danger" href="{{ route('bookcast.elections') }}">Votes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Voter vos artiste préférés</li>
                    </ol>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-xl-9 col-lg-12">
                    @livewire('bookcast.elections.search')

                    <div class="content_body">
                        <div class="row" id="graybg">

                            @forelse($artists as $artist)
                            
                            <!-- Book artiste -->
                            <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
                            @livewire('bookcast.elections.item', ['artist' => $artist])
                            </div>
                            <!-- end Book artiste -->

                            @empty

                            <div class="col-md-12">
                                <p>Vide</p>
                            </div>

                            @endforelse

                        </div>
                    </div>

                    <p><button type="button" class="btn btn-dark btn-sm">Charger plus </button></p>
                </div>

                <!-- RIGHT ASIDE -->
                @include("layouts.partials.bookcast._right_aside")
                <!-- END RIGHT ASIDE -->

            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
<!-- End Main Content-->

@endsection