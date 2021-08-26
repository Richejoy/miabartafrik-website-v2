<section style="margin-bottom: 0.8rem;">
    <div class="rt-container">
        <div class="col-rt-12">

            <article class="textIntroBonAdress">
                <h1>Partenaires</h1>
                <p>Sponsors</p>
            </article>
            <section class="customer-logos slider">
                    @forelse($sponsors as $sponsor)

                    <div class="slide">
                        <a href="{{ $sponsor->website }}" target="_blank">
                            <img src="{{ $sponsor->library->remote }}" alt="{{ $sponsor->library->description }}" height="150">
                        </a>
                    </div>

                    @empty

                    @endforelse
            </section>

        </div>
    </div>
</section>