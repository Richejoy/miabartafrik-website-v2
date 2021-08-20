<section style="margin-bottom: 0.8rem;">
    <div class="rt-container">
        <div class="col-rt-12">

            <article class="textIntroBonAdress">
                <h1>Partenaires</h1>
                <p>Sponsors</p>
            </article>
            <section class="customer-logos slider">
                
                @forelse($sponsors as $sponsor)

                <div class="slide"><img src="{{ $sponsor->image->link }}"></div>

                @empty

                @endforelse

            </section>

        </div>
    </div>
</section>