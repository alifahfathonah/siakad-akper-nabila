<?php namespace App\Models;

use CodeIgniter\Model;

class M_Mahasiswa extends Model
{
	protected $table = 'tb_mahasiswa';
	public function tampildata()
	{
		$builder= $this->db->table('tb_mahasiswa');
		$builder->orderBy('nim', 'thnmasuk', 'ASC');
		return $builder->get();
	}

	public function cek_nim($nim){

		return $this->db->table('tb_mahasiswa')
			->where(array('nim'=>$nim))
			->get()->getRowArray();

	}

	public function getMahasiswa($id)
	{
		$builder = $this->db->table('tb_mahasiswa');
        $builder->select('*');
        $builder->where('nim', $id);
        return $builder->get();
	}


}