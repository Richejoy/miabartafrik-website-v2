@if($fetch == 'all')
<div class="row">
    @forelse ($movies as $movie)
    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
        <x-bookcast.movies.item :movie="$movie" />
    </div>
    @empty
    <div class="col-md-12">
        <p>Aucune donnée trouvée</p>
    </div>
    @endforelse
</div>
@else
    @if(!is_null($movie))
    <x-bookcast.movies.item :movie="$movie" /> 
    @else
    <p>Aucune donnée trouvée</p>
    @endif
@endif