<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">  
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="alert alert-success" role="alert">

                                <h5 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-calendar-alt"></i>
                                </a>Tambah Data Jadwal</h5>
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

                                            
                                            <a href="<?= site_url('C_Jadwal/tampiljadwal') ?>">
                                            <button type="button" class="btn btn-sm btn-warning" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button></a>

                                           
                                         

                                        <div class="card-tools">
                                            
                                        </div>
                                        </div>
         
    
        

      

        <form method="POST" action="<?= site_url('C_Jadwal/save') ?>">

                <div class="card-body">
                   

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                            <label>Kode Jadwal</label>
                                <input type="text" id="kodejadwal" name="kodejadwal" class="form-control" placeholder="JD001">
                            </div>
                           
                        </div>
                    </div>

                    <div class="form-group">
                       
                       <div class="row">
                           <div class="col-sm-6">
                                   <label>Hari </label>
                                   <select name="hari" class="form-control hari">
                                       <option value="">- Pilih -</option>
                                       <option value="Senen">Senen</option>
                                       <option value="Selasa">Selasa</option>
                                       <option value="Rabu">Rabu</option>
                                       <option value="Kamis">Kamis</option>
                                       <option value="Jum'at">Jum'at</option>
                                       <option value="Sabtu">Sabtu</option>
                                       <option value="Minggu">Minggu</option>
                                   </select>
                           </div>  
                       </div>
                   </div>


                    <div class="form-group">
                       
                       <div class="row">
                           <div class="col-sm-6">
                           <label>Jam</label>
                               <input type="text" id="jam" name="jam" class="form-control" placeholder="08.30 - 09.05">
                           </div>
                          
                       </div>
                   </div>

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                            <label>Ruangan / Kelas</label>
                                <select name="idruangan" class="form-control">
                                <option value="">- Pilih -</option>

                                <?php foreach ($ruangan as $row): ?>
                                        
                                        <option value="<?= $row['idruangan'];?>"><?= $row['jenisruangan'];?></option>
    
                                        <?php endforeach; ?>
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



