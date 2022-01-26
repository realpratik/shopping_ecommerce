<?php include "header.php"; ?>




        <!-- contact-section -->
        <section class="contact-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span></span>
                    <h2>Register</h2>
                </div>
                <div class="form-inner">
                    <form method="post" action="assets/inc/sendemail.php" id="contact-form" class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <i class="fas fa-phone-volume"></i>
                                    <input type="text" name="phone" required="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <i class="far fa-file-alt"></i>
                                    <input type="text" name="country" required="" placeholder="Country">
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <i class="far fa-file-alt"></i>
                                    <input type="text" name="state" required="" placeholder="State">
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <i class="far fa-file-alt"></i>
                                    <input type="text" name="city" required="" placeholder="City">
                                </div>
                            </div>
                             <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <i class="far fa-file-alt"></i>
                                    <input type="text" name="password" required="" placeholder="Enter Strong Password">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="theme-btn" type="submit" name="submit-form">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

<?php include "footer.php"; ?>