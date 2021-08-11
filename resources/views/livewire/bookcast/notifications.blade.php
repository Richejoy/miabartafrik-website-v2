<div class="dropdown main-header-notification">
    <a class="nav-link icon" href="#">
        <i class="fe fe-bell header-icons"></i>
        <span class="badge badge-danger nav-link-badge">4</span>
    </a>
    <div class="dropdown-menu">
        <div class="header-navheading">
            <p class="main-notification-text">Vous avez 1 notification non lue
                <a href="{{ route('user.index') }}" class="badge badge-pill badge-danger ml-3">Voir tout</a>
            </p>
        </div>
        <div class="main-notification-list">

            <div class="media new">
                <div class="main-img-user online"><img alt="avatar" src="{{ asset('public/assets/img/users/5.jpg') }}">
                </div>
                <div class="media-body">
                    <p>Féliciter <strong>Folly ADOKPO</strong> pour le démarrage d'un nouveau film </p>
                    <span>15 octobre 12h32 </span>
                </div>
            </div>

            <div class="media">
                <div class="main-img-user"><img alt="avatar" src="{{ asset('public/assets/img/users/2.jpg') }}"></div>
                <div class="media-body">
                    <p><strong>Joshua Gray</strong> Nouveau message reçu </p><span>13 octobre 02:56
                    </span>
                </div>
            </div>

        </div>

        <div class="dropdown-footer">
            <a href="{{ route('user.index') }}">Afficher toutes les notifications</a>
        </div>
    </div>
</div>