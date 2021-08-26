<div class="custom-card">
    <div class="component-item">
        <div class="right_sidebar">

            <form wire:submit.prevent="save()">
               <label for="email" class="required-text mg-b-10 label_mba">
                NewsLetter       
               </label>
               <a href="{{ route('newsletter.index') }}">PLus de champs</a>
               <input class="form-control" placeholder="Entrer votre Email" type="email" id="email" name="email">
               <div class="detail-buttons"> 
                <button class="detail-button">S'ABONNER AU NEWSLETTER</button> 
               </div>  
            </form>

        </div>
    </div>
</div>