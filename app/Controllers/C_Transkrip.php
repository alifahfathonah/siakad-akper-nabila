<?php namespace App\Controllers;


use App\Models\M_Krs;
use App\Models\M_Prodi;
use App\Models\Master_Dosen_model;
use App\Models\M_Mahasiswa;
use App\Models\M_Laporan;
use App\Models\M_Khs;
use App\Models\M_Matkul;



class C_Transkrip extends BaseController
{

    public function tampil()

    {
        $model= new M_Matkul();
        $model1 = new M_Prodi();
        $data['matakuliah'] = $model->tampildata()->getresultArray();
        $data['prodi'] = $model1->getProdi()->getresultArray();
        return view('admin/laporan/view_transkrip', $data);
    }

    public function tampilrekap()

    {
        $model= new M_Matkul();
        $model1 = new M_Prodi();
        $data['matakuliah'] = $model->tampildata()->getresultArray();
        $data['prodi'] = $model1->getProdi()->getresultArray();
        return view('admin/laporan/view_transkriprekap', $data);
    }


    public function tampiltranskrip()
    {

        $db   = \Config\Database::connect();
		$model= new M_Mahasiswa();
		$model1 = new Master_Dosen_model;
		$model2 = new M_Prodi;
        $userid=user_id();
        $nim=$this->request->getPost('nim');
        $judul=$this->request->getPost('judulta');
		$data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
		$data['prodi'] = $model2->getProdi()->getresultArray();
		$data['judul'] = $judul;

        $qryRealationble= $db->table('tb_mahasiswa')->select('*')->where('nim', $nim)->get()->getRow();

         $data['mahasiswa'] = $qryRealationble;
		echo view("admin/laporan/lap_transkripnilai", $data); 
    }

}