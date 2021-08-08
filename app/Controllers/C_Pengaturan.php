<?php namespace App\Controllers;

use App\Models\M_Pengaturan;
use App\Models\Master_Tendik_model;

class C_Pengaturan extends BaseController
{

	public function tampiluseradmin()
	{
		$model= new M_Pengaturan();
		$uri = new \CodeIgniter\HTTP\URI();
		$data['user'] = $model->getUser()->getresultArray();
		echo view("admin/register/view_register",$data);
	}

	public function tambahuser()
	{
		$db   = \Config\Database::connect();
        $data['user'] = $db->table('users')->get()->getresult();
        return view('admin/register/add_register', $data);
	}

	public function hapususer()
    {
        $db   = \Config\Database::connect();
        $id = $this->request->getPost('id');
        $db->table('users')->delete(array('id' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Di Hapus.');
        return redirect()->to(base_url('C_Pengaturan/tampiluseradmin'));
    }

	
    public function profile()
    {
        $db   = \Config\Database::connect();

		$model= new Master_Tendik_model;
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
