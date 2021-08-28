<div class="custom-card">
    <div class="component-item">
        <div class="right_sidebar">

            <form wire:submit.prevent="save()">
                <div class="sidebar_titre">
                    <h4>NewsLetter </h4>
                    <a href="{{ route('newsletter.index') }}">Paramètre</a>
                </div>   

                <div class="input-group">
                    <input class="form-control" placeholder="Entrer votre Email" type="email" id="email" name="email">
                                                         
                    <button class="btn search-btn" type="submit">
                        <i class="fe fe-send" data-toggle="S'abonner au newsletter" title="" data-original-title="Envoyer" style="font-size: 1.3rem;color: #2c539b;"></i>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>