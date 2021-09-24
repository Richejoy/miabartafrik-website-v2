@extends('layouts.bookcast', ['title' => 'Accueil'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">
    <!-- WELCOME SECTION -->
    <section id="welcome-section" class="grid">
        <div>
            <h2 data-en class="member_info">Acteurs,<br>chanteurs, <br>producteurs, <br>danseurs, <span
                    class="h2color">&</span>...</h2>
        </div>

        <div class="vertical-line"></div>

        <div class="welc_h1">
            <h1 data-en class="vivez_art">Vivez,<br>de votre<br>Art<span class="h1color">.</span></h1>
        </div>
    </section>
    <!-- END WELCOME SECTION -->

    <div class="container">

        <div class="inner-body">

            <!-- Sponsors -->
            @include("layouts.partials.bookcast._sponsors", ['sponsors' => $sponsors])
            <!-- End Sponsors -->

            <!-- Row -->
            <div class="row row-sm">

                <!-- LEFT ASIDE -->
                @include('layouts.partials.bookcast._left_aside')
                <!-- END LEFT ASIDE -->

                <!-- BODY -->
                <div class="col-xl-6 col-lg-12" id="publicationApp">

                    <publication :user="{{ \App\Models\User::with('library')->find(auth()->id()) }}"></publication>

                </div>
                <!-- END BODY -->

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