<?php $this->extend('layouts/master') ?>

<?php $this->section('content') ?>
<div class="row mt-2">
    <div class="col-md-12 mb-2">
        <a href="<?php echo base_url('admin/category/new') ?>" class="btn btn-primary">Create Category</a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>SN#</th>
                        <th>Category Name</th>
                        <th>Total Posts</th>
                        <th width="13%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; foreach ($categories as $category) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $category['name'] ?></td>
                            <td>5</td>
                            <td>
                                <?php echo anchor('admin/category/' .$category['id']. '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) ?>
                                <?php echo anchor('admin/category/' .$category['id'], 'Delete', ['class' => 'btn btn-danger btn-sm']) ?>
                            </td>
                        </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?= $pager->links() ?>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>
