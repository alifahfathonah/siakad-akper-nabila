<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class=" mb-4">
                    <div class="alert alert-success" role="alert">



                        <h5 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-flag-checkered"></i>
                            </a>Cetak Transkrip Nilai
                        </h5>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-2">
                        <section class="content">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">


                                </div>

                                <div class="card-body">

                                    <form method="POST" action="<?php echo site_url('C_Transkrip/tampiltranskrip') ?>">
                                        <table>
                                            <tr>
                                                <div class="col-md">
                                                    <div class="card card-solid">
                                                        <div class="card-header bg-secondary">
                                                            <h5 class="m-0 font-weight-bold text-white">Cetak Transkrip Nilai</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">

                                                                <div class="row">

                                                                <div class="col-sm-12">
                                                                        <label>Nomor Induk Mahasiswa</label>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <input type="text" id="nim" name="nim" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <label>Judul Laporan Tugas Akhir</label>
                                                                    <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <input type="text" id="judulta" name="judulta" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="col-s">
                                                            <button type="submit" class="btn btn-block btn-info"><i class="fa fa-print"></i> Cetak</button>
                                                        </div>
                                                    </div>
                                                </div>
                                </div>
                                </tr>
                                </table>
                                </form>










                            </div>
                    </div>




                </div>


            </div>

        </div>









    </div>

</div>


</div>











<?= $this->endSection() ?>