<div class="col-12" wire:poll.30s>

    @forelse($publications as $publication)
    <!-- Post container -->
    <div class="card mg-b-20 border">
        <div class="card-header">
            <div class="media">
                <div class="media-user mr-2">
                    <div class="main-img-user avatar-md">
                        <img alt=""
                        class="rounded-circle"
                        src="{{ $publication->user->library->remote }}">
                    </div>
                </div>
                <div class="media-body">
                    <h6 class="mb-0 mg-t-2 ml-2">{{ $publication->user->full_name }}</h6><span class="text-primary ml-2">{{ $publication->created->diffForHumans() }}</span>
                </div>
                <div class="ml-auto">
                    <div class="dropdown"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right shadow"
                            style="">
                            <a class="dropdown-item" href="#">Supprimer le message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="post_text mg-t-0">
                {!! nl2br($publication->content) !!}
            </div>

            @if(!is_null($publication->library))
            <div class="row row-sm">
                @if($publication->library->library_type_id == 1)

                <!-- Image attachment -->
                <div>
                    <img src="{{ $publication->library->remote }}" alt="{{ $publication->library->description }}">
                </div>

                @elseif($publication->library->library_type_id == 3)

                <!-- Video attachment -->
                <div class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik">
                    <video class="w-100" poster="{{ asset('public/assets/img/artiste/slim-girl.jpg') }}" controls>
                        <source src="{{ $publication->library->remote }}">
                            Veuillez mettre à jour votre navigateur.
                    </video>
                </div>

                @elseif($publication->library->library_type_id == 4)

                <!-- Audio attachment -->
                <div class="post_audio">
                    <audio class="audio_player" controls>
                        <source src="{{ $publication->library->remote }}">
                        Your browser dose not Support the audio Tag
                    </audio>
                </div>

                @endif
            </div>
            @endif

            <div class="media mg-t-15 profile-footer">
                <div class="media-user mr-2">
                    <div class="demo-avatar-group">
                        <div class="demo-avatar-group main-avatar-list-stacked">
                            @forelse($publication->publicationLikes->take(3) as $likeUser)
                            <div class="main-img-user">
                                <img alt="{{ $likeUser->library->description }}"
                                    class="rounded-circle"
                                    src="{{ $likeUser->library->remote }}">
                            </div>
                            @empty
                            @endforelse

                            <div class="main-avatar"> +{{ $publication->publicationLikes->take(3)->count() }}</div>
                        </div>
                        <!-- demo-avatar-group -->
                    </div>
                    <!-- demo-avatar-group -->
                </div>
                <div class="media-body">
                    <h6 class="mb-0 mg-t-10">{{ $publication->publicationLikes->count() }} personnes aiment la publication.
                    </h6>
                </div>
                <div class="ml-auto">
                    <div class="dropdown show"> <a class="new"
                            href="JavaScript:void(0);"><i
                                class="far fa-heart mr-3"></i></a> <a
                            class="new" href="JavaScript:void(0);"><i
                                class="far fa-comment mr-3"></i></a> <a
                            class="new" href="JavaScript:void(0);"><i
                                class="far fa-share-square"></i></a> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Post container -->
    @empty

    <p>Aucune donnée</p>

    @endforelse

</div>