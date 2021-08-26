@if($fetch == 'all')
<div class="row">
    @forelse ($partners as $partner)
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
        <x-bookcast.networks.item :partner="$partner" />
    </div>
    @empty
    <div class="col-md-12">
        <p>Aucune donnée trouvée</p>
    </div>
    @endforelse
</div>
@else
    @if(!is_null($partner))
    <x-bookcast.networks.item :partner="$partner" /> 
    @else
    <p>Aucune donnée trouvée</p>
    @endif
@endif