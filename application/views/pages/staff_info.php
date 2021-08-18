<section class="section">
    <div class="container">
        <div class="row">
            <!-- sidebar -->
            <aside class="col-lg-4">
                <!-- team member info -->
                <div class="bg-gray rounded mb-50">
                    <img class="img-fluid w-100 rounded-top" src="<?php echo base_url(); ?>/assets/images/team/<?php echo $staff['profile_image']; ?>" alt="team member">
            
                </div>
                <!-- Brochure -->
              
            </aside>
            <!-- /sidebar -->

            <!-- team member details -->
            <div class="col-lg-8">
                <div>
                    <h2><?php echo $staff['name']; ?></h2>
                    <h4 class="text-primary mb-30"><?php echo $staff['post']; ?></h4>
                    <i>status: Active</i>
                    <p class="mb-40"><?php echo $staff['profile']; ?></p>
                    <div class="row">
                        <!-- contact info -->
                       
                        <!-- social icon -->
                       <a href="<?php echo base_url(); ?>our_team" class="btn btn-secondary translateY-25">Meet Our Team</a>
                    </div>
                </div>
              
                </div>
            </div>
        </div>
    </div>
</section>