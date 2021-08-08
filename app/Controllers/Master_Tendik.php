<?php namespace App\Controllers;

use App\Models\Master_Tendik_model;

class Master_Tendik extends BaseController
{
	public function index()
	{
		$model= new Master_Tendik_model();
		$uri = new \CodeIgniter\HTTP\URI();
		$data['mastertendik'] = $model->getMastertendik()->getresultArray();
		echo view("admin/tendik/view_tendik",$data);
	}

	public function detail($id)
	{
		$db   = \Config\Database::connect();
		$model= new Master_Tendik_model();
		$data['mastertendik'] = $model->getTendik($id)->getrow();
		return view('admin/tendik/detail_tendik', $data);
	}

	public function add()
    {
        $db   = \Config\Database::connect();
        $data['mastertendik'] = $db->table('tb_tendik')->get()->getresult();
        return view('admin/tendik/add_tendik', $data);
    }

	public function save()
    {
        $db   = \Config\Database::connect();
        $data = [
            'nitk' => $this->request->getPost('nitk'),
            'jabatantendik' => $this->request->getPost('jabatantendik'),
            'namatendik' => $this->request->getPost('namatendik'),
            'statustendik' => $this->request->getPost('statustendik'),
            'niptendik' => $this->request->getPost('niptendik'),
            'nohptendik' => $this->request->getPost('nohptendik'),
			'pendidikantendik' => $this->request->getPost('pendidikantendik'),
        ];
        $db->table('tb_tendik')->insert($data);
        session()->setflashdata('sukses', 'Data Berhasil Disimpan.');
        return redirect()->to(base_url('Master_Tendik/index'));
    }

    public function delete()
    {
        $db   = \Config\Database::connect();
        $id = $this->request->getPost('nitk');
        $db->table('tb_tendik')->delete(array('nitk' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Di Hapus.');
        return redirect()->to(base_url('Master_Tendik/index'));
    }

    public function edit($id)
    {
        $db   = \Config\Database::connect();
        $model= new Master_Tendik_model();
        $data['mastertendik'] = $model->getTendik($id)->getrow();
        return view('admin/tendik/edit_tendik', $data);
    }

    public function update()
    {
        $db   = \Config\Database::connect();
        $data = [
            'jabatantendik' => $this->request->getPost('jabatantendik'),
            'namatendik' => $this->request->getPost('namatendik'),
            'statustendik' => $this->request->getPost('statustendik'),
            'niptendik' => $this->request->getPost('niptendik'),
            'nohptendik' => $this->request->getPost('nohptendik'),
			'pendidikantendik' => $this->request->getPost('pendidikantendik'),
        ];
        $id = $this->request->getPost('nitk');
        $db->table('tb_tendik')->update($data, array('nitk' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Diupdate.');
        return redirect()->to(base_url('Master_Tendik/index'));
    }

    public function profile()
    {
        $db   = \Config\Database::connect();

		$model= new Master_Tendik_model();
		
        $tendikid=user_id();;

        $qryRealationble= $db->table('users')->select('*')->join('tb_tendik','nitk=username')->where('id', $tendikid)->get()->getRow();

         $data['mastertendik'] = $qryRealationble;
        
         // var_dump($qryRealationble);
        return view('admin/profile', $data);
    }
}