@extends('layouts.mail', array('title' => 'Accueil'))

@section('body')

<h1>Bonjour {{ $user->full_name }}!</h1>

@endsection