    <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Menu Admin -->

            <?php if( in_groups('Admin')) : ?>

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rounded-circle">
                    <img src="<?= base_url(); ?>/img/logonb.jpeg ">
                </div>
                <div class="sidebar-brand-text mx-3"> <sup>Administrator</sup></div>
            
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

                   <!-- Heading -->
                   <div class="sidebar-heading">
                Menu Administrator
            </div>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

             <!-- Nav Item - Home -->
             <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Home/menuadmin') ?>">
                <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>


             <!-- Nav Item - Mahasiswa -->
             <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Data_Kampus/datakampusadmin') ?>">
                <i class="fas fa-university"></i>
                    <span>Identitas Kampus</span></a>
            </li>


            <!-- Nav Item - Mahasiswa -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('mahasiswa/tampildata') ?>">
                <i class="fas fa-user-graduate"></i>
                    <span>Data Mahasiswa</span></a>
            </li>

            <!-- Nav Item - Dosen -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('master_dosen') ?>">
                <i class="fas fa-users"></i>
                    <span>Data Dosen</span></a>
            </li>

            <!-- Nav Item - Tendik -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('master_tendik') ?>">
                <i class="fas fa-user-tie"></i>
                    <span>Data Tendik</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
            Menu Akademik
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

        

            <!-- Nav Item - Pages Collapse Menu Akademik -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-stream"></i>
                    <span>Akademik</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('C_Matkul/tampilprodi') ?>">Matakuliah</a>
                        <a class="collapse-item" href="<?= site_url('Semester_A') ?>">Semester / Thn Akademik</a>
                      
                        <a class="collapse-item" href="<?= site_url('C_Krs/tampilkrs') ?>">KRS</a>
                        
                        <a class="collapse-item" href="<?= site_url('C_Transkrip/tampil') ?>">Transkrip Nilai</a>
                        <!-- <a class="collapse-item" href="<?= site_url('C_Transkrip/tampilrekap') ?>">Rekap IPK</a> -->
                    

                    </div>
                </div>
            </li>

             <!-- Nav Item - Pages Collapse Menu Akademik -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-flag-checkered"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('C_Laporan/lapmahasiswa') ?>">Lap. Mahasiswa</a>
                        <a class="collapse-item" href="<?= site_url('C_Laporan/laporandosen') ?>">Lap. Dosen</a>
                        <a class="collapse-item" href="<?= site_url('C_Laporan/laporantendik') ?>">Lap.Tendik</a>
                        <a class="collapse-item" href="<?= site_url('C_Laporan/lapmatakuliah') ?>">Lap. Matakuliah</a>
                        <a class="collapse-item" href="<?= site_url('C_Laporan/lapruangan') ?>">Lap. Ruangan / Kelas</a>
                        <a class="collapse-item" href="<?= site_url('C_Laporan/lapkrs') ?>">Lap. Jadwal KRS</a>
                    </div>
                </div>
            </li>

               
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
            Menu SYSTEM
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Utilities Collapse Menu Pengaturan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pengaturan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('Master_Tendik/profile') ?>">Profile</a>
                        <a class="collapse-item" href="<?= base_url('C_Pengaturan/tampiluseradmin'); ?>">Tambah User</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <?php endif; ?>


            <!-- Menu Mahasiswa -->

            <?php if( in_groups('Mahasiswa')) : ?>

                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rounded-circle">
                    <img src="<?= base_url(); ?>/img/logonb.jpeg ">
                </div>
                <div class="sidebar-brand-text mx-3"> <sup>Mahasiswa</sup></div>
                
            </a>
           

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

          

             <!-- Nav Item - Home -->
             <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Home/menumahasiswa') ?>">
                <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>

          
          

             <!-- Nav Item - Kampus -->
             <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Data_Kampus/datakampusmahasiswa') ?>">
                <i class="fas fa-university"></i>
                    <span>Identitas Kampus</span></a>
            </li>


            <!-- Nav Item - KRS -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Krs/tampilkrsmhs') ?>">
                <i class="fas fa-chart-bar"></i>
                    <span>Kartu Rencana Studi / KRS</span></a>
            </li>

            <!-- Nav Item - LHS -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Khs/tampilkhs') ?>">
                <i class="fas fa-chess"></i>
                    <span>Hasil Studi / LHS</span></a>
            </li>

            <!-- Nav Item - Tendik -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Lhs/tampillhs') ?>">
                <i class="fas fa-clipboard-check"></i>
                    <span>Histori Nilai</span></a>
            </li>

    
            <!-- Nav Item - Utilities Collapse Menu Pengaturan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pengaturan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('Mahasiswa/profile') ?>">Profile</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <?php endif; ?>


            <!-- Menu Dosen -->

            <?php if( in_groups('Dosen')) : ?>

                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rounded-circle">
                    <img src="<?= base_url(); ?>/img/logonb.jpeg ">
                </div>
                <div class="sidebar-brand-text mx-3"> <sup>Dosen</sup></div>
            
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

          
           

             <!-- Nav Item - Home -->
             <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Home/menudosen') ?>">
                <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>

             <!-- Nav Item - Mahasiswa -->
             <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Data_Kampus/datakampusdosen') ?>">
                <i class="fas fa-university"></i>
                    <span>Identitas Kampus</span></a>
            </li>

            <!-- Nav Item - Tendik -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('C_Nilai/tampilnilai') ?>">
                <i class="fas fa-sort-numeric-up-alt"></i>
                    <span>Input Nilai</span></a>
            </li>



            <!-- Nav Item - Utilities Collapse Menu Pengaturan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pengaturan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('Master_Dosen/profile') ?>">Profile</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <?php endif; ?>



           

           

        </ul>
        <!-- End of Sidebar -->