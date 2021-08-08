<?php namespace App\Controllers;

use App\Models\Master_Dosen_model;

class Master_Dosen extends BaseController
{
	public function index()
	{
		$model= new Master_Dosen_model();
		$uri = new \CodeIgniter\HTTP\URI();
		$data['masterdosen'] = $model->getMasterdosen()->getresultArray();
		echo view("admin/dosen/view_dosen",$data);
	}

    public function detail($id)
	{
		$db   = \Config\Database::connect();
		$model= new Master_Dosen_model();
		$data['masterdosen'] = $model->getDosen($id)->getrow();
		return view('admin/dosen/detail_dosen', $data);
	}

    public function add()
    {
        $db   = \Config\Database::connect();
        $data['masterdosen'] = $db->table('tb_dosen')->get()->getresult();
        return view('admin/dosen/add_dosen', $data);
    }

    public function save()
    {
        $db   = \Config\Database::connect();
        $data = [
            'nidn' => $this->request->getPost('nidn'),
            'pendidikandosen' => $this->request->getPost('pendidikandosen'),
            'namadosen' => $this->request->getPost('namadosen'),
            'statusdosen' => $this->request->getPost('statusdosen'),
            'nipdosen' => $this->request->getPost('nipdosen'),
            'nohpdosen' => $this->request->getPost('nohpdosen'),
			'gelardosen' => $this->request->getPost('gelardosen'),
            'jabatanakademikdosen' => $this->request->getPost('jabatanakademikdosen'),
        ];
        $db->table('tb_dosen')->insert($data);
        session()->setflashdata('sukses', 'Data Berhasil Disimpan.');
        return redirect()->to(base_url('Master_Dosen/index'));
    }

    public function delete()
    {
        $db   = \Config\Database::connect();
        $id = $this->request->getPost('nidn');
        $db->table('tb_dosen')->delete(array('nidn' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Di Hapus.');
        return redirect()->to(base_url('Master_Dosen/index'));
    }

    public function edit($id)
    {
        $db   = \Config\Database::connect();
        $model= new Master_Dosen_model();
        $data['masterdosen'] = $model->getDosen($id)->getrow();
        return view('admin/dosen/edit_dosen', $data);
    }

    public function update()
    {
        $db   = \Config\Database::connect();
        $data = [
            'pendidikandosen' => $this->request->getPost('pendidikandosen'),
            'namadosen' => $this->request->getPost('namadosen'),
            'statusdosen' => $this->request->getPost('statusdosen'),
            'nipdosen' => $this->request->getPost('nipdosen'),
            'nohpdosen' => $this->request->getPost('nohpdosen'),
			'gelardosen' => $this->request->getPost('gelardosen'),
            'jabatanakademikdosen' => $this->request->getPost('jabatanakademikdosen'),
        ];
        $id = $this->request->getPost('nidn');
        $db->table('tb_dosen')->update($data, array('nidn' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Diupdate.');
        return redirect()->to(base_url('Master_Dosen/index'));
    }

    public function profile()
    {
        $db   = \Config\Database::connect();

		
		$model1 = new Master_Dosen_model;
	
        $dosenid=user_id();;

        $qryRealationble= $db->table('users')->select('*')->join('tb_dosen','nidn=username')->where('id', $dosenid)->get()->getRow();

         $data['masterdosen'] = $qryRealationble;
        
         // var_dump($qryRealationble);
        return view('dosen/profile', $data);
    }
}