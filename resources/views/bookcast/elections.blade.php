@extends('layouts.bookcast', ['title' => 'Liste des concours'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('bookcast.elections') }}">Concours</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Liste des concours</li>
                    </ol>
                </div>

                <x-payment-alert />
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-xl-9 col-lg-12">
                    @livewire('bookcast.elections.search')

                    <div class="content_body">
                        @forelse ($elections as $election)

                        <div class="col-md-12 pt-2">
                            <h4 class="">{{ $election->title }} du {{ $election->start_date }} au {{ $election->end_date }}</h4>
                            <p><a href="{{ route('election.show', ['election' => $election]) }}" class="btn btn-info">Afficher les participants</a></p>
                        </div>

                        @empty

                        <div class="col-md-12">
                            <p>Aucune donnée trouvée</p>
                        </div>

                        @endforelse
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