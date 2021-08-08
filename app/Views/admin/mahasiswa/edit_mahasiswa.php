<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">  
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class=" mb-4">
                                <div class="alert alert-success" role="alert">

                                <h5 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-user-graduate"></i>
                                </a>Edit Data Mahasiswa</h5>
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

                                            
                                            <a href="<?= site_url('Mahasiswa/tampildata') ?>">
                                            <button type="button" class="btn btn-sm btn-warning" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button></a>

                                           
                                         

                                        <div class="card-tools">
                                            
                                        </div>
                                        </div>
         
    
        

        <div class="card-body">

        <form method="POST" action="<?= site_url('Mahasiswa/update') ?>">

        <div class="card-body">
                   

        <div class="form-group">
                       
                       <div class="row">
                           <div class="col-sm-6">
                           
                           <label>NOMOR INDUK MAHASISWA / NIM</label>
                               <input type="text" id="nim" name="nim" class="form-control" required value="<?= $mahasiswa->nim ?>" readonly>
                           </div>
                           <div class="col-sm-6">
                           <label>PROGRAM STUDI</label>
                               <input type="text" id="programstudi" name="programstudi" class="form-control" required value="<?= $mahasiswa->prodi ?>" readonly>
                          </div>
                       </div>
                   </div>

                   <div class="form-group">
                      
                       <div class="row">
                           <div class="col-sm-6">
                           <label>NAMA LENGKAP</label>
                               <input type="text" id="nama" name="nama" class="form-control" required value="<?= $mahasiswa->nama ?>">
                           </div>
                           <div class="col-sm-6">
                           <label>TAHUN MASUK</label>
                               <input type="text" id="thnmasuk" name="thnmasuk" class="form-control" required value="<?= $mahasiswa->thnmasuk ?>">
                           </div>
                       </div>
                   </div>

                   

                   <div class="form-group">
                      
                      <div class="row">
                          <div class="col-sm-6">
                          <label>TEMPAT LAHIR</label>
                              <input type="text" id="tmplahir" name="tmplahir" class="form-control" required value="<?= $mahasiswa->tmplahir ?>"> 
                              
                          </div>
                          <div class="col-sm-6">
                          <label>STATUS</label>
                           <select name="status" class="form-control status" required value="<?= $mahasiswa->status ?>">
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
                          <label>TANGGAL LAHIR</label>
                          <input type="date" id="tgllahir" name="tgllahir" class="form-control" required value="<?= $mahasiswa->tgllahir ?>">
                              
                          </div>
                          <div class="col-sm-6">
                          <label>DOSEN PEMBIMBING AKADEMIK</label>
                          <select name="pemakademik" class="form-control">
                               <option value="">- Pilih -</option>

                               <?php foreach ($masterdosen as $row): ?>
                                       
                                       <option value="<?= $row['namadosen'];?>" required value="<?= $mahasiswa->pemakademik ?>"><?= $row['namadosen'];?></option>
   
                                       <?php endforeach; ?>
                           </select>
                          </div>
                      </div>
                  </div>

                   <div class="form-group">
                      
                       <div class="row">
                           <div class="col-sm-6">
                           <label>JENIS KELAMIN</label>
                           <select name="jenkel" class="form-control jenkel">
                                     
                                       <option value="" required value="<?= $mahasiswa->jenkel ?>">- Pilih -</option>
                                       <option value="Laki-laki">Laki - Laki</option>
                                       <option value="Perempuan">Perempuan</option>
                                   </select>
                           </div>
                       </div>
                   </div>

                   <div class="form-group">
                       <label>ALAMAT</label>
                       <div class="row">
                           <div class="col-sm-6">
                               <textarea id="alamat" name="alamat" class="form-control" required value=""> <?= $mahasiswa->alamat ?> </textarea> 
                           </div>
                       </div>
                   </div>

                   <div class="form-group">
                       <label>NOMOR HANDPHONE</label>
                       <div class="row">
                           <div class="col-sm-6">
                               <input type="text" id="nohp" name="nohp" class="form-control" required value="<?= $mahasiswa->nohp ?>">
                           </div>
                       </div>
                   </div>

                   <div class="form-group">
                       <label>EMAIL AKTIF</label>
                       <div class="row">
                           <div class="col-sm-6">
                               <input type="text" id="email" name="email" class="form-control" required value="<?= $mahasiswa->email ?>">
                           </div>
                       </div>
                   </div>

                   <div class="form-group">
                       <label>NOMOR INDUK KEPENDIDIKAN / NIK</label>
                       <div class="row">
                           <div class="col-sm-6">
                               <input type="text" id="nik" name="nik" class="form-control" required value="<?= $mahasiswa->nik ?>">
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



