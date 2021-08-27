@extends('layouts.bookcast', ['title' => 'Votez vos artistes, photographes et partneaires préférés'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('bookcast.elections') }}">Votes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Votez vos artistes, photographes et partneaires préférés</li>
                    </ol>
                </div>

                <x-payment-alert />
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-xl-9 col-lg-12">
                    <!-- Search box -->

                    <div class="content_body">
                        @livewire('bookcast.elections.item', ['fetch' => 'all', 'election' => $election])
                    </div>
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