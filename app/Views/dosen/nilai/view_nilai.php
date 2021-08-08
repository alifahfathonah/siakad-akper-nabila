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
                            </a>Manajemen Data Nilai Mahasiswa
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
                                        <a href="<?= site_url('C_Home/menudosen') ?>">
                                            <button type="button" class="btn btn-sm btn-warning">
                                                <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali
                                            </button>
                                        </a>
                                </div>
                                <div class="card-body">
                                    <table class="table table-sm table-striped table-bordered">
                                        <thead align="center">
                                            <tr class="label-success">
                                                <th>
                                                    <font color="#000000" text-align="left">No
                                                </th>
                                                <th>
                                                    <font color="#000000">Kode Matakuliah
                                                </th>
                                                <th>
                                                    <font color="#000000">Matakuliah
                                                </th>
                                                <th>
                                                    <font color="#000000">Semester
                                                </th>
                                                <th collspan="3">
                                                    <font color="#000000">Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($matakuliah as $row) : $no++ ?>
                                                <tr align="center">
                                                    <td> <?= $no; ?> </td>
                                                    <td> <?= $row['kodematkulkrs']; ?> </td>
                                                    <td> <?= $row['namamatkul']; ?> </td>
                                                    <td> <?= $row['smt']; ?> </td>
                                                    <td>
                                                        <a href="/index.php/C_Nilai/tampilmahasiswa/<?= $row['kodematkulkrs']; ?>">
                                                            <button type="button" class="btn btn-info btn-sm btn-lihat">
                                                                <i class="fa fa-eye"></i>
                                                                Mahasiswa
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>