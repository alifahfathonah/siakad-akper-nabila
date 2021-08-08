<?php namespace App\Models;

use CodeIgniter\Model;

class M_Nilai extends Model
{
	
	public function tampilmatkul()
	{
		$usermatkul=user_id();;
		$builder= $this->db->table('users');
		$builder->select('*');
		$builder->join('tb_krs','nidnkrs=username');
        $builder->join('tb_matakuliah','kodematkul=kodematkulkrs');
		$builder->where('id', $usermatkul);
		return $builder->get();
	}

}