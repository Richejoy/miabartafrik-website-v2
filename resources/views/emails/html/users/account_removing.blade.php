@extends('layouts.mail', array('title' => 'User'))

@section('body')

<h1>Bonjour {{ $user->full_name }}!</h1>

<p>Vous avez demander la suppression de votre compte ?</p>

<p>Veuillez cliquer <a href="{{ route('page.removed_account', array('email' => $user->email, 'token' => $user->token)) }}">ici</a> pour confirmer l'action.</p>

<p>Copie : {{ route('page.removed_account', array('email' => $user->email, 'token' => $user->token)) }}</p>

@endsection