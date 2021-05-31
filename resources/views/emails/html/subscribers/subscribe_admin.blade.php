@extends('layouts.mail', array('title' => 'Subscriber'))

@section('content')

<h1>Bonjour {{ config('app.name', 'Laravel') }}!</h1>

<p>{{ $subscriber->email }} s'est abonné au site le {{ $subscriber->created }}</p>

<ul>
    <li>Nom Complet : {{ $subscriber->full_name }}</li>
    <li>Email : {{ $subscriber->email }}</li>
    <li>Téléphone : {{ $subscriber->phone }}</li>
    <li>Pays : {{ $subscriber->country->name }}</li>
    <li>Civilité : {{ $subscriber->civility->name }}</li>
    <li>Sexe : {{ $subscriber->civility->gender->name }}</li>
    <li>Domaine Artistique : {{ $subscriber->artisticArea->name }}</li>
    <li>Rayon Artistique : {{ $subscriber->artisticArea->artisticRay->name }}</li>
</ul>

@endsection