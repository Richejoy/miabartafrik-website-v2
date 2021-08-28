<header>
    <div class="main-header side-header {{ $dashboard ? 'sticky' : '' }}">
        <div class="container-fluid">

            <div class="main-header-left">
                @if($dashboard)
                <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
                @else
                <a class="main-header-menu-icon d-lg-none" href="" id="mainNavShow"><span></span></a>
                <a class="main-logo" href="{{ route('bookcast.index') }}">
                    <img src="{{ asset('public/assets/img/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ asset('public/assets/img/brand/logo-light.png') }}" class="header-brand-img desktop-logo theme-logo" alt="logo">
                </a>
                @endif
            </div>

            <div class="main-header-center">
                <div class="responsive-logo">
                    <a href="{{ route('bookcast.index') }}"><img src="{{ asset('public/assets/img/brand/logo.png') }}" class="mobile-logo" alt="logo"></a>
                    <a href="{{ route('bookcast.index') }}"><img src="{{ asset('public/assets/img/brand/logo-light.png') }}" class="mobile-logo-dark" alt="logo"></a>
                </div>

                @livewire('bookcast.search')

            </div>

            <div class="main-header-right">

                <!-- Language icon and content -->
                <x-flags />

                <!-- Fullscreen icon -->
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon full-screen-link" href="">
                        <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                        <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                    </a>
                </div>

                <!-- Notifications icon and content -->
                @livewire('bookcast.notifications')

                <!-- Messages notifications icon -->
                @livewire('bookcast.messages')

                <!-- Profile Menu -->
                <x-profile />

                <!-- Toggle bookcast right sidebar -->
                <div class="dropdown d-md-flex header-settings">
                    <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="fe fe-users color_miabart header-icons"></i>
                    </a>
                </div>

                <!-- Navresponsive closed : show only on mobile -->
                <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-grid header-icons navbar-toggler-icon"></i>
                </button>

            </div>

        </div>
    </div>
</header>