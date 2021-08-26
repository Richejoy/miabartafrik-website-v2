@if($fetch == 'all')
<div class="row">
    @forelse ($news as $item)
    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
        <x-bookcast.news.item :item="$item" />
    </div>
    @empty
    <div class="col-md-12">
        <p>Aucune donnée trouvée</p>
    </div>
    @endforelse
</div>
@else
    @if(!is_null($item))
    <x-bookcast.news.item :item="$item" />
    @else
    <p>Aucune donnée trouvée</p>
    @endif
@endif