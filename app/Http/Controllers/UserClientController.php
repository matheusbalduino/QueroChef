<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateClientRequest;
use App\UserClient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserClientController extends Controller
{
    protected $request;


    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->middleware('auth')->only('show');
    }
    //requista o cliente criado
    public function create()
    {
        return view('UserClient.create');
    }
    // função para registrar usuário
    //validation
    public function store(StoreUpdateClientRequest $request)
    {
        $dataclient = $request->only('name', 'email', 'password');

        UserClient::create([
            'name' => $dataclient['name'],
            'email' => $dataclient['email'],
            'password' => bcrypt($dataclient['password']),
        ]);

        return redirect()->route('client.show');
    }
    //Login function for users
    public function login()
    {
        return view('auth.loginuser');
    }
    //validate login to user
    public function validatelogin(StoreUpdateClientRequest $request)
    {
        $data = $request->validated();

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return redirect()->route('client.show', ['email' => $data['email']]);
        }

        return redirect()->back();
    }
    //function to open and show user
    public function show($email)
    {
        $resultadouser = DB::table('user_clients')
            ->where('email', $email)
            ->first();

        return view('UserClient.homeuser', ['resultadouser' => $resultadouser]);
    }
    //function to logout user
    public function logout()
    {
        Auth::logout();
        return redirect()->route('client.login');
    }
}
