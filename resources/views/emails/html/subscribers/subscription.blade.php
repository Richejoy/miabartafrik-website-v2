@extends('layouts.mail', array('title' => 'Subscription'))

@section('body')

<h1>Bonjour {{ $subscriber->userType->name }}!</h1>

<p>Merci pour votre pré-inscription!</p>

<p>Voici vos informations de pré-inscription</p>
<ol>
    <li>Type de compte : {{ $subscriber->userType->name }}</li>
    <li>Email : {{ $subscriber->email }}</li>
</ol>

<p>Veuillez cliquer <a href="{{ route('page.completed', array('email' => $subscriber->email, 'token' => $subscriber->token)) }}">ici</a> pour continuer votre inscription.</p>

<p>URL d'inscription : {{ route('page.completed', array('email' => $subscriber->email, 'token' => $subscriber->token)) }}</p>

@endsection