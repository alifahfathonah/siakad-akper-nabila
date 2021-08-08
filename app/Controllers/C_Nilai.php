<?php

namespace App\Controllers;

use App\Models\M_Nilai;


class C_Nilai extends BaseController
{
	public function tampilnilai()
	{
		$model = new M_Nilai();
		$data['matakuliah'] = $model->tampilmatkul()->getresultArray();
		echo view("dosen/nilai/view_nilai", $data);
	}

	public function tampilmahasiswa($id)
	{
		$db   = \Config\Database::connect();
		// Mengambil data semester
		$getSemester = $db->query("SELECT namamatkul, smt FROM tb_matakuliah WHERE kodematkul='$id'");
		$rows = $getSemester->getResultArray();
		foreach ($rows as $row) :
			$namamatkul = $row['namamatkul'];
			$semester = $row['smt'];
		endforeach;
		// Mengambil data mahasiswa 
		$getMahasiswa = $db->query("
			SELECT z.*,  n.nilaiakhir, n.nilaihuruf, n.bobot FROM (
				SELECT nimkrs,nama, kodematkul, nidnkrs FROM tb_detailkrs
				JOIN tb_mahasiswa ON nim=nimkrs
				JOIN tb_matakuliah ON semester=smt
				JOIN tb_krs ON kodematkul=kodematkulkrs
				WHERE semester='$semester' AND kodematkul='$id'
			) z
			LEFT JOIN tb_nilai n ON z.nimkrs = n.nimnilai AND z.kodematkul = n.kodematkulnilai
		");
		$rows1 = $getMahasiswa->getResultArray();
		$data['results'] = $rows1;
		$data['semester'] = $semester;
		$data['kodematkul'] = $id;
		$data['namamatkul'] = $namamatkul;
		// Tampilkan view
		echo view("dosen/nilai/detail_nilai", $data);
	}

	public function simpannilai()
	{
		$kodematkul = $this->request->getPost('kodematkul');
		$semester = $this->request->getPost('semester');
		$nimkrs = $this->request->getPost('nimkrs');
		$nidnkrs = $this->request->getPost('nidnkrs');
		$nama = $this->request->getPost('nama');
		$angka = $this->request->getPost('angka');
		$huruf = $this->request->getPost('huruf');
		$bobot = $this->request->getPost('bobot');
		
		$db   = \Config\Database::connect();
		// hapus dulu jika ada data sebelumnya
		$db->query("DELETE FROM tb_nilai WHERE kodematkulnilai='$kodematkul'");

		for ($i = 0; $i < count($nimkrs); $i++) 
		{
			$nim_nilai = $nimkrs[$i];
			$nilai_akhir = $angka[$i];
			$nilai_huruf = $huruf[$i];
			$nilai_bobot = $bobot[$i];
			$nidn = $nidnkrs[$i];
			
			// jika nilainya kosong, dilewati
			if ($nilai_akhir == '') continue;

			$sql = "INSERT INTO tb_nilai VALUES('$nim_nilai','$kodematkul','$nidn','$semester',$nilai_akhir,'$nilai_huruf',$nilai_bobot)";
			$db->query($sql);
		}
		
		echo '<script>
			alert("Data berhasil disimpan");
			window.location.replace("'.site_url('C_Nilai/tampilmahasiswa/'.$kodematkul).'");
		</script>';

	}

}
