<?php namespace App\Models;

use CodeIgniter\Model;

class M_Pengaturan extends Model
{
	protected $table = 'users';
	public function getUser()
	{
		$builder = $this->db->table('users');
        $builder->orderBy('username', 'ASC');
        return $builder->get();
	}

}