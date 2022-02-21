

<?php include "header.php" ?>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Goldcoast, Queensland, Australia</li>
                        <li><a href="tel:+8801682648101">1300 250 260</a></li>
                        <li><a href="mailto:info@example.com">sales@theshop.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->



        <!-- contact-section -->
        <section class="contact-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span>Contact</span>
                    <h2>Get In Touch</h2>
                </div>
                <div class="form-inner">
                    <form method="post" action="assets/inc/sendemail.php" id="contact-form" class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" name="username" placeholder="Name" required="">
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
                                    <input type="text" name="subject" required="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <i class="far fa-comment-alt"></i>
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="theme-btn" type="submit" name="submit-form">
                                    SEND MESSAGE 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


      


        <!-- main-footer -->
        <?php include "footer.php" ?>