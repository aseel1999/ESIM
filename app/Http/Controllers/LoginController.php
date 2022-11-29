<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    //protected $redirectTo = RouteServiceProvider::HOME;
    public function showLoginForm()
    {
        return view('get');
    }
    
}
