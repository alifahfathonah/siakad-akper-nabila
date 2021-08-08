<?php namespace App\Models;

use CodeIgniter\Model;

class Master_Dosen_model extends Model
{
	protected $table = 'tb_dosen';
	public function getMasterdosen()
	{
		$bulder= $this->db->table('tb_dosen');
		return $bulder->get();
	}

	public function getDosen($id)
	{
	

		$builder = $this->db->table('tb_dosen');
        $builder->select('*');
        $builder->where('nidn', $id);
        return $builder->get();
	}
}