@extends('layouts.mail', array('title' => 'Subscriber'))

@section('content')

<h1>Bonjour {{ $subscriber->email }}!</h1>

<p>Merci pour votre désabonnement.</p>

@endsection