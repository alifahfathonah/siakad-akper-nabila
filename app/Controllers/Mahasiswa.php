<?php namespace App\Controllers;

use App\Models\M_Mahasiswa;
use App\Models\Master_Dosen_model;
use App\Models\M_Prodi;



class Mahasiswa extends BaseController
{
    public function index()
	{
		return view('mahasiswa/menu'); 
        // echo "tes";
	}

	public function tampildata()
	{

		helper(['form','url']);
		
		$model= new M_Mahasiswa();
		$model1 = new Master_Dosen_model;
		$model2 = new M_Prodi;


		$data['mahasiswa'] = $model->tampildata()->getresultArray();
		$data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
		$data['prodi'] = $model2->getProdi()->getresultArray();

		echo view("admin/mahasiswa/view_mahasiswa",$data);
	}

	public function add()
    {
        $db   = \Config\Database::connect();

		$model= new M_Mahasiswa();
		$model1 = new Master_Dosen_model;
		$model2 = new M_Prodi;


		$data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
		$data['prodi'] = $model2->getProdi()->getresultArray();
        $data['mahasiswa'] = $db->table('tb_mahasiswa')->get()->getresult();

        return view('admin/mahasiswa/add_mahasiswa', $data);
    }

	public function detail($id)
	{
		$db   = \Config\Database::connect();
		$model= new M_Mahasiswa();
		$data['mahasiswa'] = $model->getMahasiswa($id)->getrow();
		return view('admin/mahasiswa/detail_mahasiswa', $data);
	}

	
	public function save()
    {
        $db   = \Config\Database::connect();
        $data = [
            'nim' => $this->request->getPost('nim'),
            'prodi' => $this->request->getPost('programstudi'),
            'nama' => $this->request->getPost('nama'),
            'thnmasuk' => $this->request->getPost('thnmasuk'),
            'tmplahir' => $this->request->getPost('tmplahir'),
            'status' => $this->request->getPost('status'),
			'tgllahir' => $this->request->getPost('tgllahir'),
            'pemakademik' => $this->request->getPost('pemakademik'),
			'jenkel' => $this->request->getPost('jenkel'),
			'alamat' => $this->request->getPost('alamat'),
			'nohp' => $this->request->getPost('nohp'),
			'email' => $this->request->getPost('email'),
			'nik' => $this->request->getPost('nik'),
		];
        $dataUser=[
            'username'=> $this->request->getPost('nim'),
            'active'=>1,
        ];
		$session =session();
		
		$model = new M_Mahasiswa();
        $nim = $this->request->getPost('nim');

		$cek =$model->cek_nim($nim);
        if($cek){
            $nim= $cek['nim'];
            $veryfi= password_verify($nim,$nim);
            if($veryfi){
                session()->set('nim',$cek['nim']);
                return redirect()->to(site_url('tampildata'));
            }
            else{
                $session->setFlashdata('msg', 'Data Sudah Ada');
                return redirect()->to(site_url('Mahasiswa/add'));
            }
        }

        $db->table('tb_mahasiswa')->insert($data);
        $db->table('users')->insert($dataUser);
        
        $idqery= $db->table('users')->select('id')->where('username', $nim)->get()->getRow();
        $id=$idqery->id;
        $db->table('auth_groups_users')->insert([
            'group_id'=>'5',
            'user_id'=>$id,
        ]);

        // $query("INSERT INTO `db_siakadnabila`.`auth_groups_users` (`group_id`, `user_id`) VALUES ('5', '$id');");
        session()->setflashdata('sukses', 'Data Berhasil Disimpan.');
        return redirect()->to(base_url('Mahasiswa/tampildata'));
    }

	public function edit($id)
    {
        $db   = \Config\Database::connect();

		$model= new M_Mahasiswa();
		$model1 = new Master_Dosen_model;
		$model2 = new M_Prodi;


		$data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
		$data['prodi'] = $model2->getProdi()->getresultArray();
        
    
        $data['mahasiswa'] = $model->getMahasiswa($id)->getrow();
        return view('admin/mahasiswa/edit_mahasiswa', $data);
    }

    public function update()
    {
        $db   = \Config\Database::connect();
        $data = [

            'prodi' => $this->request->getPost('programstudi'),
            'nama' => $this->request->getPost('nama'),
            'thnmasuk' => $this->request->getPost('thnmasuk'),
            'tmplahir' => $this->request->getPost('tmplahir'),
            'status' => $this->request->getPost('status'),
			'tgllahir' => $this->request->getPost('tgllahir'),
            'pemakademik' => $this->request->getPost('pemakademik'),
			'jenkel' => $this->request->getPost('jenkel'),
			'alamat' => $this->request->getPost('alamat'),
			'nohp' => $this->request->getPost('nohp'),
			'email' => $this->request->getPost('email'),
			'nik' => $this->request->getPost('nik'),
        ];

        $id = $this->request->getPost('nim');
        $db->table('tb_mahasiswa')->update($data, array('nim' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Diupdate.');
        return redirect()->to(base_url('Mahasiswa/tampildata'));
    }

	public function delete()
    {
        $db   = \Config\Database::connect();
        $id = $this->request->getPost('nim');
        $db->table('tb_mahasiswa')->delete(array('nim' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Di Hapus.');
        return redirect()->to(base_url('Mahasiswa/tampildata'));
    }

    public function profile()
    {
        $db   = \Config\Database::connect();

		$model= new M_Mahasiswa();
		$model1 = new Master_Dosen_model;
		$model2 = new M_Prodi;
        $userid=user_id();;
		$data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
		$data['prodi'] = $model2->getProdi()->getresultArray();

        $qryRealationble= $db->table('users')->select('*')->join('tb_mahasiswa','nim=username')->where('id', $userid)->get()->getRow();

         $data['mahasiswa'] = $qryRealationble;
        
         // var_dump($qryRealationble);
        return view('mahasiswa/profile', $data);
    }
}
