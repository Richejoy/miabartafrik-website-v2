@extends('layouts.mail', array('title' => 'User'))

@section('content')

<h1>Bonjour {{ $user }}!</h1>

<p>
    La double authentification (2FA) à été activée/désactivée pour votre compte.
</p>

@endsection