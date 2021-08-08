<?php namespace App\Controllers;

use App\Models\M_Matkul;
use App\Models\M_Prodi;

class C_Matkul extends BaseController
{
	public function tampilprodi()
	{
		$model1= new M_Matkul();
		$model2= new M_Prodi();
		
		$data['prodi'] = $model2->getProdi()->getresultArray();

		echo view("admin/matkul/view_matkul",$data);
	}

	public function detail($semester)
	{
		$db   = \Config\Database::connect();
		$model2= new M_Prodi();
		$model1= new M_Matkul();
		$data['prodi'] = $model2->getdetailProdi($semester)->getrow();
		$data['matakuliah'] = $model1->alldatamatkul($semester)->getresultArray();
		return view('admin/matkul/detail_matkul', $data);
	}

	public function save($semester)
    {
        $db   = \Config\Database::connect();
        $data = [
            'kodematkul' => $this->request->getPost('kodematkul'),
            'namamatkul' => $this->request->getPost('namamatkul'),
			'smt' => $this->request->getPost('smt'),
            'sksteori' => $this->request->getPost('sksteori'),
            'skspraktek' => $this->request->getPost('skspraktek'),
            'skslapangan' => $this->request->getPost('skslapangan'),
            'totalsks' => $this->request->getPost('totalsks'),
        ];
        $db->table('tb_matakuliah')->insert($data);
        session()->setflashdata('sukses', 'Data Berhasil Disimpan.');
        return redirect()->to(base_url('C_Matkul/detail/' . $semester));
    }

	public function delete($semester, $kodematkul)
    {
        $db   = \Config\Database::connect();
        $db->table('tb_matakuliah')->delete(array('kodematkul' => $kodematkul));
        session()->setflashdata('sukses', 'Data Berhasil Di Hapus.');
		return redirect()->to(base_url('C_Matkul/detail/' . $semester));
    }


}