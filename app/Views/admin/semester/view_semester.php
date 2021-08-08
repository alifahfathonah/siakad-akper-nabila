<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class=" mb-4">
                    <div class="alert alert-success" role="alert">

                        <h5 class="m-0 font-weight-bold text-primary">
                            <i class="fab fa-alipay"></i>
                            </a>Manajemen Data Semester
                        </h5>
                    </div>

                </div>
            </div>


            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-2">
                        <section class="content">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <a href="<?= site_url('C_Home/menuadmin') ?>">
                                            <button type="button" class="btn btn-sm btn-warning">
                                                <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali
                                            </button>
                                        </a>
                                        <a class="btn btn-sm btn-info" href="<?= site_url('Semester_A/add') ?>">
                                            <i class="fas fa-plus-circle"></i>
                                            Tambah Data
                                        </a>
                                </div>

                                <div class="card-body">

                                    <table class="table table-sm table-striped table-bordered" id="masterdosen">
                                        <thead align="center">
                                            <tr>

                                                <th>
                                                    <font color="#000000" text-align="left">No
                                                </th>
                                                <th>
                                                    <font color="#000000">Tahun Akademik
                                                </th>
                                                <th>
                                                    <font color="#000000">Semester
                                                </th>
                                                <th>
                                                    <font color="#000000">Status
                                                </th>
                                                <th>
                                                    <font color="#000000">Kontrol Status
                                                </th>
                                                <th collspan="3">
                                                    <font color="#000000">Aksi
                                                </th>

                                            </tr>

                                        </thead>

                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($semester as $row) : $no++ ?>
                                                <tr align="center">
                                                    <td> <?= $no; ?> </td>
                                                    <td> <?= $row['semestertahun']; ?> </td>
                                                    <td> <?= $row['semester']==0?'Genap':'Ganjil'; ?> </td>
                                                    <td> <?= $row['status']; ?> </td>
                                                    <td>
                                                        <button type="button" class="btn <?= $row['status']=='Aktif'?'btn-success':'btn-secondary'; ?>  btn-sm" onclick="gantistatus('<?= $row['idsemesterakad']; ?>')"> <?= $row['status']=='Aktif'?'Aktif':'Nonaktif'; ?> </button>
                                                        <!-- <button type="button" class="btn btn-secondary btn-sm" onclick="gantistatus('<?= $row['semestertahun']; ?>')"> Nonaktif </button> -->
                                                    </td>
                                                    <td>

                                                        <a href="" data-target="#edittahunakademik" data-toggle="modal" onclick="edit('<?= $row['semestertahun']; ?>','<?= $row['semester']; ?>','<?= $row['status']; ?>')">

                                                            <button type="button" class="btn btn-primary btn-circle btn-sm btn-edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </a>

                                                        <a href="javascript:void(0)" onclick="hapus('<?= $row['semestertahun'] ?>')">
                                                            <button type="button" class="btn btn-danger btn-circle btn-sm btn-delete" data-id="<?= $row['semestertahun']; ?>">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>

                                    </table>
                                    <script>
                                        function hapus(id) {
                                            $('#semestertahun').val(id);
                                            $('#hapussemester').modal('show');
                                        }

                                        function edit(semestertahun, semester, status) {

                                            $('.tahunakademikedit').val(semestertahun);
                                            $('.semesteredit').val(semester);
                                            $('.statusedit').val(status);


                                        }
                                    </script>

                                    <div class="modal fade" id="hapussemester" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="<?php echo site_url('Semester_A/delete') ?>">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="semestertahun" id="semestertahun">
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


                                    <form action="<?= site_url('Semester_A/update') ?>" method="POST">

                                        <div class="modal fade" id="edittahunakademik" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="container-fluid">
                                                <div class="col-lg-12">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Tahun Akademik</h5>
                                                                <button type="button" class="btn-close btn-close-green" data-dismiss="modal" aria-label="">X</button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="modal-body">

                                                                    <div class="col-md-12">

                                                                        <label>Tahun Akademik</label>
                                                                        <input type="text" class="form-control tahunakademikedit" name="tahunakademikedit" id="tahunakademikedit" placeholder="" readonly>

                                                                    </div>

                                                                    <div class="col-md-5">
                                                                        <label>Semester </label>
                                                                        <select name="semesteredit" class="form-control semesteredit">
                                                                            <option value="">- Pilih -</option>
                                                                            <option value="Ganjil">Ganjil</option>
                                                                            <option value="Genap">Genap</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-5">
                                                                        <label>Status </label>
                                                                        <select name="statusedit" class="form-control statusedit">
                                                                            <option value="">- Pilih -</option>
                                                                            <option value="Aktif">Aktif</option>
                                                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                                                        </select>
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





                                </div>
                            </div>

                    </div>


                </div>

            </div>

        </div>

    </div>


</div>

<script>
    function gantistatus(semestertahun) {


        location.href = "<?= site_url('Semester_A/gantistatus/') ?>" + semestertahun;

    }
</script>


<?= $this->endSection(); ?>