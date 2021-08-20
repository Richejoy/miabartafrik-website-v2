{!! Form::open(['method' => 'GET']) !!}
    <div class="form-row align-items-center">
        <div class="input-group col-auto">
            {!! Form::select('country_id', $countries, null, ['class' => 'form-control select2-no-search', 'placeholder' =>
            'Pays']) !!}
        </div>

        <div class="input-group col-auto">
            {!! Form::select('menu_id', $menus, null, ['class' => 'form-control select2-no-search', 'placeholder' =>
            'Menu']) !!}
        </div>

        <div class="input-group col-auto">
          {!! Form::search('item', null, ['class' => 'form-control', 'placeholder' => 'Recherche...']) !!}
          <div class="input-group-append">
            <button type="submit" class="btn search-btn"><i class="fe fe-search"></i></button>
          </div>
        </div>
    </div>
{!! Form::close() !!}