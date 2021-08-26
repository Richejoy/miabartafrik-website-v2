@if($fetch == 'all')
<div class="row">
    @forelse ($events as $event)
    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
        <x-bookcast.notebook.item :event="$event" />
    </div>
    @empty
    <div class="col-md-12">
        <p>Aucune donnée trouvée</p>
    </div>
    @endforelse
</div>
@else
    @if(!is_null($event))
    <x-bookcast.notebook.item :event="$event" /> 
    @else
    <p>Aucune donnée trouvée</p>
    @endif
@endif