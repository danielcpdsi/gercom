<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Session;


class HomeController extends Controller
{

	public function getLogin()
	{

		return('auth.login');

	}
	public function postLogin(Request $request)
	{
        
        if(Auth::attempt(['user' => $request->user, 'password' => $request->pass]))
        {

            echo "sucesso";

        }else
        {
        	Session::flash('error','Usuário ou senha incorretos');
        	return view('auth.login');
            
        }

	}
	public function getLogout()
	{

		if(Auth::logout())
		{
			return view('auth.login');
		}else{

			return "errro";
		}

	}
}
