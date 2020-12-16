<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;

class AccountController extends Controller
{
    public function execute(Request $data)
    {
        $input_login = $data -> input('login');
        $input_password = $data -> input('password');
        $select_stmnt = "SELECT password = $input_password AND login = $input_login FROM blog.accounts WHERE login = $input_login AND password = $input_password";
        
        /*
        Accounts::transaction(function () {
            Accounts::table('accounts')->select(['login' => $input_login, 'password' => $input_password]);
        });
        Accounts::beginTransaction();
        */
        
        $response = Accounts
            ::where('login', $input_login)
            ->where('password', $input_password)
            ->get();
            
        echo $input_login == $response->login and $input_login == $response->password;
    }
}
