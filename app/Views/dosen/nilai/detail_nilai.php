<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class=" mb-4">
                    <div class="alert alert-success" role="alert">
                        <h5 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-sort-numeric-up-alt"></i>
                            Input Nilai Mahasiswa [Matkul: <?= $namamatkul.' ('.$kodematkul.')' ?>]
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-2">
                        <form id="form-input-nilai-mhs" method="POST" action="<?= site_url('C_Nilai/simpannilai') ?>">
                            <input type="hidden" name="semester" value="<?= $semester ?>">
                            <input type="hidden" name="kodematkul" value="<?= $kodematkul ?>">
                            <div class="content">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <a href="<?= site_url('C_Nilai/tampilnilai') ?>">
                                                <button type="button" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-arrow-alt-circle-left"></i>
                                                    Kembali
                                                </button>
                                            </a>
                                            <button id="btn-simpan" type="submit" class="btn btn-sm btn-success">
                                                    <i class="fas fa-save"></i>
                                                    Simpan
                                            </button>
                                          
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-striped table-bordered">
                                                <thead>
                                                    <tr class="label label-success">
                                                        <th rowspan="2" class="text-center">
                                                            <font color="#000000" text-align="left">No
                                                        </th>
                                                        <th rowspan="2" class="text-center">
                                                            <font color="#000000">Nim
                                                        </th>
                                                        <th rowspan="2" class="text-center">
                                                            <font color="#000000">Nama
                                                        </th>
                                                        <th colspan="3" class="text-center">
                                                            <font color="#000000">Nilai
                                                        </th>
                                                    </tr>
                                                    <tr class="label-success">
                                                        <th class="text-center">
                                                            <font color="#000000">Angka
                                                        </th>
                                                        <th class="text-center">
                                                            <font color="#000000">Huruf
                                                        </th>
                                                        <th class="text-center">
                                                            <font color="#000000">Bobot
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 0;
                                                    foreach ($results as $row) : $no++ ?>
                                                        <input type="hidden" name="nidnkrs[]" value="<?= $row['nidnkrs']; ?>">
                                                        <tr align="center">
                                                            <td> <?= $no; ?> </td>
                                                            <td> 
                                                                <input class="form-control" name="nimkrs[]" value="<?= $row['nimkrs']; ?>" readonly style="background: transparent; border: none;">
                                                             </td>
                                                            <td> 
                                                                <input class="form-control" name="nama[]" value="<?= $row['nama']; ?>" readonly  style="background: transparent; border: none;">
                                                            </td>
                                                            
                                                            <td style="width: 15%;">
                                                                <input id="<?= $row['nimkrs']; ?>" class="form-control  angka" name="angka[]" value="<?= $row['nilaiakhir'] ?? '' ?>" onkeyup="javascript: hitung(this, event);">
                                                            </td>
                                                            <td style="width: 15%;">
                                                                <input id="<?= $row['nimkrs']; ?>" class="form-control  huruf" name="huruf[]" value="<?= $row['nilaihuruf'] ?? '' ?>" readonly>
                                                            </td>
                                                            <td style="width: 15%;">
                                                                <input id="<?= $row['nimkrs']; ?>" class="form-control  bobot" name="bobot[]" value="<?= $row['bobot'] ?? '' ?>" readonly>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function hitung(obj, e) {
                                    e.preventDefault();
                                    //alert(obj.value); exit;
                                    let id = $(obj).attr('id');
                                    let angka = obj.value;
                                    let huruf = '';
                                    let bobot = '';
                                    
                                    if (angka >= 81) {
                                        huruf = "A";
                                        bobot = "4";
                                    } else if(angka >= 66) {
                                        huruf = "B";
                                        bobot = "3";
                                    } else if(angka >= 55) {
                                        huruf = "C";
                                        bobot = "2";
                                    } else if(angka >= 44) {
                                        huruf = "D";
                                        bobot = "1";
                                    } else if(angka < 44) {
                                        huruf = "E";
                                        bobot = "0";
                                    }
                                    // jika inputan kosong
                                    if(angka == '') {
                                        huruf = "";
                                        bobot = "";
                                    }
                                    
                                    $("#"+id+".huruf").val(huruf);
                                    $("#"+id+".bobot").val(bobot);
                                }
                            </script>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>