<?php

namespace App\Http\Controllers;

use App\ChefRegister;
use App\Http\Requests\StoreUpdateClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChefRegisterController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->middleware('auth:chef')->only('show');
    }
    //requista o cliente criado
    public function create()
    {
        return view('UserChef.createchef');
    }

    // função para registrar usuário
    //validation
    public function store(StoreUpdateClientRequest $request)
    {
        $datachef = $request->only('name', 'email', 'password');

        $datachef = ChefRegister::create([
            'name' => $datachef['name'],
            'email' => $datachef['email'],
            'password' => bcrypt($datachef['password']),
        ]);

        return redirect()->route('chef.show', ['email' => $datachef['email']]);
    }
    //login do chef
    public function login()
    {
        return view('auth.loginchef');
    }
    //validar dados do login
    public function validatelogin(StoreUpdateClientRequest $request)
    {
        $dados = $request->validated();

        if (Auth::guard('chef')->attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
            return redirect()->route('chef.show', ['email' => $dados['email']]);
        } else {
            return redirect()->back();
        }
    }
    //função para mostrar a pagina do usuário
    public function show($email)
    {
        $resultadochef = DB::table('chef_registers')
            ->where('email', $email)
            ->first();

        return view('UserChef.homechef', ['resultadochef' => $resultadochef]);
    }
    //logout function
    public function logout()
    {
        Auth::logout();
        return redirect()->route('chef.login');
    }
}
