<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">  
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="alert alert-success" role="alert">

                                <h5 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-user-tie"></i>
                                </a>Edit Data Tendik</h5>
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

                                            
                                            <a href="<?= site_url('Master_Tendik/index') ?>">
                                            <button type="button" class="btn btn-sm btn-warning" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button></a>

                                           
                                         

                                        <div class="card-tools">
                                            
                                        </div>
                                        </div>
         
    
        

        <div class="card-body">

        <form method="POST" action="<?= site_url('Master_Tendik/update') ?>">

                <div class="card-body">
                   

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                            <label>NOMOR INDUK TENAGA KEPENDIDIKAN / NITK</label>
                                <input type="text" id="nitk" name="nitk" class="form-control" required value="<?= $mastertendik->nitk ?>" readonly>
                            </div>
                            <div class="col-sm-6">
                            <label>JABATAN</label>
                                <input type="text" id="jabatantendik" name="jabatantendik" class="form-control" required value="<?= $mastertendik->jabatantendik ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                       
                        <div class="row">
                            <div class="col-sm-6">
                            <label>NAMA LENGKAP</label>
                                <input type="text" id="namatendik" name="namatendik" class="form-control" required value="<?= $mastertendik->namatendik ?>">
                            </div>
                            <div class="col-sm-6">
                            <label>STATUS</label>
                            <select name="statustendik" class="form-control" id="statustendik" required value="<?= $mastertendik->statustendik ?>">
                                       
                                        <option value="">- Pilih -</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>NOMOR INDUK PEGAWAI / NIP</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" id="niptendik" name="niptendik" class="form-control" required value="<?= $mastertendik->niptendik ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>NO HANDPHONE</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" id="nohptendik" name="nohptendik" class="form-control" required value="<?= $mastertendik->nohptendik ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-6">
                            <label>PENDIDIKAN</label>
                            <select name="pendidikantendik" class="form-control" id="pendidikantendik" required value="<?= $mastertendik->pendidikantendik ?>">
                                        <option value="">- Pilih -</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <br>

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



