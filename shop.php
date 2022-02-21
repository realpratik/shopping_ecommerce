<?php include "header.php"; ?>
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
                        <li>GoldCoast, Queensland Australia</li>
                        <li><a href="tel: 1800 336 998">1300 250 260</a></li>
                        <li><a href="mailto:support@examle.com">Email Us</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="twitter.com"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="facebook.com"><span class="fab fa-facebook-square"></span></a></li>
                    
                        <li><a href="instagram.com"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="youtube.com"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        
        <!--Page Title-->
        <section class="page-title" style="background-image: url(assets/images/hats/hat4.jpeg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title-box">
                        <h1>All Products</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


   

                    
                            <!-- shop-page-section -->
                    <section class="shop-page-section sec-pad">
                        <div class="auto-container">
                            <div class="row clearfix">


                                <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                                    <div class="sidebar shop-sidebar">
                                        
                                        <div class="sidebar-widget sidebar-tags">
                                            <div class="widget-title">
                                                <h3>Product tags</h3>
                                            </div>
                                            <div class="widget-content">
                                                <ul class="tags-list clearfix">
                               
                                                <?php 

                                                    global $con;

                                                    $query = mysqli_query($con, "SELECT * FROM products");

                                                    while($k = mysqli_fetch_array($query)){

                                                ?>

                                                        <li><a href="shop-1.html"> <?php echo $k['productname'];?></a></li>

                                                <?php  } ?>
                                        
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                 
                                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                                    <div class="our-shop">
                                        <div class="row clearfix">
                                           
                                        <?php 

                                        global $con;

                                        $query = mysqli_query($con, "SELECT * FROM products");

                                        while($k = mysqli_fetch_array($query)){

                                        ?>

                                            <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                                <div class="shop-block-one">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="dashboard/<?php echo $k['image1']; ?>" alt="">
                                                            <ul class="list clearfix">
                                                                <li><a href="shop-1.html"><i class="flaticon-cart"></i></a></li>
                                                                <li><a href="shop-details.html">add to cart</a></li>
                                                            </ul>
                                                        </figure>
                                                        <div class="lower-content">
                                                            <h6><a href="shop-details.html"><?php echo $k['productname']; ?></a></h6>
                                                            <ul class="rating clearfix">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                            </ul>
                                                            <span class="price">$ <?php echo $k['price']; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            


                         <?php } ?>


                                                       
                                        </div>
                                        <div class="pagination-wrapper centred">
                                            <ul class="pagination clearfix">
                                                <li><a href="#" class="active">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- shop-page-section end -->


          <!-- <?php 
        // } 
        ?> -->
        


        

<?php include "footer.php"; ?>