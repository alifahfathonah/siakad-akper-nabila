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
                            </a>Laporan
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
                                        <a href="<?= site_url('C_Home/menuadmin') ?>">
                                            <input type="hidden" name="kodejadwal" id="kodejadwal">


                                            </input>
                                        </a>

                                </div>

                                <div class="card-body">

                                    <form method="POST" action="<?php echo site_url('C_laporan/lapseluruhmatakuliah') ?>">
                                        <table>
                                            <tr>
                                                <div class="col-md">
                                                    <div class="card card-solid">
                                                        <div class="card-header bg-secondary">
                                                            <h5 class="m-0 font-weight-bold text-white">Laporan Seluruh Matakuliah</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">

                                                                <div class="row">

                                                                    <div class="col-sm-12">
                                                                        <center>
                                                                            <br>
                                                                            <br>
                                                                            <label>Tekan Tombol Cetak </label>
                                                                        </center>


                                                                        <input type="hidden" name="" id="">




                                                                        </input>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="col-s">
                                                                <button type="submit" class="btn btn-block btn-info"><i class="fa fa-print"></i> Cetak</button>
                                                            </div>

                                                            <br>
                                                            <div class="col-s">
                                                                <button type="button" class="btn btn-block btn-sm btn-success" onclick="cetakexell1()">
                                                                    <i class="fas fa-print"></i>
                                                                    Export Exell
                                                                </button>

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

            <div class="col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-2">
                        <section class="content">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">


                                </div>

                                <div class="card-body">

                                    <form method="POST" action="<?php echo site_url('C_laporan/lapsemestermatakuliah') ?>">
                                        <table>
                                            <tr>
                                                <div class="col-md">
                                                    <div class="card card-solid">
                                                        <div class="card-header bg-secondary">
                                                            <h5 class="m-0 font-weight-bold text-white">Laporan Matakuliah Per Semester</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">

                                                                <div class="row">

                                                                    <div class="col-sm-12">
                                                                        <label>Pilih Semester</label>
                                                                        <select name="semester" class="form-control">
                                                                            <option disabled selected>Semester Cetak</option>

                                                                            echo "<option value='Semester 1'>Semester 1</option>"
                                                                            echo "<option value='Semester 2'>Semester 2</option>"
                                                                            echo "<option value='Semester 3'>Semester 3</option>"
                                                                            echo "<option value='Semester 4'>Semester 4</option>"
                                                                            echo "<option value='Semester 5'>Semester 5</option>"
                                                                            echo "<option value='Semester 6'>Semester 6</option>"



                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="col-s">
                                                                <button type="submit" class="btn btn-block btn-info"><i class="fa fa-print"></i> Cetak</button>
                                                            </div>
                                                            <br>
                                                            <div class="col-s">
                                                                <button type="button" class="btn btn-block btn-sm btn-success" onclick="cetakexell1()">
                                                                    <i class="fas fa-print"></i>
                                                                    Export Exell
                                                                </button>

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