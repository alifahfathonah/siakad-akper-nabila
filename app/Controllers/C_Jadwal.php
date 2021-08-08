<?php namespace App\Controllers;

use App\Models\M_Jadwal;
use App\Models\Model_Ruangan_A;

class C_Jadwal extends BaseController
{
 	public function tampiljadwal()
	{   
        $model= new M_Jadwal();
		$model1= new Model_Ruangan_A();

        $id = $this->request->getPost('kodejadwal');

		$data['jadwal'] = $model->getJadwal(" $id")->getresultArray();
        $data['ruangan'] = $model1->getRuangan()->getresultArray();

		echo view("admin/jadwal/view_jadwal",$data);
	}

    public function add()
    {
        $db   = \Config\Database::connect();
     
        $model= new M_Jadwal();
		$model1= new Model_Ruangan_A();

        $data['ruangan'] = $model1->getRuangan()->getresultArray();
        $data['jadwal'] = $db->table('tb_jadwal')->get()->getresult();

        return view('admin/jadwal/add_jadwal', $data);
    }



    public function save()
    {
        $db   = \Config\Database::connect();
        $data = [
            'kodejadwal' => $this->request->getPost('kodejadwal'),
            'hari' => $this->request->getPost('hari'),
            'jam' => $this->request->getPost('jam'),
            'idruanganjadwal' => $this->request->getPost('idruangan'),
        ];
        $db->table('tb_jadwal')->insert($data);
        session()->setflashdata('sukses', 'Data Berhasil Disimpan.');
        return redirect()->to(base_url('C_Jadwal/tampiljadwal'));
    }

	public function delete()
    {
        $db   = \Config\Database::connect();
        $id = $this->request->getPost('kodejadwal');
        $db->table('tb_jadwal')->delete(array('kodejadwal' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Di Hapus.');
        return redirect()->to(base_url('C_Jadwal/tampiljadwal'));
    }
}