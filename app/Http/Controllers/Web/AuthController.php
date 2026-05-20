<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function showRegister2()
    {
        return view('register2');
    }

    public function showRestorePass()
    {
        return view('restore_pass');
    }

    public function showCode()
    {
        return view('code');
    }

    public function showNewPass()
    {
        return view('new_pass');
    }

}
