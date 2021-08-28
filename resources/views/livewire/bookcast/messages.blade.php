<div class="dropdown main-header-notification">
    <a class="nav-link icon" href="#">
        <i class="fe fe-mail header-icons"></i>
        <span class="badge badge-success nav-link-badge">{{ $messages->count() }}</span>
    </a>
    <div class="dropdown-menu">
        @if($messages->count())
        <div class="header-navheading">
            <p class="main-notification-text">
                <b>{{ $messages->count() }}</b> message(s) non lu
                <a href="{{ route('message.index') }}" class="badge badge-pill badge-success ml-3">Voir tout</a>
            </p>
        </div>
        @endif
        
        <div class="main-notification-list">

            @forelse($messages as $message)

            <div class="media">
                <div class="main-img-user">
                    <img alt="{{ $message->sender->library->description }}" src="{{ $message->sender->library->remote }}">
                </div>
                <div class="media-body">
                    <p>
                        <strong>{{ $message->sender->full_name }}</strong>, vous a envoyé un nouveau message.
                    </p>
                    <span>{{ $message->created->diffForHumans() }}</span>
                </div>
            </div>

            @empty

            <p class="my-3 text-center">Aucun message reçu</p>

            @endforelse

        </div>

        @if($messages->count())
        <div class="dropdown-footer">
            <a href="{{ route('message.index') }}">Afficher tous les messages</a>
        </div>
        @endif
    </div>
</div>