<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-lg-12">
                <div class=" mb-4">
                    <div class="alert alert-success" role="alert">

                    
                    
                    <h5 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-server"></i>
                    </a>Data Matakuliah</h5>
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
                                        <a href="<?= site_url('C_Home/menuadmin') ?>">
                                            <button type="button" class="btn btn-sm btn-warning" >
                                            <i class="fas fa-arrow-alt-circle-left"></i>
                                                Kembali								
                                            </button>
                                        </a>
                                        </div>

                                        <div class="card-body">

                                            <table class="table table-sm table-striped table-bordered">
                                                            <thead align="center">
                                                                <tr>
                                                                    
                                                                <th><font  color="#000000">No </th>
                                                                <th><font  color="#000000">Semester </th>
                                                                <th><font  color="#000000">Program Studi  </th>
                                                                <th><font  color="#000000">Jenjang </th>
                                                                <th><font  color="#000000">Jumlah </th>
                                                                <th collspan="3"><font  color="#000000">Aksi </th>

                                                                </tr>
                                                                
                                                            </thead>

                                                            <tbody>
                                                                <?php 
                                                                $db   = \Config\Database::connect();
                                                                $no=0; foreach ($prodi as $row ) : $no++ ;

                                                                    $jml = $db->table('tb_matakuliah')
                                                                            ->where('smt', $row['semester'])
                                                                            ->countAllResults();
                                                                ?> 
                                                                <tr align="center">
                                                                    <td> <?= $no; ?> </td>
                                                                    <td> <?= $row['semester']; ?> </td>
                                                                    <td> <?= $row['namaprodi']; ?> </td>
                                                                    <td> <?= $row['jenjang']; ?> </td>
                                                                    <td> <button type="button" class="btn btn-secondary btn-sm"> <?= $jml ?> </button> </td>
                                                                    <td>

                                                                  

                                                                        <a href="<?= site_url('C_Matkul/detail/' . $row['semester']) ?>">
                                                                        <button type="button" class="btn btn-info btn-sm btn-lihat">
                                                                        
                                                                        <i class="fa fa-eye"></i>
                                                                        Matakuliah
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
</div>
</div>
  
<?= $this->endSection(); ?>



