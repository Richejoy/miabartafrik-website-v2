@extends('layouts.mail', array('title' => 'User'))

@section('content')

<p>Veuillez cliquer <a
        href="{{ route('page.register_artistic_network', array('email' => $user->email, 'token' => $user->token)) }}">ici</a>
    pour poursuivre votre inscription.</p>

@endsection