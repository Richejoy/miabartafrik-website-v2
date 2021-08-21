{!! Form::open(['method' => 'GET']) !!}
    <div class="input-group">
        <div class="input-group-btn search-panel">
            <div class="parsley-select" id="slWrapper">
                {!! Form::select('country_id', $countries, null, ['class' => 'form-control select2', 'placeholder' =>
            'Pays']) !!}
            </div>
        </div>

        <div class="input-group-btn search-panel">
            <div class="parsley-select" id="slWrapper">
                {!! Form::select('menu_id', $menus, null, ['class' => 'form-control select2', 'placeholder' =>
            'Menu']) !!}
            </div>
        </div>

        {!! Form::search('item', null, ['class' => 'form-control rounded-0', 'placeholder' => 'Recherche...']) !!}

        <button type="submit" class="btn search-btn"><i class="fe fe-search"></i></button>
    </div>
{!! Form::close() !!}