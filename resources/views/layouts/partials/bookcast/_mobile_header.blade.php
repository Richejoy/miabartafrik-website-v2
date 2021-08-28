<div class="mobile-main-header">
    <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <div class="d-flex order-lg-2 ml-auto">

                <!-- Large search -->
                <div class="dropdown header-search">
                    <a class="nav-link icon header-search">
                        <i class="fe fe-search"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="main-form-search p-2">

                            @livewire('bookcast.search')

                        </div>
                    </div>
                </div>

                <!-- Language icon and content -->
                <x-flags />

                <!-- Fullscreen icon -->
                <div class="dropdown ">
                    <a class="nav-link icon full-screen-link">
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

            </div>
        </div>
    </div>
</div>