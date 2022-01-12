<?php $this->extend('layouts/master') ?>

<?php $this->section('content') ?>
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="contact__form shadow-sm p-3 mb-5 bg-white rounded">
                <h2>Contact Us</h2>
                <hr>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $this->endSection('content') ?>