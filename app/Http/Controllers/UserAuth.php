<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserAuth extends Controller
{
    function userLogin(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user', $data['username']);

        $email = $req->input('username');
        $password = $req->input('password');

        $checkLogin = DB::table('users')->where(['email'=>$email, 'password'=>$password])->get();
        if(count($checkLogin) > 0)
        {
            echo "login success";
            echo session('user');
            return redirect('profile');
        }
        else
        {
            echo "login failed";
        }

    }
}
