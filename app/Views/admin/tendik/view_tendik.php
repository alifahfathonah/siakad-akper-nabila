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
                    </a>Manajemen Data Tendik</h5>
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
                                        <a class="btn btn-sm btn-primary" href="<?= site_url('Master_Tendik/add') ?>">
                                            <i class="fas fa-plus-circle"></i>
                                                Tambah Data
                                        </a>
                                        </div>

                                        <div class="card-body">

                                            <table class="table table-sm table-striped table-bordered" id="mastertendik">
                                                            <thead align="center">
                                                                <tr>
                                                                    
                                                                <th><font  color="#000000">No </th>
                                                                <th><font  color="#000000">NITK </th>
                                                                <th><font  color="#000000">Nama  </th>
                                                                <th><font  color="#000000">NIP </th>
                                                                <th><font  color="#000000">Jabatan </th>
                                                                <th collspan="3"><font  color="#000000">Aksi </th>

                                                                </tr>
                                                                
                                                            </thead>

                                                            <tbody>
                                                                <?php $no=0; foreach ($mastertendik as $row ) : $no++ ?> 
                                                                <tr align="center">
                                                                    <td> <?= $no; ?> </td>
                                                                    <td> <?= $row['nitk']; ?> </td>
                                                                    <td> <?= $row['namatendik']; ?> </td>
                                                                    <td> <?= $row['niptendik']; ?> </td>
                                                                    <td> <?= $row['jabatantendik']; ?> </td>
                                                                    <td>

                                                                  

                                                                        <a href="<?= site_url('Master_Tendik/detail/' . $row['nitk']) ?>">
                                                                        <button type="button" class="btn btn-info btn-circle btn-sm btn-lihat">
                                                                        <i class="fa fa-eye"></i>
                                                                        </button>
                                                                        </a>

                                                                        

                                                                        <a href="<?= site_url('Master_Tendik/edit/' . $row['nitk']) ?>">
										                                <button type="button"  class="btn btn-primary btn-circle btn-sm btn-edit"
                                                                            data-stat="<?=$row['statustendik']; ?>"
											                                data-pend="<?=$row['pendidikantendik']; ?>">
                                                                            <i class="fa fa-edit"></i>
                                                                        </button>
                                                                        </a>

                                                                        <a href="javascript:void(0)" onclick="hapus('<?= $row['nitk'] ?>')">
                                                                        <button type="button"  class="btn btn-danger btn-circle btn-sm btn-delete"
                                                                            data-id="<?= $row['nitk']; ?>">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                        </a>
									                                </td>
                                                                </tr>
                                                            <?php endforeach ; ?>

                                                            </tbody>
                                                            
                                                        </table>
<script>
    function hapus(id) {
        $('#nitk').val(id);
        $('#hapustendik').modal('show');
    }

</script>

<div class="modal fade" id="hapustendik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form method="POST" action="<?php echo site_url('Master_Tendik/delete') ?>">
                <div class="modal-body">
                    <input type="hidden" name="nitk" id="nitk">
                    Anda yakin hapus data ini  <strong><span></span></strong> ?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
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









</div>

</div>


</div>
  

<?= $this->endSection(); ?>



