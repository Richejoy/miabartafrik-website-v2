@if($fetch == 'all')
<div class="row">
    @forelse ($castings as $casting)
    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb_1_5">
        <x-bookcast.castings.item :casting="$casting" />
    </div>
    @empty
    <div class="col-md-12">
        <p>Aucune donnée trouvée</p>
    </div>
    @endforelse
</div>
@else
    @if(!is_null($casting))
    <x-bookcast.castings.item :casting="$casting" /> 
    @else
    <p>Aucune donnée trouvée</p>
    @endif
@endif