<section class="page-title overlay" style="background-image: url(<?php echo base_url(); ?>/assets/post_image/<?php echo $blog['post_image']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Blog Single</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">Home</a>
                    </li>
                    <li><?php echo $blog['title']; ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- blog single -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 py-100">
                <div class="border rounded bg-white">
                    <img class="img-fluid w-100 rounded-top" src="<?php echo base_url(); ?>/assets/post_image/<?php echo $blog['post_image']; ?>" alt="blog-image">
                    <div class="p-4">
                        <h3><?php echo $blog['title']; ?></h3>
                        <ul class="list-inline d-block pb-4 border-bottom mb-3">
                            <li class="list-inline-item text-color">Posted By Admin</li>
                            <li class="list-inline-item text-color">On <?php echo $blog['date']; ?></li>
                            <li class="list-inline-item text-color">Tag: News</li>
                        </ul>
                        <p><?php echo $blog['body']; ?>
                    </div>
                </div>
               
            </div>
            <div class="col-lg-4">
                <!-- Sidebar -->
                <div class="bg-white px-4 py-100 sidebar-box-shadow">
                    <!-- Search Widget -->
                   
                    <div class="mb-50">
                        <h4 class="mb-3">Archives</h4>
                        <ul class="pl-0 mb-0">
                            <li class="border-bottom">
                                <a href="<?php echo base_url(); ?>blog" class="d-block text-color py-10">June Archive</a>
                            </li>
                          
                        </ul>
                    </div>
                 
                    <!-- Widget Newsletter -->
                   
                </div>
            </div>
        </div>
    </div>
</section>