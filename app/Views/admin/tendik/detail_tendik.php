<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">


           

              
                <div class="container-fluid">

                
                        

                   
                    <div class="row">

                     
                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="alert alert-success" role="alert">

                                
                                
                                <h5 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-eye"></i>
                                </a>Detail Data Tendik</h5>
                                </div>
                            
                            </div>
                        </div>

                        
                         <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-2">

                              
                                    <section class="content">
                                    <a href="<?= site_url('Master_Tendik') ?>">
                                            <button type="button" class="btn btn-sm btn-warning mb-3" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button></a>


                                  
                                    <div class="card">
                                        

                                        <div class="card-body">

                                        <table class="table table hover table-striped table-bordered" id="mastertendik">
                                                           
                                                            <tbody>
                                                              
                                                                
                                                                <img src="<?= base_url()  ?>/img/" style="width: 10%" class="mb-4">
                                                               
                                                                
                                                                <tr>
                                                                    <td>NITK</td>
                                                                    <td> <?= $mastertendik->nitk ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nama</td>
                                                                    <td> <?= $mastertendik->namatendik ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>NIP</td>
                                                                    <td> <?= $mastertendik->niptendik ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nohp</td>
                                                                    <td> <?= $mastertendik->nohptendik ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pendidikan</td>
                                                                    <td> <?= $mastertendik->pendidikantendik ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jabatan Akademik</td>
                                                                    <td> <?= $mastertendik->jabatantendik ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status</td>

                                                                    <td> 
                                                                    <button type="button" class="btn btn-sm btn-success" >
                                                                    <?= $mastertendik->statustendik ?> 
                                                                    </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                          
                                                        </table>
                                                        
                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                
                               
                                </div>
                            
                            </div>
                        </div>
                     
                        

            


               


                    </div>

                </div>
            
            </div>
        
    
    
  

    

<?= $this->endSection(); ?>



