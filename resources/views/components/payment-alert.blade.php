<div class="d-flex">
  <div class="justify-content-center">
    @if($paid == true)
    <a href="{{ route('user.index') }}" class="btn btn-success btn-icon-text">
        <i class="fe fe-money mr-2"></i> Votre adhésion est à jour
    </a>
    @else
    <a href="{{ route('payment.checkout', ['tableName' => $tableName]) }}" class="btn btn-secondary btn-icon-text">
        <i class="fe fe-credit-card mr-2"></i> Payer mon adhésion
    </a>
    @endif
  </div>
</div>