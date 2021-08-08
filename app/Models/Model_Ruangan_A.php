<?php namespace App\Models;

use CodeIgniter\Model;

class Model_Ruangan_A extends Model
{
	protected $table = 'tb_ruangan';
	public function getRuangan()
	{
		$bulder= $this->db->table('tb_ruangan');
		return $bulder->get();
	}


}