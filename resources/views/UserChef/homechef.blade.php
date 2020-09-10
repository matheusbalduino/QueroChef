@extends('layouts.app')

@section('title', "QueroChef Pagina: {$resultadochef->email}")

@section('content')
    <h1>Página do Chef </h1>
    <p> 
        {{$resultadochef->email}}
    </p>   
    <h2>
        <a class="btn-highlight" href="{{ route('chef.logout') }}">Sair</a>
    </h2>
@endsection
