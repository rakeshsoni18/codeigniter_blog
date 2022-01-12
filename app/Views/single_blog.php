<?php $this->extend('layouts/master') ?>

<?php $this->section('content') ?>
<div class="row">

    <div class="col-md-12 mt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="single_post_image">
                                <?php if (!is_null($post['image'])) : ?>
                                    <img class="mr-3" src="<?php echo $post['image'] ?>" alt="Generic placeholder image">
                                <?php else: ?>
                                    <img src="https://via.placeholder.com/700x350" alt="" class="img-fluid">
                                <?php endif; ?>
                            </div>

                            <div class="post__info">
                                <div class="post_meta mt-2">
                                    <div class="post__categories">
                                        <span class="badge badge-primary">Category 1</span>
                                        <span class="badge badge-primary">Category 1</span>
                                        <span class="badge badge-primary">Category 1</span>
                                    </div>
                                </div>

                                <h3 class="mt-3 post_title"><?= $post['title'] ?></h3>

                                <div class="post_description">
                                    <?= $post['description'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                                    <div class="media">
                                        <a href="#">
                                            <img class="mr-3" src="https://via.placeholder.com/50x50" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0">
                                                <a href="#">Cras sit amet nibh libero, in gravida nulla?</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                                    <div class="media">
                                        <a href="#">
                                            <img class="mr-3" src="https://via.placeholder.com/50x50" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0">
                                                <a href="#">Cras sit amet nibh libero, in gravida nulla?</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h3>Comments</h3>
                        <div class="comment_lists mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="media">
                                        <a href="#">
                                            <img class="mr-3 rounded" src="https://via.placeholder.com/50x50" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, corrupti!</p>
                                            <a href="#">Like (0)</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <a href="#">
                                            <img class="mr-3 rounded" src="https://via.placeholder.com/50x50" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, corrupti!</p>
                                            <a href="#">Like (0)</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="post_comment mt-3">
                            <form action="" method="post">
                                <div class="form-group">
                                    <textarea name="comment" class="form-control" rows="8" placeholder="Write your comment....."></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block">Comment Now</button>
                                </div>
                            </form>
                        </div>
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
<?php $this->endSection() ?>
