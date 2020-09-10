@extends('layouts.app')

@section('title', "QueroChef Pagina: {$resultadouser->email}")

@section('content')
    <h1>Página do cliente</h1>
    <p>
        {{$resultadouser->email}}
    </p>
    <h2>
        <a class="btn-highlight" href="{{ route('client.logout') }}">Sair</a>
    </h2>
@endsection