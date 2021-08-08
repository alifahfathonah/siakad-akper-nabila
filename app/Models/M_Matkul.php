<?php namespace App\Models;

use CodeIgniter\Model;

class M_Matkul extends Model
{
	protected $table = 'tb_matakuliah';
	public function tampilmatkuladmin()
	{
		$bulder= $this->db->table('tb_matakuliah');
        $bulder->orderBy('kodematkul','ASC');
		return $bulder->get();
	}

	public function alldatamatkul($semester)
	{
		$builder= $this->db->table('tb_matakuliah');
		$builder->where('smt', $semester);
        $builder->orderBy('smt','ASC');
		return $builder->get();
	}

	public function caridatamatkul($id){
		$builder= $this->db->table('tb_matakuliah');
		$builder->where('kodematkul', $id);
		return $builder->get();
	}

	public function tampildata()
	{
		$builder= $this->db->table('tb_matakuliah');
		$builder->orderBy('kodematkul', 'ASC');
		return $builder->get();
	}
}