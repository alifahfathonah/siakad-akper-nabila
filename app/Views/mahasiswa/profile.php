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
                                </a>Detail Data Mahasiswa</h5>
                                </div>
                            
                            </div>
                        </div>

                        
                         <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-2">

                              
                                    <section class="content">
                                    <a href="<?= site_url('C_Home/menumahasiswa') ?>">
                                            <button type="button" class="btn btn-sm btn-warning mb-3" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button></a>


                                  
                                    <div class="card">
                                        

                                        <div class="card-body">

                                        <table class="table table hover table-striped table-bordered" id="masterdosen">
                                                           
                                                            <tbody>
                                                              
                                                                
                                                                <img src="<?= base_url()  ?>/img/" style="width: 10%" class="mb-4">
                                                               
                                                                
                                                                <tr>
                                                                    <td width = "450px">Nomor Induk Mahasiswa / NIM</td>
                                                                    <td> <?= $mahasiswa->nim ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nama</td>
                                                                    <td> <?= $mahasiswa->nama ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tempat Lahir</td>
                                                                    <td> <?= $mahasiswa->tmplahir ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Lahir</td>
                                                                    <td> <?= $mahasiswa->tgllahir ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jenis Kelamin</td>
                                                                    <td> <?= $mahasiswa->jenkel ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Program Studi</td>
                                                                    <td> <?= $mahasiswa->prodi ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nohp</td>
                                                                    <td> <?= $mahasiswa->nohp ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email Aktif</td>
                                                                    <td> <?= $mahasiswa->email ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status</td>

                                                                    <td> 
                                                                    <button type="button" class="btn btn-sm btn-success" >
                                                                    <?= $mahasiswa->status ?> 
                                                                    </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat</td>
                                                                    <td> <?= $mahasiswa->alamat ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tahun Masuk</td>
                                                                    <td> <?= $mahasiswa->thnmasuk ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nomor Induk kependidikan </td>
                                                                    <td> <?= $mahasiswa->nik ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pembimbing Akademik </td>
                                                                    <td> <?= $mahasiswa->pemakademik ?> </td>
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



