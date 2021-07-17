@extends('layouts.mail', array('title' => 'Accueil'))

@section('body')

<h1>Bonjour {{ $user }}!</h1>

@endsection