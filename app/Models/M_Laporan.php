<?php namespace App\Models;

use CodeIgniter\Model;

class M_Laporan extends Model
{
    public function laporandosen()
    {
        $builder = $this->db->table('tb_dosen');
        return $builder->get()->getresult();
    }

    public function laporantendik()
    {
        $builder = $this->db->table('tb_tendik');
        return $builder->get()->getresult();
    }

    public function laporanmahasiswa($thnmasuk, $status)
    {
        $builder = $this->db->table('tb_mahasiswa');
        $builder->select('*');
        $builder->where('thnmasuk', $thnmasuk);
        $builder->where('status', $status);
        return $builder->get()->getresult();

    }

    public function laporanmahasiswastatus($thnmasuk, $status)
    {
        $builder = $this->db->table('tb_mahasiswa');
        $builder->select('*');
        $builder->where('thnmasuk', $thnmasuk);
        $builder->where('status', $status);
        return $builder->get()->getresult();

    }

    

    public function laporanmahasiswaperiode($thnmasuk)
    {
        $builder = $this->db->table('tb_mahasiswa');
        $builder->select('*');
        $builder->where('thnmasuk', $thnmasuk);
        return $builder->get()->getresult();

    }


    public function lapseluruhmatkul()
    {
        $builder = $this->db->table('tb_matakuliah');
        $builder->select('*');
        $builder->join('tb_prodi','semester=smt');
        $builder->orderBy('kodematkul','smt', 'ASC');
        return $builder->get()->getresult();
    }

    public function laporanmatakuliahsemester($semester)
    {
        $builder = $this->db->table('tb_matakuliah');
        $builder->select('*');
        $builder->join('tb_prodi','semester=smt');
        $builder->where('smt', $semester);
        $builder->orderBy('kodematkul','smt', 'ASC');
        return $builder->get()->getresult();
    }

    public function lapruangan()
    {
        $builder = $this->db->table('tb_ruangan');
        return $builder->get()->getresult();
    }

    public function lapkrs($semester)
    {
        $builder= $this->db->table('tb_krs');
        
		$builder->join('tb_matakuliah','kodematkul=kodematkulkrs');
		$builder->join('tb_dosen','nidn=nidnkrs');
		
		
		$builder->where('smt', $semester);
		$builder->orderBy('kodematkul', 'ASC');
		return $builder->get()->getresult();

    }

    public function lapkrsmahasiswa($semester)
    {
        
        $builder = $this->db->table('tb_krs');
		$builder->join('tb_matakuliah', 'kodematkul=kodematkulkrs');
		$builder->join('tb_dosen', 'nidn=nidnkrs');
		
		
		$builder->where('smt', $semester);
		$builder->orderBy('kodematkul', 'ASC');
		return $builder->get()->getresult();
        
	}

    public function lapkhsmahasiswa($semester)
    {
       

        $builder = $this->db->table('tb_nilai');
        $builder->select('*');
        $builder->join('users', 'nimnilai=username');
        $builder->join('tb_matakuliah', 'kodematkul=kodematkulnilai');
		$builder->where('smt', $semester);
		$builder->orderBy('kodematkulnilai', 'ASC');
		return $builder->get()->getresult();
        
	}


}
