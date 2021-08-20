
<div id="global-loader" class="miabartafrik_preloader_page">
    <img class="miabartafrik_preloader_logo" src="{{ checkLoader() ? auth()->user()->image->link : asset('public/assets/img/preloader.jpg') }}">
    <div class="miabartafrik_preloader_previewArea">
        <div class="miabartafrik_preloader_ballPulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>