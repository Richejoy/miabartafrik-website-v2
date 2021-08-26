@if($fetch == 'all')
<div class="row" id="graybg">
    @forelse ($artists as $artist)
    <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
        <x-bookcast.books.item :artist="$artist" />
    </div>
    @empty
    <div class="col-md-12">
        <p>Aucune donnée trouvée</p>
    </div>
    @endforelse
</div>
@else
    @if(!is_null($artist))
    <x-bookcast.books.item :artist="$artist" /> 
    @else
    <p>Aucune donnée trouvée</p>
    @endif
@endif