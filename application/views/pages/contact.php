
<section class="page-title overlay" style="background-image: url(<?php echo base_url();?>assets/images/banner/contact.jpg);">
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
<!-- contact -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-1 col-md-5">
                <h2 class="section-title">Contact Us</h2>
                <ul class="pl-0">
                    <!-- contact items -->
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-mobile"></i>
                        <div class="align-self-center font-primary">
                            <p><?php echo  $info['phone1']; ?></p>
                             <p><?php echo  $info['phone2']; ?></p>
                           
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-email"></i>
                        <div class="align-self-center font-primary">
                            
                            <p><?php echo  $info['web_email']; ?></p>
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-map-alt"></i>
                        <div class="align-self-center font-primary">
                           
                            <p><?php echo  $info['address']; ?></p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- form -->
            <div class="col-lg-7 col-md-7">
                <div class="p-5 rounded box-shadow">
                    <?php if (isset($_SESSION['success_contact_save'])) {?>


                            <div class="alert alert-success"><?php echo $_SESSION['success_contact_save']; ?></div>
                            <?php
                            } ?>
                                            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                                        <?php echo form_open('contact_us', 'class="row"'); ?>
                        <div class="col-lg-12">
                            <h3>Contact Form</h3>
                        </div>
                        <div class="col-lg-6">
                             <label>Name</label>
                            <input type="text" name="name" id="name" autofocus="autofocus" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-lg-6">
                             <label>Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                        </div>
                         <div class="col-lg-12">
                            <label>Phone Number</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="+234" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control p-2" name="message" id="message" placeholder="Your Message Here..." required style="height: 150px;"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-primary" type="submit" value="send">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <!-- Google Map -->
    <!-- <div id="map_canvas"></div> -->
</section>
