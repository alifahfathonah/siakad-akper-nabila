<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}

	public function forgotpassword()
	{
		return view('auth/forgotpassword');
	}

	public function register()
	{
		return view('auth/register');
	}
	

}
