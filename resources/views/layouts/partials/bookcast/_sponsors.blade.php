<section id="partenairesMba" class="partenairesMba section-bg">
  <div class="container">

    <h5 class="text-center">Nos partenaires</h5>
    <a href="{{ route('page.partners') }}" class="text-center">Liste des partenaires</a>

    <div class="row">
        @foreach($sponsors as $sponsor)
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="{{ $sponsor->website }}" target="_blank">
                <img src="{{ $sponsor->library->remote }}" alt="{{ $sponsor->library->description }}" class="img-fluid">
            </a>
          </div>
        @endforeach
    </div>

  </div>
</section>