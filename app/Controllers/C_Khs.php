<?php namespace App\Controllers;

use App\Models\M_Krs;
use App\Models\M_Prodi;
use App\Models\Master_Dosen_model;
use App\Models\M_Mahasiswa;
use App\Models\M_Laporan;
use App\Models\M_Khs;

class C_Khs extends BaseController
{
    public function tampilkhs()
	{
		$db   = \Config\Database::connect();

		$model = new M_Mahasiswa();
		$model1 = new Master_Dosen_model;
		$model2 = new M_Prodi;
		$model3 = new M_Krs;
		$model4 = new M_Laporan();

		$userid = user_id();
		$nim = user()->username;
		$semester = $this->request->getPost('semester');

		$data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
		$data['prodi'] = $model2->getProdi()->getresultArray();
		$data['semester'] = $semester;
		$data['krs'] = $model4->lapkrs($semester);

		$qryRealationble = $db->table('users')->select('*')->join('tb_mahasiswa', 'nim=username')->where('id', $userid)->get()->getRow();

		$data['mahasiswa'] = $qryRealationble;

		$getDataAwal = $db->query("SELECT nimkrs, semester, nidnkrs, namadosen,
		kodematkul, namamatkul, totalsks 
		FROM tb_detailkrs 
		JOIN tb_matakuliah ON semester=smt 
		JOIN tb_krs ON kodematkul=kodematkulkrs
		JOIN tb_dosen ON nidnkrs=nidn
		
		WHERE nimkrs='$nim' ORDER By kodematkul ASC");
		$row = $getDataAwal->getResultArray();
		$data['table'] = $row;

		return view("mahasiswa/khs/view_khs", $data);
	}

    public function tampilkhssemester()
    {
        $semester = $this->request->getPost('semesterkhs');
		$db   = \Config\Database::connect();
		$userid = user_id();
		// $model = new M_Khs();
		$model2 = new M_Krs();
		$data['semester'] = $semester;
		$data['krs'] = $model2->alldatakrs("$semester")->getresultArray();
		// $data['khs'] = $model->alldatakhs("$semester","$userid")->getresultArray();
		echo view('mahasiswa/khs/isikhs', $data);
    }


	public function lapkhs($semester)
	{
		$db   = \Config\Database::connect();

		$model= new M_Mahasiswa();
		$model1 = new Master_Dosen_model;
		$model2 = new M_Prodi;
		$model3 = new M_Krs();
		
        $userid=user_id();
		$data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
		$data['prodi'] = $model2->getProdi()->getresultArray();
        $qryRealationble= $db->table('users')->select('*')->join('tb_mahasiswa','nim=username')->where('id', $userid)->get()->getRow();
        $data['mahasiswa'] = $qryRealationble;

        $semester = $this->request->getPost('semesterkhs');
		$data['semester'] = $semester;
		$data['krs'] = $model3->alldatakrs("$semester")->getresultArray();
		echo view('mahasiswa/khs/lap_khs', $data);
	}

}