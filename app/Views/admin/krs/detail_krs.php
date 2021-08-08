<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>



<div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class=" mb-4">
                    <div class="alert alert-success" role="alert">

                        <h5 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-eye"></i>
                            </a>Detail Kartu Rencana Studi
                        </h5>
                    </div>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-2">


                        <section class="content">
                            <a href="<?= site_url('C_Krs/tampilkrs') ?>">
                                <button type="button" class="btn btn-sm btn-warning mb-3">
                                    <i class="fas fa-arrow-alt-circle-left"></i>
                                    Kembali
                                </button></a>

                            <div class="card">
                                <div class="card-body">
                                    <table class="table table hover table-striped table-bordered" id="mastertendik">

                                        <tbody>

                                            <tr>
                                                <th width="250px">SEMESTER / PAKET</th>

                                                <td> : <?= $prodi->semester ?> </td>
                                            </tr>
                                            <tr>
                                                <th>PROGRAM STUDI</th>

                                                <td> : <?= $prodi->namaprodi ?> </td>
                                            </tr>
                                            <tr>
                                                <th>JENJANG</th>

                                                <td> : <?= $prodi->jenjang ?> </td>
                                            </tr>



                                        </tbody>

                                    </table>

                                </div>
                                <!-- /.card-body -->

                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="box box-primary box-solid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-2">

                            <section class="content">

                                <a class="btn btn-sm btn-primary" data-target="#addmodalmatkul" data-toggle="modal">
                                    <i class="fas fa-plus-circle"></i>
                                    Tambah Data
                                </a>


                                <div class="card-body">
                                    <table class="table table-sm table-striped table-bordered" id="matakuliah">
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
                                                    <font color="#000000">Hari
                                                </th>
                                                <th>
                                                    <font color="#000000">Jam
                                                </th>
                                                <th>
                                                    <font color="#000000">Ruangan
                                                </th>
                                                <th>
                                                    <font color="#000000">Dosen Pengajar
                                                </th>

                                                <th collspan="3">
                                                    <font color="#000000">Aksi
                                                </th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($krs as $row) : $no++ ?>
                                                <tr align="center">
                                                    <td> <?= $no; ?> </td>
                                                    <td> <?= $row['kodematkulkrs']; ?> </td>
                                                    <td> <?= $row['namamatkul']; ?> </td>
                                                    <td> <?= $row['totalsks']; ?> </td>
                                                    <td> <?= $row['hari']; ?> </td>
                                                    <td> <?= $row['jam']; ?> </td>
                                                    <td> <?= $row['ruangan']; ?> </td>
                                                    <td> <?= $row['namadosen']; ?> </td>

                                                    <td>

                                                        <a href="" data-target="#editmodalmatkul" data-toggle="modal" onclick="edit('<?= $row['kodematkulkrs']; ?>','<?= $row['nidn']; ?>','<?= $row['hari']; ?>','<?= $row['jam']; ?>','<?= $row['ruangan']; ?>')">
                                                       
                                                            <button type="button" class="btn btn-primary btn-circle btn-sm btn-edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </a>

                                                        <a href="javascript:void(0)" onclick="hapus('<?= $row['kodematkulkrs'] ?>')">
                                                            <button type="button" class="btn btn-danger btn-circle btn-sm btn-delete" data-id="<?= $row['kodematkulkrs']; ?>">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </a>


                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>



                                    </table>
                                </div>
                        </div>


                        <div class="modal fade" id="hapuskrs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <form method="POST" action="<?php echo site_url('C_Krs/delete/' . $prodi->semester . '/') ?>">
                                        <div class="modal-body">
                                            <input type="hidden" name="kodematkulkrs" id="kodematkulkrs">
                                            Anda yakin hapus data ini <strong><span></span></strong> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Tambah -->
                        <form action="<?= site_url('C_Krs/save/' . $prodi->semester) ?> " method="POST" name="perhitungansks" id="perhitungansks">

                            <div class="modal fade" id="addmodalmatkul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="container-fluid">
                                    <div class="col-lg-12">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Input Jadwal KRS</h5>
                                                    <button type="button" class="btn-close btn-close-green" data-dismiss="modal" aria-label="">X</button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="modal-body">


                                                        <div class="col-md-12">

                                                            <label>Kode Matakuliah</label>
                                                            <select name="kodematkul" class="form-control kodematkul" onchange="pilihmatkul()">
                                                                <option value="">- Pilih -</option>

                                                                <?php foreach ($matakuliah as $row) : ?>

                                                                    <option value="<?= $row['kodematkul']; ?>"><?= $row['kodematkul']; ?> - <?= $row['namamatkul']; ?></option>

                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>



                                                        <div class="col-md-12">

                                                            <label>Matakuliah</label>
                                                            <input type="text" class="form-control" name="namamatkul" id="namamatkul" placeholder="" readonly>

                                                        </div>

                                                        <div class="col-md-5">

                                                            <label>Total SKS</label>
                                                            <input type="text" class="form-control" id="totalsks" name="totalsks" readonly>

                                                        </div>

                                                        <div class="col-md-5">

                                                            <label>Dosen Pengajar</label>
                                                            <select name="dosen" class="form-control">
                                                                <option value="">- Pilih -</option>

                                                                <?php foreach ($masterdosen as $row) : ?>

                                                                    <option value="<?= $row['nidn']; ?>"><?= $row['namadosen']; ?></option>

                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>

                                                        <div class="col-md-5">
                                                            <label>Hari </label>
                                                            <select name="hari" class="form-control hari">
                                                                <option value="">- Pilih -</option>
                                                                <option value="Senen">Senen</option>
                                                                <option value="Selasa">Selasa</option>
                                                                <option value="Rabu">Rabu</option>
                                                                <option value="Kamis">Kamis</option>
                                                                <option value="Jum'at">Jum'at</option>
                                                                <option value="Sabtu">Sabtu</option>
                                                                <option value="Minggu">Minggu</option>
                                                            </select>
                                                        </div>


                                                        <div class="col-md-5">

                                                            <label>Jam</label>
                                                            <input type="text" class="form-control" id="jam" name="jam">

                                                        </div>

                                                        <div class="col-md-5">

                                                            <label>Ruangan / Lokal</label>
                                                            <input type="text" class="form-control" id="lokal" name="lokal">

                                                        </div>




                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-sm btn-success" place-item="right">
                                                                <i class="fas fa-save"></i>
                                                                Simpan
                                                            </button>

                                                            <button type="reset" class="btn btn-sm btn-secondary" place-item="right">
                                                                <i class="fas fa-window-close"></i>
                                                                Batal
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>






            </form>




            <form action="<?= site_url('C_Krs/update/' . $prodi->semester) ?> " method="POST" name="perhitungansks" id="perhitungansks">

                <div class="modal fade" id="editmodalmatkul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="container-fluid">
                        <div class="col-lg-12">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Jadwal KRS</h5>
                                        <button type="button" class="btn-close btn-close-green" data-dismiss="modal" aria-label="">X</button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="modal-body">


                                            <div class="col-md-12">

                                                <label>Kode Matakuliah</label>
                                                <select name="kodematkuledit" class="form-control kodematkuledit" onchange=" pilihmatkuledit()">
                                                    <option value="">- Pilih -</option>

                                                    <?php foreach ($matakuliah as $row) : ?>

                                                        <option value="<?= $row['kodematkul']; ?>"><?= $row['kodematkul']; ?></option>

                                                    <?php endforeach; ?>
                                                </select>

                                            </div>



                                            <div class="col-md-12">

                                                <label>Matakuliah</label>
                                                <input type="text" class="form-control " name="namamatkuledit" id="namamatkuledit" placeholder="" readonly>

                                            </div>

                                            <div class="col-md-5">

                                                <label>Total SKS</label>
                                                <input type="text" class="form-control" id="totalsksedit" name="totalsksedit" readonly>

                                            </div>

                                            <div class="col-md-5">

                                                <label>Dosen Pengajar</label>
                                                <select name="dosenedit" class="form-control dosenedit">
                                                    <option value="">- Pilih -</option>

                                                    <?php foreach ($masterdosen as $row) : ?>

                                                        <option value="<?= $row['nidn']; ?>"><?= $row['namadosen']; ?></option>

                                                    <?php endforeach; ?>
                                                </select>

                                            </div>

                                            <div class="col-md-5">
                                                <label>Hari </label>
                                                <select name="hariedit" class="form-control hariedit">
                                                    <option value="">- Pilih -</option>
                                                    <option value="Senen">Senen</option>
                                                    <option value="Selasa">Selasa</option>
                                                    <option value="Rabu">Rabu</option>
                                                    <option value="Kamis">Kamis</option>
                                                    <option value="Jum'at">Jum'at</option>
                                                    <option value="Sabtu">Sabtu</option>
                                                    <option value="Minggu">Minggu</option>
                                                </select>
                                            </div>


                                            <div class="col-md-5">

                                                <label>Jam</label>
                                                <input type="text" class="form-control jamedit" id="jamedit" name="jamedit">

                                            </div>

                                            <div class="col-md-5">

                                                <label>Ruangan / Lokal</label>
                                                <input type="text" class="form-control lokaledit" id="lokaledit" name="lokaledit">

                                            </div>




                                            <div class="modal-footer">

                                                <button type="submit" class="btn btn-sm btn-success" place-item="right">
                                                    <i class="fas fa-save"></i>
                                                    Simpan Perubahan
                                                </button>

                                               

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </form>










            <script>
                function hapus(id) {
                    $('#kodematkulkrs').val(id);
                    $('#hapuskrs').modal('show');
                }

                function edit(id,nidn,hari,jam,ruangan) {
                    $('.kodematkuledit').val(id);
                    pilihmatkuledit();
                    $('.dosenedit').val(nidn);
                    $('.hariedit').val(hari);
                    $('.jamedit').val(jam);
                    $('.lokaledit').val(ruangan);
                    
                    // $('#hapuskrs').modal('show');
                }




                function pilihmatkul() {
                    var a = $('.kodematkul').val();
                    $.ajax({
                        url: '<?= site_url('C_Krs/tampilmatkul')  ?>',
                        type: "post",
                        data: {
                            kodematkul: a
                        },
                        dataType: 'json',
                        cache: false,
                        success: function(response) {
                            // alert("Golongan harus dipilih");
                            // console.log("Data Yang di dapatkan");
                            console.log(response);
                            $('#namamatkul').val(response.namamatkul);
                            $('#totalsks').val(response.totalsks);
                        }
                    });
                }

                function pilihmatkuledit() {
                    var a = $('.kodematkuledit').val();
                    $.ajax({
                        url: '<?= site_url('C_Krs/tampilmatkul')  ?>',
                        type: "post",
                        data: {
                            kodematkul: a
                        },
                        dataType: 'json',
                        cache: false,
                        success: function(response) {
                            // alert("Golongan harus dipilih");
                            // console.log("Data Yang di dapatkan");
                            console.log(response);
                            $('#namamatkuledit').val(response.namamatkul);
                            $('#totalsksedit').val(response.totalsks);
                        }
                    });
                }

            </script>






            <!-- Modal Edit -->





        </div>
    </div>
</div>
</div>






<?= $this->endSection(); ?>