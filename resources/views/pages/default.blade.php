@extends('layouts.page', ['title' => 'Plateforme Artistique'])

@section('body')

  <main class="[ miabartafrik ] [ flow ]">
  <h2>
   <span class="heading--pink">
      Nous
   </span>
   arrivons bientôt
  </h2> 

  <ul class="miabart_tags_domaines">
    <li><a href="#">Acteur(trice) <span>Cinéma</span></a></li>
    <li><a href="#">Comédien(ne) <span>Cinéma</span></a></li>
    <li><a href="#">Figurant(e) <span>Cinéma</span></a></li>
    <li><a href="#">Mannequin <span>Cinéma</span></a></li>

    <li><a href="#">Modèle <span>Cinéma</span></a></li>
    <li><a href="#">Photographe <span>Cinéma</span></a></li>
    <li><a href="#">Réalisateur <span>Cinéma</span></a></li>
    <li><a href="#">Scénariste <span>Cinéma</span></a></li>
    <li><a href="#">Silhouette <span>Cinéma</span></a></li>
    <li><a href="#">Metteur en scène <span>Cinéma</span></a></li> 
  </ul>

  <ul class="miabart_tags_domaines greentags">
    <li><a href="#">Coiffeur(se) <span>Mode</span></a></li>
    <li><a href="#">Figurant(e) <span>Mode</span></a></li>
    <li><a href="#">Hôte(esse) <span>Mode</span></a></li>
    <li><a href="#">Mannequin <span>Mode</span></a></li>
    <li><a href="#">Maquilleur(euse) <span>Mode</span></a></li>
    <li><a href="#">Modèle <span>Mode</span></a></li>
    <li><a href="#">Photographe <span>Mode</span></a></li> 
    <li><a href="#">Styliste <span>Mode</span></a></li> 
  </ul>

  <ul class="miabart_tags_domaines bluetags">
    <li><a href="#">Danseur(se) <span>Book</span></a></li>
    <li><a href="#">Chorégraphe <span>Book</span></a></li>
    <li><a href="#">DJ Studio <span>Book</span></a></li> 
  </ul>

  <p>
    Nous construisons actuellement une plateforme de Castings et de Book pour vous . 
    Ajoutez votre e-mail ci-dessous pour rester au courant des annonces et de nos offres de lancement. 
  </p>

  {!! Form::open(['route' => 'subscriber.store']) !!}
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
          <div class="form_steps_option-row animated bounceInDown">
              {!! Form::label('country_id', 'Pays *') !!}
              {!! Form::select('country_id', $countries, null, ['class' => 'select_on_bookcast', 'required' => true]) !!}
          </div> 
           
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
          <div class="form_steps_option-row animated bounceInDown">
              {!! Form::label('artistic_area_id', 'Domaines artistiques *') !!}
              <select class="select_on_bookcast" name="artistic_area_id" id="artistic_area_id">

                  @if($artisticRays->count())
                  @foreach($artisticRays as $artisticRay)
                  <optgroup label="{{ $artisticRay->name }}">
                    @if($artisticRay->artisticAreas->count())
                    @foreach($artisticRay->artisticAreas as $artisticArea)
                    <option value="{{ $artisticArea->id }}">{{ $artisticArea->name }}</option>
                    @endforeach
                    @endif
                  </optgroup>
                  @endforeach
                  @endif

                </select>
          </div>
           
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
           <div class="form_steps_option-holder animated bounceInDown">
              <label for="email">
              Email *
              </label>
              <input type="email" name="email" id="email" class="form_steps_option-control" required placeholder="Email *">
            </div>
           
        </div> 
      </div>

      <div class="row"> 
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
          <div class="form_steps_option-row animated bounceInDown">
              {!! Form::label('civility_id', 'Civilité *') !!}
              {!! Form::select('civility_id', $civilities, null, ['class' => 'select_on_bookcast', 'required' => true]) !!}
          </div>          
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
           <div class="form_steps_option-holder animated bounceInDown">
              <label for="full_name">
              Nom complet *
              </label>
              <input type="text" name="full_name" id="full_name" class="form_steps_option-control" required placeholder="Nom complet *">
            </div>           
        </div> 

        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
           <div class="form_steps_option-holder animated bounceInDown">
              <label for="phone">
             Téléphone *
              </label>
              <input type="tel" name="phone" id="phone" class="form_steps_option-control" required placeholder="Téléphone *">
            </div>           
        </div>

      </div>

       <div class="row">  
 
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-12">
            <div class="boutonBookviews"> 
              <div class="btn_artiste_bookcast">
                <button type="submit">Souscrire maintenant <i class="fa fa-arrow-up"></i></button>
              </div>
             </div>
        </div>
      </div>
  {!! Form::close() !!}
</main>

@endsection