{!! Form::open(['wire:submit.prevent' => 'save']) !!}
<div class="write_post_container"> 

    <div class="media">
            <div class="media-user mr-2">
                <div class="main-img-user avatar-md"><img alt="{{ auth()->user()->library->description }}" class="rounded-circle" src="{{ auth()->user()->library->remote }}"></div>
            </div>
            <div class="media-body">
                <h6 class="mb-0 mg-t-2 ml-2">{{ auth()->user()->full_name }}</h6>
                <span class="post__date">
                  <a href="#">{{ date('d M Y') }}</a>
                </span> 
                <span class="post__date-privacy-separator">&nbsp;·</span> 
                <i class="post__privacy si si-globe" data-toggle="tooltip" title="" data-original-title="Public"></i>
            </div>
            <div class="ml-auto">
                <div class="dropdown"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right shadow" style=""> <a class="dropdown-item" href="#">Modifier la publication </a> <a class="dropdown-item" href="#">Supprimer le message</a> <a class="dropdown-item" href="#">Paramètres personnels</a> </div>
                </div>
            </div>
        </div>

    <div class="post_input_container">
        <textarea required class="form-control" placeholder="A quoi penses-tu, {{ auth()->user()->full_name }} ?" id="content" name="content" wire:model.debounce.500ms="content" rows="3"></textarea>

        <div class="page-header">
            <div> 
                <ul class="icons-list">
                    <li class="icons-list-item icons_recharge"><i class="si si-emotsmile" data-toggle="tooltip" title="" data-original-title="Ajouter emotsmile"></i></li>

                    <li class="icons-list-item icons_recharge"><i class="si si-camera" data-toggle="tooltip" title="" data-original-title="Ajouter une photo"></i></li>

                    <li class="icons-list-item icons_recharge"><i class="si si-social-youtube" data-toggle="tooltip" title="" data-original-title="Ajouter une vidéo"></i></li>

                    <li class="icons-list-item icons_recharge"><i class="si si-music-tone-alt" data-toggle="tooltip" title="" data-original-title="Ajouter un audio"></i></li>


                </ul>   
            </div> 

            <div class="d-flex">
                <div class="justify-content-center"> 
                    <button type="submit" class="btn btn-secondary btn-icon-text">
                      <i class="fe fe-send mr-2"></i> Publier
                    </button>
                </div>
            </div>
        </div>
        
    </div> 
</div>
{!! Form::close() !!}