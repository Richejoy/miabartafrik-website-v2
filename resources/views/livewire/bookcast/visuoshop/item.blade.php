@if($fetch == 'all')
<div class="row" id="graybg">
    @forelse ($photographers as $photographer)
    <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
        <x-bookcast.visuoshop.item :photographer="$photographer" />
    </div>
    @empty
    <div class="col-md-12">
        <p>Aucune donnée trouvée</p>
    </div>
    @endforelse
</div>
@else
    @if(!is_null($photographer))
    <x-bookcast.visuoshop.item :photographer="$photographer" /> 
    @else
    <p>Aucune donnée trouvée</p>
    @endif
@endif