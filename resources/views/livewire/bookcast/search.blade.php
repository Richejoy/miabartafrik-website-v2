{!! Form::open(['method' => 'GET']) !!}
    <div class="row input-group">
     
        <div class="col-md-3 p-lg-0">
            <div class="input-wrap"> 
                <div class="icon-wrap">
                    <i class="si si-location-pin" data-toggle="tooltip" title="" data-original-title="si-location-pin" width="24" height="24"></i>
                </div>

                <div class="input-field">
                    <div class="parsley-select">
                        {!! Form::select('country_id', $countries, null, ['class' => 'form-control select2', 'placeholder' =>
            'Pays']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 p-lg-0">
            <div class="input-wrap"> 
                <div class="icon-wrap">
                    <i class="si si-graduation" data-toggle="tooltip" title="" data-original-title="si-location-pin" width="24" height="24"></i>
                </div>

                <div class="input-field">                
                    <div class="parsley-select">
                        {!! Form::select('menu_id', $menus, null, ['class' => 'form-control select2', 'placeholder' =>
            'Menu']) !!}
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-5 p-lg-0">
            <div class="input-wrap"> 
                <div class="icon-wrap">
                    <i class="fe fe-search" data-toggle="tooltip" title="" data-original-title="si-location-pin" width="24" height="24"></i>
                </div>

                {!! Form::search('item', null, ['class' => 'form-control', 'placeholder' => 'Que recherchez-vous ?']) !!}
                
            </div>
        </div>
        <div class="col-md-1 p-lg-0 btn_go">
            {!! Form::submit('Go', ['class' => 'btn-search']) !!}
        </div> 
      
    </div>
{!! Form::close() !!}
