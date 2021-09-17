@extends('layouts.auth', ['title' => "Ecran vérroullé"])

@section('body')

@if(session()->has('lockUser'))

<x-auth.lock />

@else

<x-auth.login />

@endif

@endsection