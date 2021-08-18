<section class="page-title overlay" style="background-image: url(assets/images/banner/4.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold"><?= $page ?></h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">Home</a>
                    </li>
                    <li><?= $service?></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section class="section">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $blog): ?>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" style="width: 100%;height: 250px;" src="<?php echo base_url(); ?>/assets/post_image/<?php echo $blog['post_image']; ?>" alt="blog-Image">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <!-- <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p> -->
                            </div>
                            <div class="p-3">
                                <a href="<?php echo base_url(); ?>page/view_blog/<?php echo $blog['slug']; ?>" class="h4 section-title"><?php echo $blog['title']; ?></a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /blog -->
