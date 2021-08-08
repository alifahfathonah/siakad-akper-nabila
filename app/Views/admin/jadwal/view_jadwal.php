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
                    </a>Manajemen Data Jadwal</h5>
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
                                        <a class="btn btn-sm btn-primary" href="<?= site_url('C_Jadwal/add') ?>">
                                            <i class="fas fa-plus-circle"></i>
                                                Tambah Data
                                        </a>
                                        </div>

                                        <div class="card-body">

                                            <table class="table table-sm table-striped table-bordered" id="jadwal">
                                                            <thead align="center">
                                                                <tr>
                                                                    
                                                                <th><font  color="#000000" text-align="left">No </th>
                                                                <th><font  color="#000000">Kode Jadwal </th>
                                                                <th><font  color="#000000">Hari </th>
                                                                <th><font  color="#000000">Jam </th>
                                                                <th><font  color="#000000">Ruangan </th>
                                                                <th collspan="3"><font  color="#000000">Aksi </th>

                                                                </tr>
                                                                
                                                            </thead>

                                                            <tbody>
                                                                <?php $no=0; foreach ($jadwal as $row ) : $no++ ?> 
                                                                <tr align="center">
                                                                    <td> <?= $no; ?> </td>
                                                                    <td> <?= $row['kodejadwal']; ?> </td>
                                                                    <td> <?= $row['hari']; ?> </td>
                                                                   
                                                                    <td> <?= $row['jam']; ?> </td>
                                                                    <td> <?= $row['jenisruangan']; ?> </td>
                                                                    <td>
                                                                       

                                                                        <a href="javascript:void(0)" onclick="hapus('<?= $row['kodejadwal'] ?>')">
                                                                        <button type="button"  class="btn btn-danger btn-circle btn-sm btn-delete"
                                                                            data-id="<?= $row['idruangan']; ?>">
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
        $('#kodejadwal').val(id);
        $('#hapusruangan').modal('show');
    }

</script>

<div class="modal fade" id="hapusruangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form method="POST" action="<?php echo site_url('C_Jadwal/delete') ?>">
                <div class="modal-body">
                    <input type="hidden" name="kodejadwal" id="kodejadwal">
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

        

                                                        


</div>
</div>




</div>


</div>

</div>









</div>

</div>


</div>
  

<?= $this->endSection(); ?>



