<?php namespace App\Controllers;

use App\Models\M_Prodi;

class C_Prodi extends BaseController
{
	public function tampilprodi()
	{
		$model= new M_Prodi();
		$uri = new \CodeIgniter\HTTP\URI();
		$data['prodi'] = $model->getProdi()->getresultArray();
		echo view("admin/matkul/view_matkul",$data);
	}

}