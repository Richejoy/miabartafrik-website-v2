<section>
    {!! Form::open(['wire:submit.prevent' => 'save']) !!}
    <div class="write_post_container">
        <div class="media">
            <div class="media-user mr-2">
                <div class="main-img-user avatar-md"><img alt="{{ auth()->user()->library->description }}" class="rounded-circle" src="{{ auth()->user()->library->remote }}"></div>
            </div>
            <div class="media-body">
                <h6 class="mb-0 mg-t-2">{{ auth()->user()->full_name }}</h6>
                <span class="post__date">
                  <a href="#">{{ date('d M Y') }}</a>
                </span>

                <span class="post__date-privacy-separator">&nbsp;</span>

                @if($publicationStateId == 3)
                    <i class="post__privacy fe fe-users" data-toggle="tooltip" title="" data-original-title="Amis"></i>
                @elseif($publicationStateId == 2)
                    <i class="post__privacy si si-lock" data-toggle="tooltip" title="" data-original-title="Privée"></i>
                @else
                    <i class="post__privacy si si-globe" data-toggle="tooltip" title="" data-original-title="Publique"></i>
                @endif

            </div>
            <div class="ml-auto">
                <div class="dropdown"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right shadow" style="">
                        <a class="dropdown-item" href="#" wire:click.prevent="setPublicationState(1)">Publique</a>
                        <a class="dropdown-item" href="#" wire:click.prevent="setPublicationState(2)">Privée</a>
                        <a class="dropdown-item" href="#" wire:click.prevent="setPublicationState(3)">Amis</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="post_input_container">
            <textarea required class="form-control" placeholder="A quoi penses-tu, {{ auth()->user()->full_name }} ?" id="publication-input" wire:model.defer="content" rows="3"></textarea>
            <div class="page-header">
                <div>
                    <label for="media">
                        <i class="fe fe-paperclip" data-toggle="tooltip" title="" data-original-title="Ajouter un média"></i>
                        <input type="file" wire:model.defer="media" id="media" class="sr-only" accept=".jpeg, .jpg, .png, .mp3, .mp4, .pdf, .wav, .gif">
                    </label>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center" wire:model.defer="content">
                        <button x-data
                        @click="$dispatch('input', document.getElementById('publication-input').value)"
                        type="submit"
                        class="btn btn-secondary btn-icon-text"
                        wire:loading.attr="disabled"
                        wire:loading.class.remove="btn-secondary"
                        wire:loading.class="btn-success">
                          <i class="fe fe-send mr-2"></i> Publier
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            @if(!is_null($media))
            <div>
                <p>{{ Str::limit($media->temporaryUrl(), 50) }}</p>
                <img width="50" height="50" alt="Media" src="{{ $media->temporaryUrl() }}"> <span>x</span>
            </div>
            @endif
        
            @error('media')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
    </div>
    {!! Form::close() !!}
</section>