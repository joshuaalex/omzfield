
<section class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="signup">
                    <div class="row">
                        <div class="col-md-5 signup-greeting overlay" style="background-image: url(images/background/signup.jpg);">
                            <img src="images/logo-signup.png" alt="logo">
                            <h4>Welcome Back! OMZField Services Adminstrator</h4>
                           
                        </div>
                        <div class="col-md-7">
                            <div class="signup-form">
                                <?php if (isset($_SESSION['login_user'])) {?>

                        <div class="alert alert-success"><?php echo $_SESSION['login_user']; ?></div>
                            <?php
                            } ?>

                                    <?php if (isset($_SESSION['login_failed'])) {?>

                        <div class="alert alert-danger alert-dismissable"><?php echo $_SESSION['login_failed']; ?></div>
                            <?php
                            } ?>
                          <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                                        </div>
                                        <?php echo form_open('Page/login');?>
                                    <div class="col-lg-12">
                                        <h4>Login</h4>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" id="" name="username" placeholder="Username">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" class="form-control"  name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-primary btn-sm">Login</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>