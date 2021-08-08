<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Krs extends Model
{
	protected $table = 'tb_krs';
	public function tampilkrs()
	{
		$bulder = $this->db->table('tb_krs');
		return $bulder->get();
	}

	public function alldatakrs($semester)
	{
		$builder = $this->db->table('tb_krs');
		$builder->join('tb_matakuliah', 'kodematkul=kodematkulkrs');
		$builder->join('tb_dosen', 'nidn=nidnkrs');
		$builder->where('smt', $semester);
		$builder->orderBy('kodematkul', 'ASC');
		return $builder->get();
	}
	
	public function deleteDetail($nim)
	{
		$query = $this->db->table('tb_detailkrs')->delete(array('nimkrs' => $nim));
		return $query;
	}
}
