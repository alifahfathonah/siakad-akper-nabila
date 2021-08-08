<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">  
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="alert alert-success" role="alert">

                                <h5 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-person-booth"></i>
                                </a>Edit Data Semester</h5>
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

                                            
                                            <a href="<?= site_url('Ruangan_A/index') ?>">
                                            <button type="button" class="btn btn-sm btn-warning" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button></a>

                                           
                                         

                                        <div class="card-tools">
                                            
                                        </div>
                                        </div>
         
    
        

      

        <form method="POST" action="<?= site_url('Ruangan_A/update') ?>">

                <div class="card-body">
                   

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                            <label>Kode Ruangan</label>
                                <input type="text" id="idruangan" name="idruangan" class="form-control" placeholder="A0031" required value="<?= $ruangan->idruangan ?>" readonly>
                            </div>
                           
                        </div>
                    </div>

                    <div class="form-group">
                       
                       <div class="row">
                           <div class="col-sm-6">
                           <label>Kapasitas Ruangan</label>
                               <input type="text" id="kapasitas" name="kapasitas" class="form-control" placeholder="40" required value="<?= $ruangan->kapasitas ?>"> 
                           </div>
                          
                       </div>
                   </div>

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                                    <label>Jenis Ruangan</label>
                                    <select name="jenisruangan" class="form-control jenisruangan">
                                        <option value="">- Pilih -</option>
                                        <option value="Lokal / Kelas">Lokal / Kelas</option>
                                        <option value="Lab. Komputer">Lab. Komputer</option>
                                        <option value="Lab. Keperawatan">Lab. Keperawatan</option>
                                    </select>
                            </div>  
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success" place-item="right">
                    <i class="fas fa-save"></i>
                        Simpan Perubahan							
                    </button>

                   
            </form>

            
        </div>
        

    </div>


</div>

</div>
</div>
                     
                        

            


               


                    </div>

                </div>
             

            </div>
           
    
    
  

    

<?= $this->endSection(); ?>



