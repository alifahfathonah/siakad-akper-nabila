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
                                </a>Kartu Hasil Studi </h5>
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
                                                    <th>Pilih Semester</th>
                                                    <td>
                                                        <select name="semesterkhs" class="form-control semesterkhs" style="width: 250px" onchange="pilihkhs()">
                                                            <option value="xx">- Pilih -</option>
                                                            <?php foreach ($prodi as $row) : ?>
                                                                <option value="<?= $row['semester']; ?>">
                                                                    <?= $row['semester']; ?> </option>
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
                                   
                                <button type="button" class="btn btn-sm btn-secondary" onclick="cetak()">
                                        <i class="fas fa-print"></i>
                                        Cetak KHS
                                        </button>
                                        
                                        <button type="button" class="btn btn-sm btn-success" onclick="cetakexell()">
                                        <i class="fas fa-print"></i>
                                        Export Exell
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
                                                        <font color="#000000">SKS
                                                    </th>
                                                    <th>
                                                        <font color="#000000">Nilai
                                                    </th>
                                                    <th>
                                                        <font color="#000000">Bobot
                                                    </th>
                                                    <th>
                                                        <font color="#000000">Mutu
                                                    </th>
                                                    <th>
                                                        <font color="#000000">Keterangan
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="ambilkhs">
                                               
                                                <tr>
                                                    <td colspan="8">Total SKS : </td>
                                                
                                                </tr>
                                                <tr>
                                                    <td colspan="">Index Prestasi : </td>
                                                    
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
    function pilihkhs() {
        var a = $('.semesterkhs').val();
        $.ajax({
            url: '<?= site_url('C_Khs/tampilkhssemester')  ?>',
            type: "post",
            data: {
                semesterkhs: a
            },
            cache: false,
            success: function(response) {
                // alert("Golongan harus dipilih");
                // console.log("Data Yang di dapatkan");
                console.log(response.data);
                $('.ambilkhs').html(response);

            }
        });
    }

    function cetak(){
        var a = $('.semesterkhs').val();
       location.href = "<?= site_url('C_Laporan/lapkhsmahasiswa/') ?>" +a;

    }

    function cetakexell(){
        var a = $('.semesterkhs').val();
       location.href = "<?= site_url('C_Laporan/lapkhsmahasiswaexell/') ?>" +a;

    }


</script>



<?= $this->endSection(); ?>