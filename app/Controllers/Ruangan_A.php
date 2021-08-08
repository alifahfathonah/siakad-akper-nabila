<?php namespace App\Controllers;

use App\Models\Model_Ruangan_A;

class Ruangan_A extends BaseController
{
 	public function index()
	{
		$model= new Model_Ruangan_A();
		$uri = new \CodeIgniter\HTTP\URI();
		$data['ruangan'] = $model->getRuangan()->getresultArray();
		echo view("admin/ruangan/view_ruangan",$data);
	}

    public function add()
    {
        $db   = \Config\Database::connect();
        $data['ruangan'] = $db->table('tb_ruangan')->get()->getresult();
        return view('admin/ruangan/add_ruangan', $data);
    }

	public function save()
    {
        $db   = \Config\Database::connect();
        $data = [
            'idruangan' => $this->request->getPost('idruangan'),
            'kapasitas' => $this->request->getPost('kapasitas'),
            'jenisruangan' => $this->request->getPost('jenisruangan'),
        ];
        $db->table('tb_ruangan')->insert($data);
        session()->setflashdata('sukses', 'Data Berhasil Disimpan.');
        return redirect()->to(base_url('Ruangan_A/index'));
    }

	public function delete()
    {
        $db   = \Config\Database::connect();
        $id = $this->request->getPost('idruangan');
        $db->table('tb_ruangan')->delete(array('idruangan' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Di Hapus.');
        return redirect()->to(base_url('Ruangan_A/index'));
    }


	public function edit($id)
    {
        $db   = \Config\Database::connect();
        $model= new Model_Ruangan_A();
        $data['ruangan'] = $model->getRuangan($id)->getrow();
        return view('admin/ruangan/edit_ruangan', $data);
    }

    public function update()
    {
        $db   = \Config\Database::connect();
        $data = [
            'idruangan' => $this->request->getPost('idruangan'),
            'kapasitas' => $this->request->getPost('kapasitas'),
            'jenisruangan' => $this->request->getPost('jenisruangan'),
        ];
        $id = $this->request->getPost('idruangan');
        $db->table('tb_ruangan')->update($data, array('idruangan' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Diupdate.');
        return redirect()->to(base_url('Ruangan_A/index'));
    }
}