


<?= $this->extend('layout/index'); ?>


<?= $this->section('page-content'); ?>
    
    
    <div class="container-fluid">

                    <!-- Page Heading -->

                    <img src="<?= base_url(); ?>/img/akper.jpg" width="1260" height="200">
                     <!-- Divider -->

                    <hr class="sidebar-divider my-10" color = "blue">
                    <marquee bgcolor="#3498db" width="1260" height="25">
                    <font color="yellow"><b><?php
                            $tanggal= mktime(date("m"),date("d"),date("Y"));
                            echo "<b>".date("d - M - Y", $tanggal)."</b> ";
                            date_default_timezone_set('Asia/Jakarta');
                            $jam=date("H:i:s");
                            echo "| Pukul : <b>". $jam." "."</b>";
                            $a = date ("H");
                            if (($a>=6) && ($a<=11)){
                            echo " Selamat Pagi ";
                            }
                            else if(($a>11) && ($a<=15))
                            {
                            echo " Selamat Siang";}
                            else if (($a>15) && ($a<=18)){
                            echo ", Selamat Siang !!";}
                            else { echo " Selamat Malam ";}
                            ?> 
                    Pengunjung, Anda Berada dalam Sisfo Akademik Akper Nabila.........
                    </b></font></marquee>
                     <!-- Divider -->
                     <hr class="sidebar-divider my-10" color = "blue">

                    <div class="row">
                    <?php if( in_groups('Mahasiswa')) : ?>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                </div>
                                                <a class="nav-link h5 mb-0 font-weight-bold text-danger" href="<?= site_url('C_Home/menumahasiswa') ?>">
                                                <div class="h6 mb-0 font-weight-bold text-danger">Home</div>
                                                </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-home fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               </div>
                                               <a class="nav-link h5 mb-0 font-weight-bold text-warning" href="<?= site_url('C_Data_Kampus/datakampusmahasiswa') ?>">
                                                <div class="h6 mb-0 font-weight-bold text-warning">Identitas Kampus</div>
                                                </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-university fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                </div>
                                                <a class="nav-link h5 mb-0 font-weight-bold text-success" href="<?= site_url('C_Krs/tampilkrsmhs') ?>">
                                                <div class="h6 mb-0 font-weight-bold text-success">Kartu Rencana Studi</div>
                                                </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chart-bar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                </div>
                                                <a class="nav-link h5 mb-0 font-weight-bold text-info" href="<?= site_url('C_Khs/tampilkhs') ?>">
                                                <div class="h6 mb-0 font-weight-bold text-primary">Hasil Studi</div>
                                                </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chess fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                </div>
                                            
                                             
                                            <a class="nav-link h5 mb-0 font-weight-bold text-primary" href="<?= site_url('C_Lhs/tampillhs') ?>">
                                                <div class="h6 mb-0 font-weight-bold text-primary">Histori Nilai</div>
                                                </a>
    
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                </div>
                                                <a class="nav-link h5 mb-0 font-weight-bold text-dark" href="<?= site_url('Mahasiswa/profile') ?>">
                                                <div class="h6 mb-0 font-weight-bold text-dark">Profile</div>
                                                </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-wrench fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        </div>
                        
                        <?php endif; ?>

                
    </div>

<?= $this->endSection(); ?>

