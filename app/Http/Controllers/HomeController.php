<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Session;


class HomeController extends Controller
{
	public function __contruct(){

		$this->middleware('auth');
	}
	
	public function getHome(){

		
		if(!Auth::check())
		{
		 	Session::flash('error','Você precisa estar logado para utilizar a aplicação');
		 	return redirect()->action('HomeController@getLogin');

		}else{

			return view('/home/home');
		}

	}
	public function getLogin()
	{

		return view('auth.login');

	}
	public function postLogin(Request $request)
	{
        
        if(Auth::attempt(['user' => $request->user, 'password' => $request->pass],false))
        {
            return redirect()->intended('home');

        }else
        {
        	Session::flash('error','Usuário ou senha incorretos');
        	return redirect()->action('HomeController@getLogin');
            
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
