<?= $this->extend('auth/templates/index'); ?>

<!-- <?= $this->section('content'); ?> -->

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                    <img src="<?= base_url('img/logonb.jpeg') ?>"><br><br>
                                        <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.loginTitle') ?> Sisfo Akademik </h1>
                                    </div>
                                    <form action="www.google.com" method="post" class="user">
                                                <div class="form-group">
                                                <input type="text" class="form-control form-control-user
                                                <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.login') ?>
                                                    </div>
                                            </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user
                                            <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                            name="password" placeholder="<?= lang('Auth.password') ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" name="remembering"
                                                <?php if(old('remember')) : ?> checked <?php endif ?>>
                                                <label class="custom-control-label" for="customCheck">Rememberx
                                                    Me</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            <?= lang('Auth.loginAction') ?>
                                        </button>
                                       
                                    </form>
                                    <hr>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?= $this->endSection(); ?>