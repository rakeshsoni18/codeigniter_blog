<div class="card">
    <div class="card-header">
        Subscribe Newsletter
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('subscriber') ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block">Subscribe Now</button>
            </div>
        </form>
    </div>
</div>