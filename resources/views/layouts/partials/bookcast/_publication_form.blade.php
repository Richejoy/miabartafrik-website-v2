<section>
    {!! Form::open(['route' => 'publication.store', 'id' => 'publication-form']) !!}
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

                <i id="publication-state" class="post__privacy si si-globe" data-toggle="tooltip" title="" data-original-title="Publique"></i>

                <span class="dropdown">
                    <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false">
                    <i class="fe fe-chevron-down"></i></a>

                    <div class="dropdown-menu dropdown-menu-right shadow" style=""> 
                        <a class="dropdown-item" href="#" data-toggle-publication-state="1">Publique</a> 
                        <a class="dropdown-item" href="#" data-toggle-publication-state="2">Privée</a> 
                        <a class="dropdown-item" href="#" data-toggle-publication-state="3">Amis</a> 
                    </div>                
                </span>

            </div>
        </div>

        <div class="post_input_container">
            <textarea required class="form-control" placeholder="A quoi penses-tu, {{ auth()->user()->full_name }} ?" id="publication-input" name="content" rows="3"></textarea>
            <input type="hidden" name="publication_state_id" value="1" id="publicationStateId">
            <div class="page-header">
                <div>
                    <label for="media">
                        <i class="fe fe-paperclip" data-toggle="tooltip" title="" data-original-title="Ajouter un média"></i>
                        <input type="file" name="media" id="media" class="sr-only" accept=".jpeg, .jpg, .png, .mp3, .mp4, .pdf, .wav, .gif">
                    </label>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center">
                        <button
                        id="btn-submit-publication"
                        type="submit"
                        class="btn btn-secondary btn-icon-text">
                          <i class="fe fe-send mr-2"></i> Publier
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</section>