<?php namespace App\Models;

use CodeIgniter\Model;

class Master_Tendik_model extends Model
{
	protected $table = 'tb_tendik';
	public function getMastertendik()
	{
		$builder= $this->db->table('tb_tendik');
		$builder->orderBy('nitk', 'ASC');
		return $builder->get();
	}
    
	public function getTendik($id)
	{
	

		$builder = $this->db->table('tb_tendik');
        $builder->select('*');
        $builder->where('nitk', $id);
        return $builder->get();
	}

}
