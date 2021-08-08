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

                                    <form method="POST" action="<?php echo site_url('C_laporan/laporanmahasiswaperiode') ?>">
                                        <table>
                                            <tr>
                                                <div class="col-md">
                                                    <div class="card card-solid">
                                                        <div class="card-header bg-secondary">
                                                            <h5 class="m-0 font-weight-bold text-white">Laporan Mahasiswa Periode</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">

                                                                <div class="row">

                                                                    <div class="col-sm-12">
                                                                        <label>Tahun / Periode</label>
                                                                        <select name="thnmasuk" class="form-control thnmasuk">
                                                                            <option disabled selected>Periode Cetak</option>

                                                                            <?php
                                                                            $now = date('Y');
                                                                            for ($a = 2017; $a <= $now; $a++) {
                                                                                echo "<option value='$a'>$a</option>";
                                                                            } ?>
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

            <div class="col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-2">
                        <section class="content">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">


                                </div>

                                <div class="card-body">

                                    <form method="POST" action="<?php echo site_url('C_laporan/laporanmahasiswa') ?>">
                                        <table>
                                            <tr>
                                                <div class="col-md">
                                                    <div class="card card-solid">
                                                        <div class="card-header bg-secondary">
                                                            <h5 class="m-0 font-weight-bold text-white">Laporan Mahasiswa Periode / Status</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">

                                                                <div class="row">

                                                                    <div class="col-sm-6">
                                                                        <label>Tahun / Periode</label>
                                                                        <select name="thnmasuk1" class="form-control thnmasuk1">
                                                                            <option disabled selected>Periode Cetak</option>

                                                                            <?php
                                                                            $now = date('Y');
                                                                            for ($a = 2017; $a <= $now; $a++) {
                                                                                echo "<option value='$a'>$a</option>";
                                                                            } ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label>Status Mahasiswa</label>
                                                                        <select name="status" class="form-control status">
                                                                            <option disabled selected>Status Cetak</option>

                                                                            echo "<option value='Aktif'>Aktif</option>"
                                                                            echo "<option value='Tidak Aktif'>Tidak Aktif</option>"

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
                                                                <button type="button" class="btn btn-block btn-sm btn-success" onclick="cetakexell2()">
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




<script>
    function cetakexell1() {
        var a = $('.thnmasuk').val();
        location.href = "<?= site_url('C_Laporan/laporanmahasiswaperiodeexell/') ?>" + a;

    }

    function cetakexell2() {
        var a = $('.thnmasuk1').val();
        var b = $('.status').val();
        location.href = "<?= site_url('C_Laporan/laporanmahasiswastatusexell/') ?>" + a + '/' + b;

    }
</script>






<?= $this->endSection() ?>