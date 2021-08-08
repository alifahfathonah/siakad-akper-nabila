<?php namespace App\Controllers;

class C_Data_Kampus extends BaseController
{
	public function datakampusadmin()
	{
		return view('admin/datakampus');
	}

	public function datakampusdosen()
	{
		return view('dosen/datakampus');
	}

	public function datakampusmahasiswa()
	{
		return view('mahasiswa/datakampus');
	}


}