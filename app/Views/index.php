<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="post__slider">
            <p><strong>Latest: </strong> <a href="#">Lorem ipsum, dolor sit amet consectetur</a></p>
        </div>
    </div>

    <div class="col-sm-12 d-sm-block d-md-none">
        <form action="" method="get">
            <input type="text" class="form-control" name="s" placeholder="Search">
            <button class="btn btn-primary btn-block mt-2">Search</button>
        </form>
    </div>

    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php foreach ($posts as $post) : ?>
                        <div class="col-md-12">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="media">
                                <div class="post_image">
                                    <a href="<?= base_url('blog/' .$post['slug']) ?>">
                                        <?php if (!is_null($post['image'])) : ?>
                                            <img class="mr-3" src="<?= $post['image'] ?>" alt="Generic placeholder image">
                                        <?php else: ?>
                                            <img class="mr-3" src="https://via.placeholder.com/120x120" alt="Generic placeholder image">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0">
                                        <a href="<?= base_url('blog/' .$post['slug']) ?>"><?= $post['title'] ?></a>
                                    </h5>
                                    <?= excerpt($post['description'], 200, '____') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <div class="col-md-12">
                        <?= $pager->links() ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->include('templates/subscribe_sidebar') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>