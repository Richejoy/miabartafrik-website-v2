<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="BookCast -  Miabart Afrik">
    <meta name="author" content="Miabart Afrik">
    <meta name="keywords" content="book artiste, castings artistique, agenda plus, concert en ligne">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/assets/img/brand/favicon.ico') }}" type="image/x-icon" />

    <!-- Title -->
    <title>{{ pageTitle($title) }} | BookCast | {{ config('app.name') }}</title>

    <!-- Bootstrap css-->
    <link href="{{ asset('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('public/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/icon-list.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('public/assets/css/bookcast.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/tabstyles.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/preloader_miabartAfrik.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/colors/default.css') }}" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('public/assets/css/colors/color.css') }}">

    <!-- Select2 css -->
    <link href="{{ asset('public/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Internal Owl Carousel css-->
    <link href="{{ asset('public/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/assets/plugins/multipleselect/multiple-select.css') }}">

    <!-- Sidemenu css-->
    <link href="{{ asset('public/assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">

    <link href="{{ asset('public/assets/plugins/gallery/gallery.css') }}" rel="stylesheet">

    @stack('styles')

    @livewireStyles

    <link href="{{ asset('public/plugins/emojionearea/dist/emojionearea.min.css') }}" rel="stylesheet">
</head>

<body class="horizontalmenu">

    <!-- Loader -->
    @if(in_array(Route::currentRouteName(), ['artist.show', 'partner.show', 'photographer.show']))

    @yield('loader')

    @else

    <x-loader imgLink="{{ auth()->user()->library->remote }}" />

    @endif
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">

        <!-- Scroll with content modal -->
            <div class="modal" id="publicationViewModal">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-primary" type="button">Save changes</button>
                            <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Scroll with content modal -->

        <!-- Main Header-->
        @include("layouts.partials.bookcast._header", ['dashboard' => false])
        <!-- End Main Header-->

        <!-- Mobile-header -->
        @include("layouts.partials.bookcast._mobile_header")
        <!-- Mobile-header closed -->

        <!-- Horizonatal menu-->
        @include("layouts.partials.bookcast._nav")
        <!--End  Horizonatal menu-->

        <!-- Main Content-->
        <main>
            @yield('body')
        </main>
        <!-- End Main Content-->

        @include("layouts.partials.bookcast._footer")

        <!-- Sidebar -->
        @livewire('bookcast.friends')
        <!-- End Sidebar -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- BookCast js-->
    <script src="{{ asset('public/assets/js/bookcast.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('public/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('public/assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('public/assets/js/form-validation.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('public/assets/js/sticky.js') }}"></script>

    <script src="{{ asset('public/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('public/assets/js/carousel.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script src="{{ asset('public/assets/js/cbpFWTabs.js') }}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Internal Gallery js-->
    <script src="{{ asset('public/assets/plugins/gallery/picturefill.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lightgallery.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lightgallery-1.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-pager.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-autoplay.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-fullscreen.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-zoom.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-hash.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-share.js') }}"></script>

    @stack('scripts')

    <script src="{{ asset('public/plugins/emojionearea/dist/emojionearea.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    @livewireScripts

    <script>
        (function() {
            [].slice.call(document.querySelectorAll('.tabs_miabartafrik')).forEach(function(el) {
                new CBPFWTabs(el);
            });

            $('span.share-artist').click(function(e) {
                let div = $(this).data('show');
                $('#' + div).slideToggle();
            });

            $('span.share-photographer').click(function(e) {
                let div = $(this).data('show');
                $('#' + div).slideToggle();
            });

            $('span.share-partner').click(function(e) {
                let div = $(this).data('show');
                $('#' + div).slideToggle();
            });

            $("#publication-input").emojioneArea({
                pickerPosition: 'bottom',
                filtersPosition: "bottom",
                searchPosition: "bottom",
                hidePickerOnBlur: true
            });

        })();
    </script>

    @include('flashy::message')
</body>

</html>