<?php namespace App\Controllers;

use App\Models\Model_Semester_A;

class Semester_A extends BaseController
{
 	public function index()
	{
		$model= new Model_Semester_A();
		$uri = new \CodeIgniter\HTTP\URI();
		$data['semester'] = $model->getSemester()->getresultArray();
		echo view("admin/semester/view_semester",$data);
	}

    public function add()
    {
        $db   = \Config\Database::connect();
        $data['semester'] = $db->table('tb_semester')->get()->getresult();
        return view('admin/semester/add_semester', $data);
    }

	public function save()
    {
        $db   = \Config\Database::connect();
        $idsmt=0;
        if($this->request->getPost('semester')=='Ganjil'){
            $idsmt=$this->request->getPost('semestertahun')."1";
            $smkey=1;
        }else{
            $idsmt=$this->request->getPost('semestertahun')."2";
            $smkey=0;
        }
        $data = [
            'idsemesterakad' => $idsmt,
            'semestertahun' => $this->request->getPost('semestertahun'),
            'semester' => $smkey,
            'status' => $this->request->getPost('status'),

        ];
        $db->table('tb_semester')->insert($data);
        session()->setflashdata('sukses', 'Data Berhasil Disimpan.');
        return redirect()->to(base_url('Semester_A/index'));
    }

	public function delete()
    {
        $db   = \Config\Database::connect();
        $id = $this->request->getPost('semestertahun');
        $db->table('tb_semester')->delete(array('semestertahun' => $id));
        session()->setflashdata('sukses', 'Data Berhasil Di Hapus.');
        return redirect()->to(base_url('Semester_A/index'));
    }


	public function edit($id)
    {
        $db   = \Config\Database::connect();
        $model= new Model_Semester_A();
        $data['semester'] = $model->getSemester1($id)->getrow();
        return view('admin/semester/edit_semester', $data);
    }

    public function update()
    {
        $db   = \Config\Database::connect();
        $idsmt=0;
        if($this->request->getPost('semesteredit')=='Ganjil'){
            $idsmt=$this->request->getPost('tahunakademikedit')."1";
            $smkey=1;
        }else{
            $idsmt=$this->request->getPost('tahunakademikedit')."2";
            $smkey=0;
        }
        $data = [
            'semestertahun' => $this->request->getPost('tahunakademikedit'),
            'semester' => $smkey,
            'status' => $this->request->getPost('statusedit'),

        ];
        $db->table('tb_semester')->update($data, array('idsemesterakad' => $idsmt));
        session()->setflashdata('sukses', 'Data Berhasil Diupdate.');
        return redirect()->to(base_url('Semester_A/index'));
    }

    public function gantistatus($semestertahun)
    {
        $model= new Model_Semester_A();
        $data['semester'] = $model->gantiStatus($semestertahun);
        $this->index();
    }
}
