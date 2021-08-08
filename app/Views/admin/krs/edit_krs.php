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
                                </a>Edit Data Jadwal KRS</h5>
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

                                            
                                          

                                           
                                         

                                        <div class="card-tools">
                                            
                                        </div>
                                        </div>
         
    
        
<script>
    
    function pilihmatkul(){
        var a=$('.kodematkul').val();
	          $.ajax({
                    url: '<?= site_url('C_Krs/tampilmatkul')  ?>',
                    type: "post",
                    data: {
                        kodematkul: a
                    },
                    dataType:'json',
                    cache: false,
                    success: function(response) {
                    	// alert("Golongan harus dipilih");
                        // console.log("Data Yang di dapatkan");
                        console.log(response);
                    	$('#namamatkul').val(response.namamatkul);
                    	$('#totalsks').val(response.totalsks);
                    }
                });
            }
</script>
      

        <form method="POST" action="<?= site_url('C_Krs/updatedata/'. $prodi->semester.'/' ) ?>">

                <div class="card-body">
                   

                <div class="col-md-6">
				      			
				      			<label>Kode Matakuliah</label>
                                   <select name="kodematkul" class="form-control kodematkul" onchange="pilihmatkul()"> 
                                        <option value="">- Pilih -</option>

                                            <?php foreach ($matakuliah as $row): ?>
                                        
                                                <option value="<?= $row['kodematkul'];?>"><?= $row['kodematkul'];?> - <?= $row['namamatkul'];?></option>
    
                                            <?php endforeach; ?>
                                    </select>
                                
				      		</div>

                      

                              <div class="col-md-6">
				      			
				      			<label>Matakuliah</label>
				      			<input type="text" class="form-control" name="namamatkul" id="namamatkul" placeholder=""   readonly >

				      		</div>

				      		<div class="col-md-6">
				      			
				      			<label>Total SKS</label>
				      			<input type="text" class="form-control" id="totalsks"  name="totalsks" readonly>

				      		</div>

				      		<div class="col-md-5">
				      			
				      			<label>Dosen Pengajar</label>
				      			<select name="dosen" class="form-control">
                                        <option value="">- Pilih -</option>

                                            <?php foreach ($masterdosen as $row): ?>
                                        
                                                <option value="<?= $row['nidn'];?>"><?= $row['namadosen'];?></option>
    
                                            <?php endforeach; ?>
                                    </select>

				      		</div>

                              <div class="col-md-5">
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
                   

                       <div class="col-md-5">
				      			
				      			<label>Jam</label>
				      			<input type="text" id="jam"  name="jam"  class="form-control"   >
                                
				      	</div>

                          <div class="col-md-5">
				      			
				      			<label>Ruangan / Lokal</label>
				      			<input type="text" class="form-control " id="lokal"  name="lokal"  >

				      	</div>
                          <br>

                          <div class="col-md-5">

                                <button type="submit" class="btn btn-sm btn-success" place-item="right">
                                <i class="fas fa-save"></i>
                                    Simpan Perubahan							
                                </button>
                          </div>
                   
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



