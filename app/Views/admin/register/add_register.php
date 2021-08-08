<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>

<div id="content-wrapper" class="d-flex flex-column">

 <!-- Identitas Kampus -->
 <div class="col-lg-12">
                <div class=" mb-4">
                    <div class="alert alert-success" role="alert">

                    
                    
                    <h5 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-tie"></i>
                    </a>Manajemen Data User</h5>
                    </div>
                
                </div>
            </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

          

                <div class="row">
        <div class="col-sm-6">

            <div class="card">
                <h4 class="card-header">Isilah data berikut dengan benar !</h4>
                
                <div class="card-body">
                

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                        

                        <div class="form-group">
                            <label for="email">Email Aktif</label>
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="firdaus@gmail.com" value="<?= old('email') ?>">
                        </div>

                        <div class="form-group">
                            <label for="username">Username / NIM</label>
                            <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group">
                            <label for="password"><?=lang('Auth.password')?></label>
                            <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                <small id="emailHelp" class="form-text text-muted">Minimal 8 Karakter</small>
                        </div>

                        <div class="form-group">
                            <label for="pass_confirm">Confirmasi Password</label>
                            <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Confirmasi Pass" autocomplete="off">
                                <small id="emailHelp" class="form-text text-muted">Masukan Password yang sama</small>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block">Daftarkan</button>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
            <!-- End of Main Content -->

<?= $this->endSection() ?>
