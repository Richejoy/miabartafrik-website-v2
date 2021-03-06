<div class="dropdown main-profile-menu">
    <a class="d-flex" href="#">
        <span class="main-img-user"><img alt="{{ auth()->user()->library->description }}" src="{{ auth()->user()->library->remote }}"></span>
    </a>
    <div class="dropdown-menu">
        <div class="header-navheading">
            <p class="py-2">
                <img width="100px" height="100px" alt="{{ auth()->user()->library->description }}"
                src="{{ auth()->user()->library->remote }}">
            </p>
            <h6 class="main-notification-title">{{ auth()->user()->username }}</h6>
            <p class="main-notification-text">{{ auth()->user()->userType->name }}</p>
        </div>
        <a class="dropdown-item border-top" href="{{ route('user.index') }}">
            <i class="fe fe-home"></i> Tableau de bord
        </a>
        <a class="dropdown-item border-top" href="{{ route('user.show', ['user' => auth()->id()]) }}">
            <i class="fe fe-user"></i> Mon profil
        </a>
        <a class="dropdown-item" href="{{ route('user.edit', ['user' => auth()->id()]) }}">
            <i class="fe fe-edit"></i> Editer le profil
        </a>
        <a class="dropdown-item" href="{{ route('settings.index') }}">
            <i class="fe fe-settings"></i> Paramètres du compte
        </a>
        <a class="dropdown-item" href="{{ route('page.lock', ['lock' => uniqid()]) }}">
            <i class="fe fe-compass"></i> Vérroullé écran
        </a>
        <a class="dropdown-item" href="{{ route('page.logout') }}">
            <i class="fe fe-power"></i> Se déconnecter
        </a>
    </div>
</div>