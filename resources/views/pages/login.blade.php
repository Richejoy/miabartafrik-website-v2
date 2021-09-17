@extends('layouts.auth', ['title' => "Connexion"])

@section('body')

@if(session()->has('lockUser'))

<x-auth.lock />

@else

<x-auth.login />

@endif

@endsection