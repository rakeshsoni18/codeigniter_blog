<?php $this->extend('layouts/master') ?>

<?php $this->section('content') ?>
<div class="row mt-5">
    <div class="col-md-8">

        <?php if (session()->get('failed')) : ?>
            <div class="error_img alert alert-danger">
                <?= session()->get('failed') ?>
            </div>
        <?php endif; ?>

        <div class="contact__form shadow-sm p-3 mb-5 bg-white rounded">
            <h2>Login</h2>
            <hr>
            <?php $validation =  \Config\Services::validation(); ?>
            <form action="<?= base_url('login') ?>" method="POST">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control <?php if ($validation->getError('email')) : ?>is-invalid <?php endif ?>" placeholder="Enter email" value="<?= set_value('email'); ?>">
                    <?php if ($validation->getError('email')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('email') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control <?php if ($validation->getError('password')) : ?>is-invalid <?php endif ?>" placeholder="Enter password">
                    <?php if ($validation->getError('password')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection() ?>
