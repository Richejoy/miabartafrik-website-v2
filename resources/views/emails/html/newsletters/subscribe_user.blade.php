@extends('layouts.mail', array('title' => 'Newsletter'))

@section('body')

<h1>Bonjour {{ $newsletter->email }}!</h1>

<p>Merci pour votre souscription.</p>

<p>Veuillez cliquer <a
        href="{{ route('newsletter.unsubscribe', array('email' => $newsletter->email, 'token' => $newsletter->token)) }}">ici</a>
    pour vous désinscrire à la newsletter.</p>

<p>Copie : {{ route('newsletter.unsubscribe', array('email' => $newsletter->email, 'token' => $newsletter->token)) }}</p>

@endsection