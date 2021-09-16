<div class="custom-card">
    <div class="component-item">
        <div class="right_sidebar">

            {!! Form::open(['route' => 'newsletter.store', 'wire:submit.prevent' => 'save']) !!}
                <div class="sidebar_titre">
                    <h4>NewsLetter</h4>
                    <a href="{{ route('newsletter.index') }}">Plus de champs</a>
                </div>   

                <div class="input-group">
                    <input required class="form-control" placeholder="Entrer votre Email" type="email" id="email" name="email" wire:model.defer="email">
                                                         
                    <button class="btn search-btn" type="submit">
                        <i class="fe fe-send" data-toggle="S'abonner au newsletter" title="" data-original-title="Envoyer" style="font-size: 1.3rem;color: #2c539b;"></i>
                    </button>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>