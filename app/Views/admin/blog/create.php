<?php $this->extend('layouts/master') ?>

<?php $this->section('content') ?>
<div class="row mt-2">
    <div class="col-md-12 mb-2">
        <a href="<?php echo base_url('admin/blog') ?>" class="btn btn-primary">Back to blog list</a>
    </div>
    <div class="col-md-12">
        <div class="contact__form shadow-sm p-3 mb-5 bg-white rounded">
            <h2>Create Blog</h2>
            <hr>
            <form action="<?php echo base_url('admin/blog') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="10" placeholder="Write description"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo base_url('admin/blog') ?>" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection() ?>
