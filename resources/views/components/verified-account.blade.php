@if(auth()->user()->verified)
    <i class="fe fe-check-circle text-success mr-1 text_verified" data-toggle="tooltip" title="" data-original-title="Compte vérifié"></i>
@else
    <i class="fe fe-check-circle text-warning mr-1 text_unverified" data-toggle="tooltip" title="" data-original-title="Vérification du compte en cours..."></i>
@endif