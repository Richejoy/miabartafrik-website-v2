<div class="dropdown main-header-notification">
    <a class="nav-link icon" href="#">
        <i class="fe fe-bell header-icons"></i>
        <span class="badge badge-danger nav-link-badge">{{ $notifications->count() }}</span>
    </a>
    <div class="dropdown-menu">
        <div class="header-navheading">
            <p class="main-notification-text">
                @if($notifications->count())
                <b>{{ $notifications->count() }}</b> notification(s) non lue
                @else
                Aucune notification non lue
                @endif

                <a href="{{ route('notification.index') }}" class="badge badge-pill badge-danger ml-3">Voir tout</a>
            </p>
        </div>
        <div class="main-notification-list">

            @forelse($notifications as $notification)

            <div class="media">
                <div class="main-img-user">
                    <img alt="{{ $notification->sender->library->description }}" src="{{ $notification->sender->library->remote }}">
                </div>
                <div class="media-body">
                    <p><strong>{{ $notification->sender->full_name }}</strong>, {{ $notification->content }}</p>
                    <span>{{ $notification->created->diffForHumans() }}</span>
                </div>
            </div>

            @empty

            <p class="my-3 text-center">Aucune notification non lue reçue</p>

            @endforelse

        </div>

        <div class="dropdown-footer">
            <a href="{{ route('notification.index') }}">Afficher toutes les notifications</a>
        </div>
    </div>
</div>