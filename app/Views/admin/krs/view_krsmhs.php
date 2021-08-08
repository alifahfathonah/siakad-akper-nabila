<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<form action="<?= site_url('C_Krs/updatekrs') ?>" method="POST">
    <input type="hidden" value="<?= $mahasiswa->nim ?>" name="nim" id="nim">
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class=" mb-4">
                        <div class="alert alert-success" role="alert">
                            <h5 class="m-0 font-weight-bold text-primary">
                                </a>Kartu Rencana Studix </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-2">
                            <section class="content">
                                <a href="<?= site_url('C_Home/menumahasiswa') ?>">
                                    <button type="button" class="btn btn-sm btn-warning mb-3">
                                        <i class="fas fa-arrow-alt-circle-left"></i>
                                        Kembali
                                    </button>
                                </a>
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table hover table-striped table-bordered" id="mastertendik">
                                            <tbody>
                                                <tr>
                                                    <th width="250px">NIM</th>
                                                    <td> : <?= $mahasiswa->nim ?> </td>
                                                </tr>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td> : <?= $mahasiswa->nama ?> </td>
                                                </tr>
                                                <tr>
                                                    <th>Prodi</th>
                                                    <td> : <?= $mahasiswa->prodi ?> </td>
                                                </tr>
                                                <tr>
                                                    <th>Pembimbing Akademik</th>
                                                    <td> : <?= $mahasiswa->pemakademik ?> </td>
                                                </tr>
                                                <tr>
                                                    <th>Pilih Semester</th>
                                                    <td>
                                                        <select name="semester" class="form-control semesterkrs" style="width: 250px" onchange="pilihkrs()">
                                                            <option value="xx">- Pilih -</option>
                                                            <?php 
                                                            $n=0;
                                                            foreach ($prodi as $row) : 
                                                            $n+=1;
                                                            $db=db_connect();
                                                            $gnjilgenap=$n%2;
                                                            $qry=$db->query("SELECT*FROM tb_semester where semester='$gnjilgenap' ");
                                                            $semesterakad=$qry->getrow();
                                                            
                                                            if($semesterakad->semestertahun==date('Y')&& $semesterakad->status=="Tidak Aktif" ){
                                                                continue;
                                                            } 
                                                            ?>
                                                                <option  value="<?= $row['semester']; ?>">
                                                                    <?=  $row['semester']; ?> 
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="box box-primary box-solid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-2">
                                <section class="content">
                                    <button type="submit" class="btn btn-sm btn-info">
                                    <i class="fas fa-share-square"></i>
                                        Update KRS
                                    </button>

                                    <button type="button" class="btn btn-sm btn-secondary" onclick="cetak()">
                                        <i class="fas fa-print"></i>
                                        Cetak KRS
                                    </button>

                                    
                                    <div class="card-body">
                                        <table class="table table-sm table-striped table-bordered">
                                            <thead align="center">
                                                <tr>
                                                    <th>
                                                        <font color="#000000">No
                                                    </th>
                                                    <th>
                                                        <font color="#000000">Kode Matakuliah
                                                    </th>
                                                    <th>
                                                        <font color="#000000">Matakuliah
                                                    </th>
                                                    <th>
                                                        <font color="#000000">Total SKS
                                                    </th>
                                                    <th>
                                                        <font color="#000000">Jadwal
                                                    </th>
                                                  
                                                    <th>
                                                        <font color="#000000">Dosen Pengajar
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="ambilkrs">
                                                <?php $no = 0;
                                                $sks = 0;
                                                foreach ($table as $row) : $no++;
                                                    $sks = $sks + $row['totalsks']; ?>
                                                    <tr align="center">
                                                        <td><?= $no; ?></td>
                                                        <td><?= $row['kodematkul']; ?></td>
                                                        <td><?= $row['namamatkul']; ?></td>
                                                        <td> <?= $row['totalsks']; ?> </td>
                                                        <td> <?= $row['hari']; ?>, <?= $row['jam']; ?>, <?= $row['ruangan']; ?> </td>
                                                       
                                                        <td> <?= $row['namadosen']; ?> </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr>
                                                    <td colspan="3">Total SKS</td>
                                                    <td class="text-center"><?= $sks ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>

<script>
    function pilihkrs() {
        var a = $('.semesterkrs').val();
        $.ajax({
            url: '<?= site_url('C_Krs/tampilkrssemester')  ?>',
            type: "post",
            data: {
                semesterkrs: a
            },
            cache: false,
            success: function(response) {
                // alert("Golongan harus dipilih");
                // console.log("Data Yang di dapatkan");
                console.log(response.data);
                $('.ambilkrs').html(response);

            }
        });
    }

    function cetak(){
        var a = $('.semesterkrs').val();
       location.href = "<?= site_url('C_Laporan/lapkrsmahasiswa/') ?>" +a;


    }
</script>



<?= $this->endSection(); ?>