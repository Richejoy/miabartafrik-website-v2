@extends('layouts.bonaddress', ['title' => "Accueil"])

@section('body')

<div class="flex-w flex-str size1 overlay1">
        <div class="flex-w flex-col-sb wsize1 bg0 p-l-65 p-t-37 p-b-50 p-r-80 respon1">
            <div class="wrappic1">
                <a href="#">
                    <img src="{{ asset('public/images/icons/logo.png') }}" alt="IMG">
                </a>
            </div>      
    
            <div class="w-full flex-c-m p-t-80 p-b-9">
                <div class="wsize2">
                    <p class="m2-txt1">
                        BonAddress
                    </p>
                    <h3 class="l1-txt1 p-b-34 respon3">
                        Bientôt disponible 
                    </h3>
                    <p class="m2-txt1">
                        Bénéficiez des avantages lors de vos voyages ou sorties auprès de nos partenaires locaux.
                    </p>
                </div>
            </div> 
        </div>
            
        <div class="wsize1 simpleslide100-parent respon2">
            <div class="simpleslide100"> 
                <div class="simpleslide100-item bg-img1" style="background-image: url({{ asset('public/images/bg02.jpg') }});"></div> 
            </div>
        </div>
</div>

@endsection