@extends('layouts.mail', array('title' => 'User'))

@section('body')

<p>Veuillez cliquer <a
        href="{{ route('page.register_artist', array('email' => $user->email, 'token' => $user->token)) }}">ici</a>
    pour poursuivre votre inscription.</p>

@endsection