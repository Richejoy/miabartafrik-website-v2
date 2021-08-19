@extends('layouts.mail', array('title' => 'User'))

@section('body')

<h1>Bonjour {{ $user }}!</h1>

<p>Vous avez demander la réinitialisation de votre mot de passe ?</p>

<p>Veuillez cliquer <a href="{{ route('page.password_reset', array('email' => $user->email, 'token' => $user->token)) }}">ici</a> pour réinitialiser votre mot de passe.</p>

<p>Copie : {{ route('page.password_reset', array('email' => $user->email, 'token' => $user->token)) }}</p>

@endsection