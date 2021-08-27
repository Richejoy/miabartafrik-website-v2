@if($fetch == 'all')
<div class="card custom-card">
    <div class="card-body h-100">
        <div id="owl-demo2" class="owl-carousel owl-carousel-icons2">

            @forelse ($movies as $movie)
            <x-bookcast.movies.item :movie="$movie" />
            @empty
            <div>
                Aucune donnée trouvée
            </div>
            @endforelse

        </div>
    </div>
</div>
@else
@if(!is_null($movie))
<x-bookcast.movies.item :movie="$movie" />
@else
<p>Aucune donnée trouvée</p>
@endif
@endif