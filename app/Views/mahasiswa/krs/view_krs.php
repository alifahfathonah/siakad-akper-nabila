<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="alert alert-success" role="alert">

                                <h5 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-chart-bar"></i>
                                </a>KARTU RENCANA STUDI </h5>
                                </div>
                            
                            </div>
                        </div>

                         <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-2">

                              
                                    <section class="content">
                                    <a href="<?= site_url('C_Matkul/tampilprodi') ?>">
                                            <button type="button" class="btn btn-sm btn-warning mb-3" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button></a>
                                  
                                    
                                        <!-- /.card-body -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        

  

<?= $this->endSection(); ?>



