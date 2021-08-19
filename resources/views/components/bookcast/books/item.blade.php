<div class="row" id="graybg">
    @forelse ($artists as $artist)
    <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
        @livewire('bookcast.books.item', ['artist' => $artist])
    </div>
    @empty
    <div class="col-md-12">
        <p>Vide</p>
    </div>
    @endforelse
</div>