<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">


           

                <!-- Begin Page Content -->
                <div class="container-fluid">

                
                        

                    <!-- Content Row -->
                    <div class="row">

                    <!-- Identitas Kampus -->
                    <div class="col-lg-1">
                            <div class="card shadow mb-3">
                            <div style="text-align: left">
                            <a href="<?= site_url('C_Home/menuadmin') ?>" class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-arrow-alt-circle-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
                            
                            </div>
                            </div>
                            
                        </div>



                        <!-- Identitas Kampus -->
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-2">
                                
                                <h5 class="m-0 font-weight-bold text-primary">
                                </a>Identitas Kampus</h5>
                                </div>
                            
                            </div>
                        </div>
                     
                        <!-- Logo -->
                        <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-2">
                                <div style="text-align: center">
                                    <h6 class="m-0 font-weight-bold text-success">Logo</h6>
                                </div>
                            </div>
                            <div class="card-body"> 
                                <div style="text-align: center">
                                    <img src="<?= base_url(); ?>/img/nabila.jpeg " width="200px" height="200px">
                                </div> 
                            </div>
                            </div>
                        </div>

                        <!-- Kampus -->
                        <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-2">
                                <div style="text-align: center">
                                    <h6 class="m-0 font-weight-bold text-success">Kampus</h6>
                                </div>
                            </div>
                            <div class="card-body"> 
                                <div style="text-align: center">
                                    <img src="<?= base_url(); ?>/img/kampus.jpg " width="400px" height="200px">
                                </div> 
                            </div>
                            </div>
                        </div>


                        <!-- Fade In Utility -->
                        <div class="col-lg-12">

                            <div class="card position-relative">
                                <div class="card-header py-2">
                                    <h6 class="m-0 font-weight-bold text-success">Visi & Misi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-6">
                                        <code>Visi :</code>
                                    </div>
                                    <div class="small mb-1">Menjadi Perguruan Tinggi yang unggul di bidang Homecare di Wilayah Sumatera Barat pada tahun 2026</div>
                                </div>

                                <div class="card-body">
                                    <div class="mb-3">
                                        <code>Misi :</code>
                                    </div>
                                    <div class="small mb-1">1.	Menyelenggarakan proses pembelajaran yang bermutu untuk menghasilkan tenaga vokasional yang kompeten di bidang Homecare di tahun 2026</div>
                                    <div class="small mb-1">2.	Meningkatkan kuantitas dan kualitas penelitian di bidang Homecare di tahun 2026</div>
                                    <div class="small mb-1">3.	Meningkatkan kepuasan Stakeholder dalam pengabdian masyarakat di bidang Homecare di tahun 2026</div>
                                    <div class="small mb-1">4.	Meningkatkan kualitas dan komitmen dosen dan tenaga kependidikan Akademi Keperawatan Nabila</div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
    
    
  

    

<?= $this->endSection(); ?>



