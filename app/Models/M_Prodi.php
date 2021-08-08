<?php namespace App\Models;

use CodeIgniter\Model;

class M_Prodi extends Model
{
	protected $table = 'tb_prodi';
	public function getProdi()
	{
		$bulder= $this->db->table('tb_prodi');
		return $bulder->get();
	}

    public function getdetailProdi($semester)
	{
		$builder = $this->db->table('tb_prodi');
        $builder->select('*');
        $builder->where('semester', $semester);
        return $builder->get();
	}



}