@extends('layouts.app')

@section('title', " Bem vindo QueroChef")

@section('content')
            <div class="columns pt-6">
            <a href="{{route('client.login')}}">
                <button class="button is-link is-rounded has-background-danger-dark">QUERO CHEF</button>
            </a>
            <a  href="{{route('chef.login')}}">
                <button class="button is-link is-rounded has-background-danger-dark">SOU CHEF</button>
            </a>
            </div>
@endsection


