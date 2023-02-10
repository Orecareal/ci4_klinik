<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                    <?php if(isset($validation)):?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif;?>
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Silahkan login ke web klinik!</h1>
                        </div>
                        <form method="POST" action=<?= base_url('login/auth')?>>
                            <?= csrf_field()?>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control"
                                    id="username" name="username" placeholder="Enter Username">
                            </div>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control"
                                        id="password" name="password" placeholder="Password">
                                </div>
                                <div class="d-grid gap-2 mb-3">
                                    <button type="submit" class="btn bg-orange text-white">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>