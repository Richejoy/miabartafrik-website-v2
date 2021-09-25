@extends('layouts.mail', array('title' => 'Inscription'))

@section('body')

<h1>Bonjour {{ $user->full_name }}!</h1>

<p>Merci pour votre inscription</p>

<p>Infos</p>
<ol>
    <li>Email : {{ $user->email }}</li>
    <li>Téléphone : {{ $user->phone }}</li>
    <li>Nom d'utilisateur : {{ $user->username }}</li>
    <li>Mot de passe : {{ $params['password'] }}</li>
</ol>

<p>Veuillez cliquer <a href="{{ route('page.activated', array('email' => $user->email, 'token' => $user->token)) }}">ici</a> pour activer votre compte.</p>

<p>Copie : {{ route('page.activated', array('email' => $user->email, 'token' => $user->token)) }}</p>

@endsection