
<section class="cta overlay-primary py-50 text-center text-lg-left" style="background-image: url(<?php echo base_url();?>assets/images/background/cta.jpg);">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <h3 class="text-white">AVOID QUACKS… TALK TO THE EXPERTS YOU CAN TRUST <br>
        Hire an Omzfield Services Specialist.</h3>

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
                    <h2>Schedule Your Appointment Today</h2>
                    <br>
                    For your convenience, you can request an appointment in 1 of 2 ways:
                    Call us at +2340805557917  for immediate assistance. <br>
                    Fill out the form below and one of our Client Care Representatives will contact you within 5 to 10 minutes Monday-Saturday (during 7 AM to 9 PM). <br>
                    After 10Am or on Sundays please give us a call.
                </p>
                <div class="p-5 rounded box-shadow">
                    <?php 
                        if (isset($_SESSION['success_request'])) { 
                    ?>
                            <div class="alert alert-success">
                                <?php echo $_SESSION['success_request']; ?>
                            </div>
                    <?php
                        }

                        require_once('application/libraries/helper_functions.php');

                        echo validation_errors('<div class="alert alert-danger">','</div>');
                        echo form_open('service', 'class="row" id="frmRequestServices"'); 
                    ?>
                        <div class="col-lg-12">
                            <h3>Request Services Form</h3>
                        </div>

                        <div class="col-lg-6">
                            <label class="required">Full Name (Surname First)</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                        </div>

                        <div class="col-lg-6">
                            <label class="required">Phone Number</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="+23400000000" required>
                        </div>

                        <div class="col-lg-6">
                            <label class="required">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                        </div>

                        <div class="col-lg-6">
                            <label class="required">State</label>
                            <!--<input type="state" class="form-control" name="state" id="state" placeholder="Abuja" required> -->
                            <select name="state" id="state" class="form-control" required="">
                                <?php echo loadStateIntoCombo(); ?>
                            </select>
                        </div>

                        <div class="col-lg-12">
                            <label class="required">Location Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="" required>
                        </div>

                        <div class="row col-lg-12">
                            <div class="col-lg-3">
                                <label class="required">Services Needs</label>
                                <select name="product" id="product" class="form-control" required="">
                                    <?php echo loadProductIntoCombo(); ?>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label class="required">Services Category</label>
                                <select name="servicecategory" id="servicecategory" class="form-control" required=""></select>
                            </div>

                            <div class="col-lg-3">
                                <label class="required">Apartment</label>
                                <select name="apartment" id="apartment" class="form-control" required=""></select>
                            </div>

                            <div class="col-lg-3">
                                <label class="required">Apartment Type</label>
                                <select name="apartmenttype" id="apartmenttype" class="form-control" required=""></select>
                            </div>
                        </div>

                        <div class="row col-lg-12">
                            <div class="col-lg-6">
                                <label class="required">Nature of Service</label>
                                <select name="service" id="service" class="form-control" required=""></select>
                            </div>
                            <div class="col-lg-3" id="AcQtyDiv">
                                <label class="required">Quantity</label>
                                <input type="number" name="AcQty" id="AcQty" class="form-control" value="1">
                            </div>
                            <div class="col-lg-3" id="totalDiv">
                                <label class="required">Total (&#8358;)</label>
                                <input type="text" name="total" id="total" disabled="true" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="required">Desire Date {MM/DD/YYYY}</label>
                            <input type="date" name="date_desire" class="form-control" required>
                        </div>

                        <div class="col-lg-6">
                            <label class="required">Desire Time {01:00:AM}</label>
                            <input type="time" name="time_desire"  class="form-control">
                        </div>

                        <div class="col-lg-12">
                            <label class="required">Additional Info</label>
                            <textarea class="form-control p-2" name="message" id="message" placeholder="Your Message Here..." required style="height: 150px;"></textarea>
                        </div>

                        <div class="col-lg-12">
                            <button class="btn btn-primary" type="button" value="Proceed to Payment" id="btnRequestServices">Request Services</button>
                        </div>
                    </form>
                    <script src="<?php echo base_url();?>assets/js/myscript.js"></script>
                    <script type="text/javascript">
                        requestServices();
                    </script>   
                </div>
            </div>
        </div>
    </div>
</section>