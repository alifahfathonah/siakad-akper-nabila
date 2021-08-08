<?php

namespace App\Controllers;

use App\Models\M_Laporan;
use App\Models\M_Matkul;
use App\Models\M_Mahasiswa;
use App\Models\M_Prodi;
use App\Models\Master_Dosen_model;
use App\Models\M_Krs;


class C_Laporan extends BaseController
{
    public function lapmahasiswa()

    {
        $model = new M_Mahasiswa();
        $data['mahasiswa'] = $model->tampildata()->getresultArray();
        return view('admin/laporan/view_laporan', $data);
    }

    public function laporandosen()
    {
        $model = new M_Laporan();
        $data['lapdosen'] = $model->laporandosen();
        return view('admin/laporan/lap_dosen', $data);
    }

    public function laporantendik()
    {
        $model = new M_Laporan();
        $data['laptendik'] = $model->laporantendik();
        return view('admin/laporan/lap_tendik', $data);
    }

    public function laporanmahasiswa()
    {
        $model = new M_Laporan();
        $thnmasuk = $this->request->getPost('thnmasuk1');
        $status = $this->request->getPost('status');
        $data['thnmasuk'] = $thnmasuk;
        $data['status'] = $status;
        $data['lapmahasiswa'] = $model->laporanmahasiswa($thnmasuk, $status);
        return view('admin/laporan/lap_mahasiswa', $data);
    }


    public function laporanmahasiswastatusexell($thnmasuk, $status)
    {
        $model = new M_Laporan();

        $data['thnmasuk'] = $thnmasuk;
        $data['status'] = $status;
        $data['lapmahasiswa'] = $model->laporanmahasiswa($thnmasuk, $status);
        return view('admin/laporan/lap_mahasiswastatusexell', $data);
    }


    public function laporanmahasiswaperiode()
    {
        $model = new M_Laporan();
        $thnmasuk = $this->request->getPost('thnmasuk');
        $data['thnmasuk'] = $thnmasuk;
        $data['lapmahasiswa'] = $model->laporanmahasiswaperiode($thnmasuk);
        return view('admin/laporan/lap_mahasiswaperiode', $data);
    }

    public function laporanmahasiswaperiodeexell($thnmasuk)
    {
        $model = new M_Laporan();
        $model1 = new M_Mahasiswa();

        // $thnmasuk = $this->request->getPost('thnmasuk');
        $data['thnmasuk'] = $thnmasuk;
        $data['lapmahasiswa'] = $model->laporanmahasiswaperiode($thnmasuk);
        return view('admin/laporan/lap_mahasiswaperiodeexell', $data);
    }


    public function lapmatakuliah()

    {
        $model = new M_Matkul();
        $model1 = new M_Prodi();
        $data['matakuliah'] = $model->tampildata()->getresultArray();
        $data['prodi'] = $model1->getProdi()->getresultArray();
        return view('admin/laporan/view_laporanmatkul', $data);
    }

    public function lapseluruhmatakuliah()
    {
        $model = new M_Laporan();
        $data['lapseluruhmatkul'] = $model->lapseluruhmatkul();
        return view('admin/laporan/lap_matkul', $data);
    }

    public function lapsemestermatakuliah()
    {
        $model = new M_Laporan();
        $semester = $this->request->getPost('semester');
        $data['semester'] = $semester;
        $data['lapmatkulsemester'] = $model->laporanmatakuliahsemester($semester);
        return view('admin/laporan/lap_matakuliahsemester', $data);
    }



    public function lapruangan()

    {
        $model = new M_Laporan();
        $data['ruangan'] = $model->lapruangan();
        return view('admin/laporan/lap_ruangan', $data);
    }



    public function lapkrs()

    {
        $model = new M_Laporan();
        $semester = $this->request->getPost('semester');
        $data['semester'] = $semester;
        $data['krs'] = $model->lapkrs($semester);
        return view('admin/laporan/view_lapkrs', $data);
    }

    public function lapkrsadmin()
    {
        $model = new M_Laporan();
        $semester = $this->request->getPost('semester');
        $data['semester'] = $semester;
        $data['krs'] = $model->lapkrs($semester);
        return view('admin/laporan/lap_krsmahasiswa', $data);
    }


    public function lapkrsmahasiswa($semester)
    {

        // $semester = $this->request->getPost('semesterkrs');
        $db   = \Config\Database::connect();

        $model = new M_Mahasiswa();
        $model3 = new M_Laporan();
        $model1 = new Master_Dosen_model;
        $model2 = new M_Prodi;
        $userid = user_id();;
        $data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
        $data['prodi'] = $model2->getProdi()->getresultArray();

        $qryRealationble = $db->table('users')->select('*')->join('tb_mahasiswa', 'nim=username')->where('id', $userid)->get()->getRow();

        $data['mahasiswa'] = $qryRealationble;
        $data['semester'] = $semester;
        $data['lapkrssemester'] = $model3->lapkrsmahasiswa($semester);
        return view('admin/laporan/lap_krsmahasiswa1', $data);
    }

    public function lapkhsmahasiswa($semester)
    {


        $db   = \Config\Database::connect();

        $model = new M_Mahasiswa();
        $model3 = new M_Laporan();
        $model1 = new Master_Dosen_model;
        $model2 = new M_Prodi;
        $userid = user_id();;
        $data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
        $data['prodi'] = $model2->getProdi()->getresultArray();

        $qryRealationble = $db->table('users')->select('*')->join('tb_mahasiswa', 'nim=username')->where('id', $userid)->get()->getRow();

        $data['mahasiswa'] = $qryRealationble;
        $data['semester'] = $semester;

        $model4 = new M_Krs();

        $data['krs'] = $model4->alldatakrs("$semester")->getresultArray();
        return view('admin/laporan/lap_khsmahasiswa', $data);
    }

    public function lapkhsmahasiswaexell($semester)
    {


        $db   = \Config\Database::connect();

        $model = new M_Mahasiswa();
        $model3 = new M_Laporan();
        $model1 = new Master_Dosen_model;
        $model2 = new M_Prodi;
        $userid = user_id();;
        $data['masterdosen'] = $model1->getMasterdosen()->getresultArray();
        $data['prodi'] = $model2->getProdi()->getresultArray();

        $qryRealationble = $db->table('users')->select('*')->join('tb_mahasiswa', 'nim=username')->where('id', $userid)->get()->getRow();

        $data['mahasiswa'] = $qryRealationble;
        $data['semester'] = $semester;

        $model4 = new M_Krs();

        $data['krs'] = $model4->alldatakrs("$semester")->getresultArray();
        return view('admin/laporan/lap_khsmahasiswaexell', $data);
    }
}
