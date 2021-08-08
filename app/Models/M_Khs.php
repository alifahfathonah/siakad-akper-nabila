<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Khs extends Model
{
	
	public function alldatakhs($semester,$id)
	{
		$builder = $this->db->table('tb_nilai');
		$builder->join('tb_matakuliah', 'kodematkul=kodematkulnilai');
		$builder->join('users', 'nimnilai=username');
		$builder->where('smt', $semester);
        $builder->where('id', $id);
		$builder->orderBy('kodematkul', 'ASC');
		return $builder->get();
	}

	public function lapkhsmahasiswa($semester)
	{
		$builder = $this->db->table('tb_nilai');
		$builder->join('tb_matakuliah', 'kodematkul=kodematkulnilai');
		$builder->join('users', 'nimnilai=username');
		$builder->where('smt', $semester);
		$builder->orderBy('kodematkul', 'ASC');
		return $builder->get();

	}
	

}
