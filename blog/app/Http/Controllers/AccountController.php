<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\CommonRequest;
use App\Models\AccountModel;

class AccountController extends Controller
{
    public function login(LoginRequest $request)
    {
        $model = new AccountModel();
        $login = $request -> input('login');
        $password = $request -> input('password');
    }
    
    public function register(RegisterRequest $request)
    {
        $model = new AccountModel();

        $model -> login =       $request -> input('login');
        $model -> password =    $request -> input('password');
        $model -> firstname =   $request -> input('firstname');
        $model -> lastname =    $request -> input('lastname');
        $model -> email =       $request -> input('email');

        $model -> save();

        return redirect() -> route('register');
    }

    public function getAll(CommonRequest $request)
    {
        $accounts = new AccountModel();

        dd($accounts -> all());
    }
}
