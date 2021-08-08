

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
                            $$jam = date ("H");
                            if (($$jam>=6) && ($$jam<=11)){
                            echo " Selamat Pagi ";
                            }
                            else if(($$jam>11) && ($$jam<=15))
                            {
                            echo " Selamat Siang";}
                            else if (($$jam>15) && ($$jam<=18)){
                            echo ", Selamat Sore";}
                            else { echo " Selamat Malam ";}
                            ?> 
                    Pengunjung, Anda Berada dalam Sisfo Akademik Akper Nabila.........
                    </b></font></marquee>
                     <!-- Divider -->
                     <hr class="sidebar-divider my-10" color = "blue">

                     <div class="row">
                    
                    <?php if( in_groups('Admin')) : ?>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            </div>
                                            <a class="nav-link h5 mb-0 font-weight-bold text-danger" href="<?= site_url('C_Home/menuadmin') ?>">
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
                                        <a class="nav-link h5 mb-0 font-weight-bold text-warning" href="<?= site_url('C_Data_Kampus/datakampusadmin') ?>">
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
                                            <a class="nav-link h5 mb-0 font-weight-bold text-success" href="<?= site_url('mahasiswa/tampildata') ?>">
                                            <div class="h6 mb-0 font-weight-bold text-success">Data Mahasiswa</div>
                                            </a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
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
                                            <a class="nav-link h5 mb-0 font-weight-bold text-info" href="<?= site_url('master_dosen') ?>">
                                            <div class="h6 mb-0 font-weight-bold text-primary">Data Dosen</div>
                                            </a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
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
                                        
                                        
                                        <a class="nav-link h5 mb-0 font-weight-bold text-primary" href="<?= site_url('master_tendik') ?>">
                                            <div class="h6 mb-0 font-weight-bold text-primary">Data Tendik</div>
                                            </a>

                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Earnings (Annual) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        </div>
                                        <a class="nav-link h5 mb-0 font-weight-bold text-danger" href="<?= site_url('C_Matkul/tampilprodi') ?>">
                                            <div class="h6 mb-0 font-weight-bold text-danger">Matakuliah</div>
                                            </a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-bezier-curve fa-2x text-gray-300"></i>
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
                                        <a class="nav-link h5 mb-0 font-weight-bold text-warning" href="<?= site_url('Semester_A') ?>">
                                            <div class="h6 mb-0 font-weight-bold text-warning">Tahun Akademik</div>
                                            </a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-list-ol fa-2x text-gray-300"></i>
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
                                            <a class="nav-link h5 mb-0 font-weight-bold text-dark" href="<?= site_url('Master_Tendik/profile') ?>">
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



