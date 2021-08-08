<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">  
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="alert alert-success" role="alert">

                                <h5 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-users"></i>
                                </a>Tambah Data Dosen</h5>
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

                                            
                                            <a href="<?= site_url('Master_Dosen/index') ?>">
                                            <button type="button" class="btn btn-sm btn-warning" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button></a>

                                           
                                         

                                        <div class="card-tools">
                                            
                                        </div>
                                        </div>
         
    
        

        <div class="card-body">

        <form method="POST" action="<?= site_url('Master_Dosen/save') ?>">

                <div class="card-body">
                   

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                            <label>NOMOR INDUK DOSEN NASIONAL / NIDN</label>
                                <input type="text" id="nidn" name="nidn" class="form-control" placeholder="999999xxxx">
                            </div>
                            <div class="col-sm-6">
                            <label>PENDIDIKAN</label>
                            <select name="pendidikandosen" class="form-control pendidikandosen">
                                        <option value="">- Pilih -</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                           </div>
                        </div>
                    </div>

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                            <label>NAMA LENGKAP</label>
                                <input type="text" id="namadosen" name="namadosen" class="form-control" placeholder="Firdaus">
                            </div>
                            <div class="col-sm-6">
                            <label>STATUS</label>
                            <select name="statusdosen" class="form-control statusdosen">
                                        <option value="">- Pilih -</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                       
                       <div class="row">
                           <div class="col-sm-6">
                           <label>NOMOR INDUK PEGAWAI / NIP</label>
                               <input type="text" id="nipdosen" name="nipdosen" class="form-control" placeholder="1010182203">
                           </div>
                           <div class="col-sm-6">
                           <label>NO HANDPHONE</label>
                               <input type="text" id="nohpdosen" name="nohpdosen" class="form-control" placeholder="082389xxxxxx">
                           </div>
                       </div>
                   </div>

                    <div class="form-group">
                        <label>GELAR</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" id="gelardosen" name="gelardosen" class="form-control" placeholder="S.Kom, M.Kom, PhD">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>JABATAN AKADEMIK</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" id="jabatanakademikdosen" name="jabatanakademikdosen" class="form-control" placeholder="Lektor Kepala">
                            </div>
                        </div>
                    </div>
                    <br>
                    

                   

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



