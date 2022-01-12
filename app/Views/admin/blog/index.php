<?php $this->extend('layouts/master') ?>

<?php $this->section('content') ?>
<div class="row mt-2">
    <div class="col-md-12 mb-2">
        <a href="<?php echo base_url('admin/blog/new') ?>" class="btn btn-primary">Create Post</a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>SN#</td>
                        <td>Image</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td width="13%">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; foreach ($posts as $post) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td class="post_image">
                                <?php if (!is_null($post['image'])) : ?>
                                    <img class="mr-3" src="<?= $post['image'] ?>" alt="Generic placeholder image">
                                <?php else: ?>
                                    <img class="mr-3" src="https://via.placeholder.com/120x120" alt="Generic placeholder image">
                                <?php endif; ?>
                            </td>
                            <td><?= $post['title'] ?></td>
                            <td><?= excerpt($post['description']) ?></td>
                            <td>
                                <?php echo anchor('admin/blog/' .$post['id']. '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) ?>
                                <?php echo anchor('admin/blog/' .$post['id'], 'Delete', ['class' => 'btn btn-danger btn-sm']) ?>
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
