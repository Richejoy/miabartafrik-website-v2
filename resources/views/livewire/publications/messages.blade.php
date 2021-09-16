<div class="col-12" wire:poll.visible.10s>
    
    <table class="table table-bordered">
        <tr>
            <th class="table-success">Vous : {{ $userPublications->count() }}</th>
            <th class="table-warning">Les autres : {{ $publications->count() - $userPublications->count() }}</th>
            <th class="table-danger">Total : {{ $publications->count() }}</th>
        </tr>
    </table>

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
                    <h6 class="mb-0 mg-t-2 ml-2">{{ $publication->user->username }}</h6>
                    <span class="text-primary ml-2">{{ $publication->created->diffForHumans() }}</span>

                    <span class="post__date-privacy-separator">&nbsp;</span>

                    @if($publication->publication_state_id == 3)
                        <i class="post__privacy fe fe-users" data-toggle="tooltip" title="" data-original-title="Amis"></i>
                    @elseif($publication->publication_state_id == 2)
                        <i class="post__privacy si si-lock" data-toggle="tooltip" title="" data-original-title="Privée"></i>
                    @endif

                </div>
                <div class="ml-auto">
                    @if($publication->isOwner())
                    <div class="dropdown">
                        <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right shadow"
                            style="">
                            <a class="dropdown-item" href="#" wire:click.prevent="deletePublication({{ $publication->id }})">Supprimer</a>

                            @if($publication->publication_state_id == 1)

                            <a class="dropdown-item" href="#" wire:click.prevent="setPublicationState({{ $publication->id }}, 2)">Rendre privée</a>

                            <a class="dropdown-item" href="#" wire:click.prevent="setPublicationState({{ $publication->id }}, 3)">Rendre amical</a>

                            @elseif($publication->publication_state_id == 2)

                            <a class="dropdown-item" href="#" wire:click.prevent="setPublicationState({{ $publication->id }}, 1)">Rendre publique</a>

                            <a class="dropdown-item" href="#" wire:click.prevent="setPublicationState({{ $publication->id }}, 3)">Rendre amical</a>

                            @else

                            <a class="dropdown-item" href="#" wire:click.prevent="setPublicationState({{ $publication->id }}, 1)">Rendre publique</a>

                            <a class="dropdown-item" href="#" wire:click.prevent="setPublicationState({{ $publication->id }}, 2)">Rendre privée</a>

                            @endif

                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="post_text mg-t-0">
                {!! Str::words(nl2br($publication->content), 250) !!}
            </div>

            @if(!is_null($library = $publication->libraries->first()))

            <div class="container">
                @if($library->library_type_id == 1)

                <!-- Image attachment -->
                <div>
                    <img src="{{ $library->remote }}" alt="{{ $library->description }}">
                </div>

                @elseif($library->library_type_id == 3)

                <!-- Video attachment -->
                <div class="miabartvideo_mba__row">
                    <div class="videoWrapper_mba">
                        <div class="video-preview-image_mba" style="background-image:url({{ asset('public/assets/img/artiste/slim-girl.jpg') }})"></div>
                        <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" src="{{ $library->remote }}?loop=0&amp;autoplay=1" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>
                    </div>
                </div>

                @elseif($library->library_type_id == 4)

                <!-- Audio attachment -->
                <div class="post_audio">
                    <audio class="audio_player" controls>
                        <source src="{{ $library->remote }}">
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
                            @forelse($publication->users->take(3) as $user)
                            <div class="main-img-user">
                                <img alt="{{ $user->library->description }}"
                                    class="rounded-circle"
                                    src="{{ $user->library->remote }}">
                            </div>
                            @empty
                            @endforelse

                            <div class="main-avatar"> +{{ $publication->users->take(3)->count() }}</div>
                        </div>
                        <!-- demo-avatar-group -->
                    </div>
                    <!-- demo-avatar-group -->
                </div>
                <div class="media-body">
                    <h6 class="mb-0 mg-t-10">
                        @if($publication->users->count())

                        @if($publication->users->contains(auth()->user()))

                        vous et {{ $publication->users->count() }} {{ Str::plural('autre', $publication->users->count()) }} {{ Str::plural('personne', $publication->users->count()) }} aiment la publication.

                        @else

                        {{ $publication->users->count() }} {{ Str::plural('personne', $publication->users->count()) }} aiment la publication.

                        @endif

                        @else
                            Aucun j'aime
                        @endif
                    </h6>
                </div>
                <div class="ml-auto">
                    <div class="dropdown show">
                        <a class="new" href="#" data-toggle="modal" data-target="#publicationViewModal"><i class="far fa-eye mr-3"></i></a>

                        <a class="new" href="#" wire:click.prevent="toggleLikeUser({{ $publication->id }})">
                            @if($publication->users->contains(auth()->user()))
                            <i class="far fa-heart mr-3 text-success"></i>
                            @else
                            <i class="far fa-heart mr-3"></i>
                            @endif
                        </a>

                        <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a>

                        <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Post container -->
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