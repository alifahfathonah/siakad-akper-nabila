<?php

namespace App\Controllers;

use App\Models\M_Krs;
use App\Models\M_Prodi;
use App\Models\M_Matkul;
use App\Models\Master_Dosen_model;
use App\Models\M_Mahasiswa;
use App\Models\M_Laporan;

class C_Krs extends BaseController
{
	public function tampilkrs()
	{
		$model2 = new M_Prodi();

		$data['prodi'] = $model2->getProdi()->getresultArray();

		echo view("admin/krs/view_krs", $data);
	}


	public function tampilkrsmhs()
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
		kodematkul, namamatkul, totalsks, hari, jam, ruangan
		FROM tb_detailkrs 
		JOIN tb_matakuliah ON semester=smt 
		JOIN tb_krs ON kodematkul=kodematkulkrs
		JOIN tb_dosen ON nidnkrs=nidn
		
		WHERE nimkrs='$nim' ORDER By kodematkul ASC");
		$row = $getDataAwal->getResultArray();
		$data['table'] = $row;

		return view("admin/krs/view_krsmhs", $data);
	}


	public function detail($semester)
	{

		$db   = \Config\Database::connect();

		$model2 = new M_Prodi();
		$model1 = new M_Krs();
		$model3 = new M_Matkul();
		$model4 = new Master_Dosen_model();
	

		
		$data['masterdosen'] = $model4->getMasterdosen()->getresultArray();
		$data['matakuliah'] = $model3->alldatamatkul($semester)->getresultArray();
		$data['prodi'] = $model2->getdetailProdi($semester)->getrow();
		$data['krs'] = $model1->alldatakrs($semester)->getresultArray();
		return view('admin/krs/detail_krs', $data);
	}

	public function save($semester)
	{
		$db   = \Config\Database::connect();
		$data = [
			'kodematkulkrs' => $this->request->getPost('kodematkul'),
			'nidnkrs' => $this->request->getPost('dosen'),
			'hari' => $this->request->getPost('hari'),
			'jam' => $this->request->getPost('jam'),
			'ruangan' => $this->request->getPost('lokal'),
			
		];

		$db->table('tb_krs')->insert($data);
		session()->setflashdata('sukses', 'Data Berhasil Disimpan.');
		return redirect()->to(base_url('C_Krs/detail/' . $semester));
	}

	public function update($semester)
	{
		$db   = \Config\Database::connect();
		$data = [
			'nidnkrs' => $this->request->getPost('dosenedit'),
			'hari' => $this->request->getPost('hariedit'),
			'jam' => $this->request->getPost('jamedit'),
			'ruangan' => $this->request->getPost('lokaledit'),
			
		];

		$id = $this->request->getPost('kodematkuledit');
		$db->table('tb_krs')->update($data, array('kodematkulkrs' => $id));
		session()->setflashdata('sukses', 'Data Berhasil Diupdate.');
		return redirect()->to(base_url('C_Krs/detail/' . $semester));
	}



	public function delete($semester)
	{
		$kodematkulkrs = $this->request->getPost('kodematkulkrs');
		$kodematkulkrs = $this->request->getPost('kodematkulkrs');

		$db   = \Config\Database::connect();
		$db->table('tb_krs')->delete(array(
			'kodematkulkrs' => $kodematkulkrs,
			'kodematkulkrs' => $kodematkulkrs,
			
		));
		session()->setflashdata('sukses', 'Data Berhasil Di Hapus.');
		return redirect()->to(base_url('C_Krs/detail/' . $semester));
	}

	function tampilmatkul()
	{

		$id = $this->request->getPost('kodematkul');
		$db   = \Config\Database::connect();
		$model = new M_Matkul();
		$data = $model->caridatamatkul($id)->getrow();
		return json_encode($data);
	}

	function tampilkrssemester()
	{

		$semester = $this->request->getPost('semesterkrs');
		$db   = \Config\Database::connect();
		$model = new M_Krs();
		$data['semester'] = $semester;
		$data['krs'] = $model->alldatakrs("$semester")->getresultArray();
		echo view('admin/krs/isikrs', $data);
	}

	
	public function updatekrs()
	{
		$db   = \Config\Database::connect();
		// Delete data detail
		$nim = user()->username;
		$model = new M_Krs;
		$model->deleteDetail($nim);
		// Insert data detail

		$data = [
			'semester' => $this->request->getPost('semester'),
			'nimkrs' => $this->request->getPost('nim')
		];

		$db->table('tb_detailkrs')->insert($data);
		return redirect()->to(base_url('C_Krs/tampilkrsmhs/'));
	}

	public function edit($semester)
	{
		
		$db   = \Config\Database::connect();

		$model2 = new M_Prodi();
		$model1 = new M_Krs();
		$model3 = new M_Matkul();
		$model4 = new Master_Dosen_model();
	

		
		$data['masterdosen'] = $model4->getMasterdosen()->getresultArray();
		$data['matakuliah'] = $model3->caridatamatkul($semester)->getresultArray();
		$data['prodi'] = $model2->getdetailProdi($semester)->getrow();
		$data['krs'] = $model1->alldatakrs($semester)->getresultArray();
		
        return view('admin/krs/edit_krs', $data);
	}

	public function updatedata($semester)
    {
        $db   = \Config\Database::connect();
        $data = [
			'kodematkulkrs' => $this->request->getPost('kodematkul'),
			'nidnkrs' => $this->request->getPost('dosen'),
			'hari' => $this->request->getPost('hari'),
			'jam' => $this->request->getPost('jam'),
			'ruangan' => $this->request->getPost('lokal'),
        ];
        $id = $this->request->getPost('kodematkulkrs');
        $db->table('tb_krs')->update($data, array('kodematkulkrs' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Diupdate.');
		return redirect()->to(base_url('C_Krs/detail/' . $semester));
    }
	
	
}
