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
                                </a>Detail Matakuliah </h5>
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
                                  
                                    <div class="card">
                                        <div class="card-body">
                                        <table class="table table hover table-striped table-bordered" id="mastertendik">
                                                           
                                                            <tbody>

                                                                  <tr>
                                                                    <th width = "250px">SEMESTER</th>
                                                                    
                                                                    <td> : <?= $prodi->semester ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>PROGRAM STUDI</th>
                                                                    
                                                                    <td> : <?= $prodi->namaprodi ?> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>JENJANG</th>
                                                                    
                                                                    <td> : <?= $prodi->jenjang ?> </td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                          
                                                        </table>
                                                        
                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class ="box box-primary box-solid">
                            <div class="card shadow mb-4">
                                <div class="card-header py-2">  
                                
                                <section class="content">

                                <a class="btn btn-sm btn-primary" data-target="#addmodalmatkul" data-toggle="modal">
                                            <i class="fas fa-plus-circle"></i>
                                                Tambah Data
                                        </a>

                                        <a class="btn btn-sm btn-success" href="<?= site_url('C_Laporan/lapsemestermatakuliah') ?>">
                                        <i class="fas fa-print"></i>
                                                Export Exell
                                        </a>
            
                                        <div class="card-body">
                                        <table class="table table-sm table-striped table-bordered" id="matakuliah">
                                                            <thead align="center">
                                                                <tr>
                                                                    
                                                                <th><font  color="#000000">No </th>
                                                                <th><font  color="#000000">Kode Matakuliah </th>
                                                                <th><font  color="#000000">Matakuliah  </th>
                                                                <th><font  color="#000000">SKS Teori </th>
                                                                <th><font  color="#000000">SKS Praktek </th>
                                                                <th><font  color="#000000">SKS Lapangan </th>
                                                                <th><font  color="#000000">Total SKS </th>
                                                                <th collspan="3"><font  color="#000000">Aksi </th>

                                                                </tr>
                                                                
                                                            </thead>

                                                            <tbody>
                                                                <?php $no=0; foreach ($matakuliah as $row ) : $no++ ?> 
                                                                <tr align="center">
                                                                    <td> <?= $no; ?> </td>
                                                                    <td> <?= $row['kodematkul']; ?> </td>
                                                                    <td> <?= $row['namamatkul']; ?> </td>
                                                                    <td> <?= $row['sksteori']; ?> </td>
                                                                    <td> <?= $row['skspraktek']; ?> </td>
                                                                    <td> <?= $row['skslapangan']; ?> </td>
                                                                    <td> <?= $row['totalsks']; ?> </td>
                                                                    <td>

                                                                    <a href="javascript:void(0)" onclick="hapus('<?= $row['kodematkul'] ?>')">
                                                                        <button type="button"  class="btn btn-danger btn-circle btn-sm btn-delete"
                                                                            data-id="<?= $row['kodematkul']; ?>">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                        </a>

                                                                        </button>
                                                                        </a>
									                                </td>
                                                                </tr>
                                                            <?php endforeach ; ?>

                                                            </tbody> 
                                                            
                                                            
                                                        </table>                    
                                        </div>      
                                    </div>       
                                </div>     
                            </div>
                        </div>
                        </div>
                      
                      
<script>
    function hapus(id) {
        $('#kodematkul').val(id);
        $('#hapusmatkul').modal('show');
    }

    function skstot() {
        var skst = document.perhitungansks.sksteori.value;
        var sksp = document.perhitungansks.skspraktek.value;
        var sksl = document.perhitungansks.skslapangan.value;

        document.perhitungansks.totalsks.value = parseInt(skst) + parseInt(sksp) + parseInt(sksl) ;
    }

</script>



                    
             <!-- Modal Tambah -->
		<form action="<?= site_url('C_Matkul/save/' . $prodi->semester ) ?> " method="POST" name="perhitungansks" id="perhitungansks">
            
            <div class="modal fade" id="addmodalmatkul" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="staticBackdropLabel">Input Matakuliah</h5>
			        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        
			         <div class="modal-body">

				       
				      		<div class="col-md-12">
				      			
				      			<label>Kode Matakuliah</label>
				      			<input type="text" class="form-control" name="kodematkul" placeholder="MKS10001">

				      		</div>

                              <div class="col-md-12">
				      			
				      			<label>Matakuliah</label>
				      			<input type="text" class="form-control" name="namamatkul" placeholder="Praktek Kerja Lapangan">

				      		</div>

                              <div class="col-md-12">
				      			
				      			<label>Semester</label>
				      			<input type="text" class="form-control" name="smt" placeholder="" readonly required value="<?= $prodi->semester ?>">

				      		</div>

				      		<div class="col-md-5">
				      			
				      			<label>SKS Teori</label>
				      			<input type="text" class="form-control perhitungansks"  name="sksteori" id="sksteori" placeholder="0" >

				      		</div>

				      		<div class="col-md-5">
				      			
				      			<label>SKS Praktek</label>
				      			<input type="text" class="form-control perhitungansks" name="skspraktek" id="skspraktek" placeholder="0" >

				      		</div>

				      		<div class="col-md-5">
				      			
				      			<label>SKS Lapangan</label>
				      			<input type="text" class="form-control perhitungansks" name="skslapangan" onkeyup="skstot()"  id="skslapangan" placeholder="0" >

				      		</div>

				      		<div class="col-md-5">
				      			
				      			<label>Total SKS</label>
				      			<input type="text" class="form-control perhitungansks" name="totalsks" id="totalsks"  placeholder="0" readonly>

				      		</div>

				      </div>

			      </div>
					<div class="modal-footer">

                    <button type="submit" class="btn btn-sm btn-success" place-item="right" >
                    <i class="fas fa-save"></i>
                        Simpan							
                    </button>

                    <button type="reset" class="btn btn-sm btn-secondary" place-item="right" >
                    <i class="fas fa-window-close"></i>
                       Batal						
                    </button>

				     </div>
				    </div>
				  </div>
			    </div>
			  </div>
			</div>

			</form>

            


<div class="modal fade" id="hapusmatkul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form method="POST" action="<?php echo site_url('C_Matkul/delete/' . $prodi->semester.'/'. $row['kodematkul'] ) ?>">
                <div class="modal-body">
                    <input type="hidden" name="kodematkul" id="kodematkul">
                    Anda yakin hapus data ini <strong><span></span></strong> ?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
      
    
    
    

<?= $this->endSection(); ?>




                                                        


