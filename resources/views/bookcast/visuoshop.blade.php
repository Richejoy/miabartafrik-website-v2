@extends('layouts.bookcast', ['title' => 'VisuoShop'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-danger" href="{{ route('bookcast.visuoshop') }}">VisuoShop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Liste des photographes</li>
                    </ol>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-xl-9 col-lg-12">
                    @livewire('bookcast.visuoshop.search')

                    <div class="content_body">
                        <div class="row" id="graybg">
                            @forelse ($photographers as $photographer)
                            <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
                                @livewire('bookcast.visuoshop.item', ['photographer' => $photographer])
                            </div>
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