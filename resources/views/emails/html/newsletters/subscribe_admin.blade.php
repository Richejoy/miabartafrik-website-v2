@extends('layouts.mail', array('title' => 'Newsletter'))

@section('body')

<h1>Bonjour {{ config('app.name', 'Laravel') }}!</h1>

<p>{{ $newsletter->email }} s'est abonné au site le {{ $newsletter->created }}</p>

<ul>
    <li>Email : {{ $newsletter->email }}</li>
</ul>

@endsection