<div class="input-group">

    <div class="input-group-btn search-panel">
        {!! Form::select('country_id', $countries, null, ['class' => 'form-control select2-no-search', 'placeholder' =>
        'Choix du pays']) !!}
    </div>

    <div class="input-group-btn search-panel">
        <select class="form-control select2-no-search">
            <option value="0">
                Que recherche-vous ?
            </option>
            <option value="BookCast">
                BookCast
            </option>
            <option value="Castings">
                Castings
            </option>
            <option value="Réseaux">
                Réseaux
            </option>
            <option value="Agenda+">
                Agenda+
            </option>
            <option value="NetConcert">
                NetConcert
            </option>
            <option value="Votes">
                Votes
            </option>
            <option value="Actualités">
                Actualités
            </option>
        </select>
    </div>

    <input type="search" class="form-control" placeholder="Que recherchez-vous ?...">

    <button class="btn search-btn"><i class="fe fe-search"></i></button>
</div>