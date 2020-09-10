@extends('layouts.app')

@section('title', "QueroChef Login")

@section('content')

    @include('auth.includes.alerts')
    
   <div id="formlogin">
     <form action="{{route('chef.validatelogin')}}" method="post">
        @csrf
        <div id="column" class="columns">

             <div class="column pb-0">
                <label class="label p-0">Nome</label>
                <p class="control has-icons-left has-icons-right">
                    <input class="input is-sucess p-0" name="email" type="text inpu" placeholder="Nome">
                </p>
            </div>
       
            <div class="column pb-0">
                <label class="label p-0">Senha</label>
                <p class="control has-icons-left has-icons-right">
                    <input class="input is-sucess p-0" name="password"type="password" placeholder="Senha">
                </p>
            </div>

            <div class="column">
            <div class="control">
                <button type="submit" class="button is-link has-background-danger-dark is-rounded is-fullwidth">login</button>
            </div>
        </div>
        </div>
     </form>  
        <a href="{{route('chef.create')}}">
           <button class="button is-link has-background-danger-dark is-rounded is-fullwidth mt-1">Fazer Cadastro</button>
        </a>
        
    </div> 
@endsection