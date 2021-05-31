@extends('layouts.mail', array('title' => 'Subscriber'))

@section('content')

<h1>Bonjour {{ $subscriber->email }}!</h1>

<p>Merci pour votre souscription.</p>

<p>Veuillez cliquer <a
        href="{{ route('subscriber.unsubscribe', array('email' => $subscriber->email, 'token' => $subscriber->token)) }}">ici</a>
    pour vous désinscrire à la newsletter.</p>

@endsection