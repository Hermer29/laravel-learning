<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\(Login,Register);

class AccountController extends Controller
{
    public function login(Login $request)
    {
        dd($request);
    }
    
    public function register(Register $request)
    {
        dd($request);
    }
}
