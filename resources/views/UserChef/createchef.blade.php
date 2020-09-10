@extends('layouts.app')

@section('title', "QueroChef Cadastro")

@section('content')
    <form action="{{route('chef.store')}}" method="post">
        @csrf
        <div class="columns pb-0">
            <div class="column pb-0 pt-0">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input is-info pb-0" name="name" type="text" placeholder="Nome">
                </div>
            </div>

            <div class="column pb-0 pt-0">
                <label  class="label">E-mail</label>
                <div class="control">
                    <input class="input is-info pb-0" name="email" type="text" placeholder="E-mail">
                </div>
            </div>
       
            <div class="column pb-0 pt-0">
                <label  class="label">Senha</label>
                <div class="control">
                    <input class="input is-info pb-0" name="password"type="password" placeholder="Senha">
                </div>
            </div>

            <div class="column pb-1">
                <div class="control">
                    <button type="submit" class="button is-link has-background-danger-dark is-rounded is-fullwidth">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
@endsection