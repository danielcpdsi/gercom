<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Session;


class HomeController extends Controller
{

	public function getHome(){

		if(!Auth::check())
		{
			Session::flash('error','Você precisa estar logado para utilizar a aplicação');
			return redirect()->action('HomeController@getLogin');
		}
	}
	public function getLogin()
	{

		return view('auth.login');

	}
	public function postLogin(Request $request)
	{
        
        if(Auth::attempt(['user' => $request->user, 'password' => $request->pass]))
        {

            return view('home.home');

        }else
        {
        	Session::flash('error','Usuário ou senha incorretos');
        	return view('auth.login');
            
        }

	}
	public function getLogout()
	{

		Auth::logout();
		if(!Auth::check()){
		return redirect()->action('HomeController@getLogin');
		}
		

	}
}
