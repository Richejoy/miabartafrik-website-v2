<section>
    {!! Form::model($user) !!}
												<div class="row row-sm text-left mb-2">
													 
													<div class="col-lg-12 mg-t-20 mg-lg-t-0">
				
				{{ Form::label('user_type_id', "Quel compte crée ?", ['class' => 'required-text mg-b-10 label_mba']) }}

														<div class="parsley-select" id="slWrapper">

				{{ Form::select('user_type_id', $userTypes, null, ['class' => 'form-control select2', 'placeholder' => "Quel compte crée ?", 'required' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Quel compte crée ?"]) }}

														<div id="slErrorContainer"></div>
													</div>
													</div><!-- col-12 -->
												</div>

												<div class="row row-sm text-left mb-2">
													<div class="col-lg-6 mg-t-20 mg-lg-t-0">
				{{ Form::label('civility_id', "Civilité", ['class' => 'required-text mg-b-10 label_mba']) }}
														<div class="parsley-select" id="slWrapper">
				{{ Form::select('civility_id', $civilities, null, ['class' => 'form-control select2', 'placeholder' => "Civilité", 'required' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Civilité"]) }}
														<div id="slErrorContainer"></div>
													</div>
													</div><!-- col-6 --> 
													<div class="col-lg-6 mg-t-20 mg-lg-t-0">
				{{ Form::label('country_id', "Votre pays d'origine", ['class' => 'required-text mg-b-10 label_mba']) }}
														<div class="parsley-select" id="slWrapper">
				{{ Form::select('country_id', $countries, null, ['class' => 'form-control select2', 'placeholder' => "Pays d'origine", 'required' => true, 'data-parsley-class-handler' => '#slWrapper', 'data-parsley-errors-container' => '#slErrorContainer', 'data-placeholder' => "Pays d'origine"]) }}
														<div id="slErrorContainer"></div>
													</div>
													</div><!-- col-6 -->
												</div>

												<div class="row row-sm text-left mb-2">
													<div class="col-lg-6 mg-t-20 mg-lg-t-0">
			{{ Form::label('last_name', 'Votre nom', ['class' => 'required-text mg-b-10 label_mba']) }}
			{{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Votre nom', 'required' => true]) }}
													</div><!-- col-6 -->
													<div class="col-lg-6 mg-t-20 mg-lg-t-0">
			{{ Form::label('first_name', 'Votre prénoms', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Votre prénoms', 'required' => true]) }}
													</div><!-- col-6 -->
												</div>

												<div class="row row-sm text-left mb-2">
													<div class="col-lg-6 mg-t-20 mg-lg-t-0">
			{{ Form::label('email', 'Votre email', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email', 'required' => true]) }}
													</div><!-- col-6 -->
													<div class="col-lg-6 mg-t-20 mg-lg-t-0">
			{{ Form::label('phone', 'Votre téléphone', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Votre téléphone', 'required' => true]) }}
													</div><!-- col-6 --> 
												</div>

												<div class="row row-sm text-left mb-2">
													<div class="col-lg-6 mg-t-20 mg-lg-t-0">
			{{ Form::label('city', 'Ville', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Ville', 'required' => true]) }}
													</div><!-- col-6 --> 
													<div class="col-lg-6 mg-t-20 mg-lg-t-0">
			{{ Form::label('address', 'Adresse', ['class' => 'required-text mg-b-10 label_mba']) }}
            {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Adresse', 'required' => true]) }}
													</div><!-- col-6 -->
												</div>
												 
												<button class="btnSignin ripple btn-main-primary btn-block mt-3 mb-3">
												  Enregistrer mes modifications
											    </button>

											{!! Form::close() !!}                        
</section>