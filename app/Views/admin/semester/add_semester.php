<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">  
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="alert alert-success" role="alert">

                                <h5 class="m-0 font-weight-bold text-primary">
                                <i class="fab fa-alipay"></i>
                                </a>Tambah Data Semester</h5>
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

                                            
                                            <a href="<?= site_url('Semester_A/index') ?>">
                                            <button type="button" class="btn btn-sm btn-warning" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button></a>

                                           
                                         

                                        <div class="card-tools">
                                            
                                        </div>
                                        </div>
         
    
        

      

        <form method="POST" action="<?= site_url('Semester_A/save') ?>">

                <div class="card-body">
                   

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                            <label>Tahun Akademik</label>
                                <input type="text" id="semestertahun" name="semestertahun" class="form-control " placeholder="20191">
                            </div>
                           
                        </div>
                    </div>

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                                    <label>Semester</label>
                                    <select name="semester" class="form-control semester">
                                        <option value="">- Pilih -</option>
                                        <option value="Ganjil">Ganjil</option>
                                        <option value="Genap">Genap</option>
                                    </select>
                            </div>  
                        </div>
                    </div>

                    <div class="form-group">
                       
                       <div class="row">
                           <div class="col-sm-6">
                                   <label>Status</label>
                                   <select name="status" class="form-control status">
                                       <option value="">- Pilih -</option>
                                       <option value="Aktif">Aktif</option>
                                       <option value="Tidak Aktif">Tidak Aktif</option>
                                   </select>
                           </div>  
                       </div>
                   </div>


                    <button type="reset" class="btn btn-sm btn-secondary" place-item="right">
                    <i class="fas fa-window-close"></i>
                        Batal							
                    </button>
                   
                    <button type="submit" class="btn btn-sm btn-success" place-item="right">
                    <i class="fas fa-save"></i>
                        Simpan							
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



