@extends('layouts.mail', array('title' => 'Subscription'))

@section('body')

<h1>Bonjour {{ $subscriber->userType->name }}!</h1>

<p>Merci pour votre subscription</p>

<p>Infos</p>
<ol>
    <li>Type de compte : {{ $subscriber->userType->name }}</li>
    <li>Email : {{ $subscriber->email }}</li>
</ol>

<p>Veuillez cliquer <a href="{{ route('page.completed', array('email' => $subscriber->email, 'token' => $subscriber->token)) }}">ici</a> pour continuer votre inscription.</p>

@endsection