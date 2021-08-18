
<section class="cta overlay-primary py-50 text-center text-lg-left" style="background-image: url(<?php echo base_url();?>assets/images/background/cta.jpg);">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <h3 class="text-white">Build a Career <br>
Join Omzfield Services Specialist Team.
</h3>

                </div>
                <div class="col-lg-4 text-lg-right align-self-center">
                </div>
            </div>
        </div>
</section>
<!-- contact -->
<section class="section">
    <div class="container">
        <div class="row">
       
             
          
            <!-- form -->
            <div class="col-lg-12 col-md-7">
                <p>
    <h2>Join the Expert Team</h2>
<br>
</p>
                <div class="p-5 rounded box-shadow">
                      <?php if (isset($_SESSION['success_request'])) {?>


                            <div class="alert alert-success"><?php echo $_SESSION['success_request']; ?></div>
                            <?php
                            } ?>
                                            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                                        <?php echo form_open_multipart('page/apply', 'class="row"'); ?>
                                        <!-- <?php echo $error;?> -->   
                        <div class="col-lg-12">
                            <h3>Application Form</h3>
                            <p>Kindly, Provide valid Information for the below</p>
                        </div>
                        <div class="col-lg-6">
                            <label class="required">First Name *</label>
                            <input type="text" name="fname" autofocus="autofocus" id="name" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="required">Last Name *</label>
                            <input type="text" name="lname" id="name" class="form-control" placeholder="" required>
                        </div>


                        <div class="col-lg-6">
                            <label class="required">Email Address *</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                        </div>

                         <div class="col-lg-6">
                            <label class="required">Gender</label>
                            <select name="gender" id="subject" class="form-control" required="">
                                    <option value=""></option>
                                      <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                            </select>
                        </div>


                        <div class="col-lg-6">
                            <label class="required">Mobile Number *</label>
                            <input type="phone" class="form-control" name="phone" id="phone" placeholder="+234" required>
                        </div>

                        <div class="col-lg-6">
                            <label class="required">State *</label>
                            <input type="state" class="form-control" name="state" id="state" placeholder="Abuja" required>
                        </div>

                          <div class="col-lg-6">
                            <label class="required">Country *</label>
                            <input type="Country" class="form-control" name="country" id="country" placeholder="Nigeria" required>
                        </div>



                        <div class="col-lg-6">
                            <label class="required">Location Address *</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="" required>
                        </div>

                         <div class="col-lg-12">
                            <label class="required">Professional Service *</label>
                            <select name="services" id="subject" class="form-control" required="required">


                             
                                    
                                    <option>Select a Service</option>
                                      <option value="Plumbing Services">Plumbing Services</option>
                                        <option value="Electrical Services">Electrical Services</option>
                                          <option value="Air Conditional">Air Conditional Services</option>

                            </select>
                        </div>


                         <div class="col-lg-6">
                            <label class="required">Disability *</label>
                            <select name="disability" id="Disability" class="form-control" required="required">

                                      <option value=""></option>
                                        <option value="Yes">Yes</option>
                                          <option value="No">No</option>

                            </select>
                        </div>

                           <div class="col-lg-6">
                            <label class="required">Experience Year(s)</label>
                            <input type="text" name="experience" class="form-control" placeholder="" required>
                        </div>
                      


                        <div class="col-lg-12">
                            <label class="required">Experience Information</label>
                            <textarea class="form-control p-2" name="message" maxlength='250' id="message" placeholder="" required style="height: 150px;"></textarea>
                        </div>
                        <div class="col-lg-12">
                        <label for="">Submit Your CV *</label>
                        <input type="file" name="userfile" class="form-control" required="required">
                       
                            <button class="btn btn-primary" type="submit" value="send">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</section>