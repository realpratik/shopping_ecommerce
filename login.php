<?php include "header.php"; ?>




        <!-- contact-section -->
        <section class="contact-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span></span>
                    <h2>Login</h2>
                </div>
                <div class="form-inner">
                    <form method="post" action="" id="contact-form" class="default-form"> 
                        <div class="row clearfix">
                           <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <i class="fas fa-phone-volume"></i>
                                    <input type="password" name="password"  placeholder="Password" >
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="btn btn-primary" type="submit" name="submit-form">
                                    Login
                                </button>
                                <br><br>
                                <a href="#" class="btn btn-danger">Forgot Password?</a>
                                <a href="#" class="btn btn-success">New User? Register Now</a>
                            </div>
                        </div>
                    </form>
                    <?php
                    
                        if($_POST){
                            $email = htmlspecialchars($_POST['email']);
                            $password = htmlspecialchars($_POST['password']);
                          
                           //db 
                           include "myclass.php";

                           $obj = new MyClass("your_ost","pw","pw","your_db_name");
                       
                           $obj->login($email,$password);
                        }

                    ?>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

<?php include "footer.php"; ?>
