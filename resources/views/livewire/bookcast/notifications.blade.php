<div class="dropdown main-header-notification" wire:poll.visible.60s>
    <a class="nav-link icon" href="#">
        <i class="fe fe-bell header-icons"></i>
        <span class="badge badge-danger nav-link-badge">{{ $notifications->count() }}</span>
    </a>
    <div class="dropdown-menu">
        @if($notifications->count())
        <div class="header-navheading py-2">
            <p class="main-notification-text">
                <b>{{ $notifications->count() }}</b> notification(s) reçue
                <a href="{{ route('notification.index') }}" class="badge badge-pill badge-danger ml-3">Voir tout</a>
            </p>
        </div>
        @endif

        <div class="main-notification-list">

            @forelse($notifications as $notification)

            <a href="{{ route('notification.index') }}" class="media">
                <div class="main-img-user">
                    <img alt="{{ $notification->sender->library->description }}" src="{{ $notification->sender->library->remote }}">
                </div>
                <div class="media-body">
                    <p><strong>{{ $notification->sender->full_name }}</strong>, {{ $notification->content }}</p>
                    <span>{{ $notification->created->diffForHumans() }}</span>
                </div>
            </a>

            @empty

            <!-- PAGE NOT FOUND -->
            <div class="page_miabartAfrik_not_found">  
                <div class="content_miabartAfrik_not_found"> 
                    <h2>Aucune donnée trouver</h2>
                    <p>Revenez plus tard</p>
                </div> 
            </div>
            <!-- END PAGE NOT FOUND -->

            @endforelse

        </div>

        @if($notifications->count())
        <div class="dropdown-footer">
            <a href="{{ route('notification.index') }}">Afficher toutes les notifications</a>
        </div>
        @endif
    </div>
</div>