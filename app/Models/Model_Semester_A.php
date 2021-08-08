<?php namespace App\Models;

use CodeIgniter\Model;

class Model_Semester_A extends Model
{
	protected $table = 'tb_semester';
	public function getSemester()
	{
		$bulder= $this->db->table('tb_semester');
		return $bulder->get();
	}

	public function getSemester1($id)
	{
	

		$builder = $this->db->table('tb_semester');
        $builder->select('*');
        $builder->where('semestertahun', $id);
        return $builder->get();
	}

	public function gantiStatus($semestertahun)
	{
		$data = [
			
           
            'status' => 'tes'];

		// $this->db->table('tb_semester')->update($data, array('semestertahun' => $semestertahun));
		$this->db->query("UPDATE `db_siakadnabila`.`tb_semester`  SET `status` = CASE WHEN `status`='Tidak Aktif' THEN  'Aktif' ELSE 'Tidak Aktif' END WHERE `idsemesterakad` = '$semestertahun';");
		
	}




}