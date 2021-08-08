<?php namespace App\Controllers;

use App\Models\M_Krs;
use App\Models\M_Prodi;
use App\Models\Master_Dosen_model;
use App\Models\M_Mahasiswa;
use App\Models\M_Laporan;
use App\Models\M_Khs;

class C_Lhs extends BaseController
{

	public function tampillhs()
	{
		
        $db   = \Config\Database::connect();
		$model= new M_Mahasiswa();
		$model1 = new Master_Dosen_model;
		$model2 = new M_Prodi;
        $userid=user_id();

		$data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
		$data['prodi'] = $model2->getProdi()->getresultArray();

        $qryRealationble= $db->table('users')->select('*')->join('tb_mahasiswa','nim=username')->where('id', $userid)->get()->getRow();

         $data['mahasiswa'] = $qryRealationble;
		echo view("mahasiswa/lhs/view_lhs", $data);
	}
}