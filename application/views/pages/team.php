<section class="page-title overlay" style="background-image: url(<?php echo base_url();?>assets/images/banner/team.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Our Team</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">Home</a>
                    </li>
                    <li>Our Team</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- team -->
<?php if ($staffs==true) {?>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="mb-2">Meet Your Team of Comfort Specialists</h2>
                <p class="mb-5">When you hire a contractor, you want an expert you can trust. When you choose our Services, you can rest assured knowing you will have a specialist for each of your home comfort needs.</p>
            </div>
            <!-- team member -->
            <?php foreach ($staffs as $staff): ?>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card text-center">
                    <a href="<?php echo base_url(); ?>page/staff_info/<?php echo $staff['id']; ?>">
                        <img class="card-img-top" src="<?php echo base_url(); ?>/assets/images/team/<?php echo $staff['profile_image']; ?>" alt="team-member">
                    </a>
                    <div class="card-body card-body-2 pb-0 px-4">
                        <h5 class="card-title"><?php echo $staff['name']; ?></h5>
                        <h6 class="text-color mb-30"><?php echo $staff['post']; ?></h6>
                        <a href="<?php echo base_url(); ?>page/staff_info/<?php echo $staff['id']; ?>" class="btn btn-secondary translateY-25">View Profile</a>
                       
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /team -->
<?php } ?>
<!-- cta -->

<section class="cta overlay-primary py-50" style="background-image: url(images/background/cta.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center text-lg-left mb-4 mb-lg-0">
                <h3 class="text-white">Join The People Behind Our Success</h3>
                <p class="text-white mb-0"></p>
            </div>
            <div class="col-lg-3 text-lg-right text-center align-self-center">
                <a href="<?php echo base_url();?>apply" class="btn btn-light">APPLY NOW</a>
            </div>
        </div>
    </div>
</section>
<!-- /cta -->

<!-- team -->
<?php if ($boards==true) {?>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="mb-2">Our Management Team</h2>
                <!-- <p class="mb-5">Our Board</p> -->
            </div>
            <?php foreach ($boards as $board): ?>
            <!-- team member -->
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card text-center p-3">
                    <img class="card-img-top rounded" src="<?php echo base_url(); ?>/assets/images/team/<?php echo $board['profile_image']; ?>" alt="team member image">
                    <div class="card-body pb-0">
                        <a href="" class="card-title h4 font-primary text-dark"><?php echo $board['name']; ?></a>
                        <h6 class="text-color"></h6>
                        <p class="card-text border-bottom pb-3"><?php echo $board['post']; ?></p>

                        <a href="<?php echo base_url(); ?>page/staff_info/<?php echo $board['id']; ?>" class="btn btn-secondary translateY-25">View Profile</a>
                        
                    </div>
                </div>
            </div>
           <?php endforeach; ?>
        </div>
    </div>
</section>
<?php } ?>
<!-- /team -->