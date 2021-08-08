<?php namespace App\Controllers;

class C_Home extends BaseController
{
	public function menuadmin()
	{
		return view('admin/menu');
	}

	public function menumahasiswa()
	{
		return view('mahasiswa/menu');
	}

	public function menudosen()
	{
		return view('dosen/menu');
	}

	

}