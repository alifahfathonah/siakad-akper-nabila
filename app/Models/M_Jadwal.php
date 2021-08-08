<?php namespace App\Models;

use CodeIgniter\Model;

class M_Jadwal extends Model
{
	protected $table = 'tb_jadwal';
	public function getJadwal()
	{
		$builder= $this->db->table('tb_jadwal');
		$builder->select('*');
	
	
		$builder->join('tb_ruangan','idruangan=idruanganjadwal');
		$builder->orderBy('kodejadwal', 'ASC');
		return $builder->get();
	}


}