@extends('layouts.mail', array('title' => 'User'))

@section('content')

<h1>Bonjour {{ $user }}!</h1>

<p>
    Votre compte à été supprimé.
</p>

@endsection