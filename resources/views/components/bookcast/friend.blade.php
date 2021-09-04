<div>
    <div class="main-contact-item">
        <div class="main-img-user">
            <img alt="{{ $friend->receiver->library->description }}" src="{{ $friend->receiver->library->remote }}">
        </div>
        <div class="main-contact-body">
            <h6>{{ $friend->receiver->full_name }}</h6>
            <span>{{ $friend->receiver->email }}</span>
        </div>
        <span class="main-contact-star">
            @if($tab == 'all')
            <a href="#" wire:click="toggleFavoriteFriend({{ $friend->id }})">
                <i class="fe fe-star {{ $friend->favorite ? 'text-info' : '' }}"></i>
            </a>

            <a href="{{ $friend->receiver->call() }}" class="mx-1">
                <i class="fe fe-phone"></i>
            </a>

            <a href="{{ $friend->receiver->message() }}">
                <i class="fe fe-mail"></i>
            </a>
            @endif
        </span>
    </div>
</div>