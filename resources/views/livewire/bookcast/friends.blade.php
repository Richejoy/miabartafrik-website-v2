@forelse($friends as $friend)
<div class="main-contact-item">
    <div class="main-img-user">
        <img alt="avatar" src="{{ $friend->receiver->library->remote }}">
    </div>
    <div class="main-contact-body">
        <h6>{{ $friend->receiver->full_name }}</h6>
        <span>{{ $friend->receiver->email }}</span>
    </div>
    <span class="main-contact-star">
        @if($tab == 'all')
        <a href="#">
            <i class="fe fe-star"></i>
        </a>
        @else
        <a href="#">
            <i class="fe fe-trash-2"></i>
        </a>
        @endif

        <a href="#" class="mx-1">
            <i class="fe fe-phone-call"></i>
        </a>
        <a href="#">
            <i class="fe fe-eye"></i>
        </a>
    </span>
</div>
@empty
<div class="text-center py-5">
    <p>Aucun contact</p>
</div>
@endforelse