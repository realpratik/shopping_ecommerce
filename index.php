<?php include "header.php"; ?>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/hats/hat8.jpeg" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Goldcoast, Queensland, Australia</li>
                        <li><a href="tel:+8801682648101">1300 250 260</a></li>
                        <li><a href="mailto:info@example.com">sales@shop.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.php"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        
        <!-- main-slider -->
        <section class="main-slider">
            <div class="main-slider-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/hats/hat5.jpeg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h1>Genuine hats at best price</h1>
                            <!-- <p>Food that matters - to you, to farmers and to the planet we all share.</p> -->
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn">Get Started<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>  
                    </div>
                </div>
     
            </div>
        </section>
        <!-- main-slider end -->


        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 video-column">
                            <div id="video_block_1">
                                <div class="video-inner" style="background-image: url(assets/images/hats/hat9.jpeg);">
                                    <a href="../watch.html?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                            <div id="content_block_1">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <span>About Us</span>
                                        <h2>We provide quality wears</h2>
                                    </div>
                                    <div class="text">
                                        <p>Our fabrics are from around the best in the world</p>
                                    <ul class="list clearfix">
                                        <li>100% cotton fabrics</li>
                                        <li>Secured Payment</li>
                                    </ul>
                                    <div class="btn-box">
                                        <a href="about.html" class="theme-btn">View More<i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

        <!-- shop-section -->
        <section class="shop-section">
            <div class="auto-container">
                <div class="sec-title style-two text-center">
                    <span>Exclusive Collections</span>
                    <h2>Latest Prodcuts</h2>
                </div>
                <div class="row clearfix">
                    <?php 
                    $query = mysqli_query($con, "select * from products LIMIT 6");
                    while ($k = mysqli_fetch_array($query))
                    {
                    ?>

                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="dashboard/<?php echo $k['image1'] ?>" alt="">
                                    <ul class="list clearfix">
                                        <li><a href="shop-1.html"><i class="flaticon-cart"></i></a></li>
                                        <li><a href="product-details.php?id=<?php echo $k['id']; ?>">Buy Now</a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <h6><a href="shop-details.html"><?php echo $k['productname'] ?></a></h6>
                                    
                                    <span class="price"><?php echo $k['price'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
                <div class="more-btn centred">
                    <a href="#" class="theme-btn">Shop Now</a>
                </div>
            </div>
        </section>
        <!-- shop-section end -->       
       


<?php include "footer.php"; ?>