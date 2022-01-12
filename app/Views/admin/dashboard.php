<?php $this->extend('layouts/master') ?>

<?php $this->section('content') ?>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="shadow-sm p-3 mb-5 bg-success rounded box">
                <h3>Total Posts</h3>
                <p><strong>500</strong></p>
                <a href="<?= base_url('admin/blog') ?>" class="btn btn-success btn-sm">VIEW ALL</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="shadow-sm p-3 mb-5 bg-primary rounded box">
                <h3>Total Categories</h3>
                <p><strong>500</strong></p>
                <a href="<?= base_url('admin/category') ?>" class="btn btn-primary btn-sm">VIEW ALL</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="shadow-sm p-3 mb-5 bg-danger rounded box">
                <h3>XXXXXXX</h3>
                <p><strong>500</strong></p>
                <a href="<?= base_url('admin/blog') ?>" class="btn btn-danger btn-sm">VIEW ALL</a>
            </div>
        </div>
    </div>

<?php $this->endSection() ?>
