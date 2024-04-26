<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free BZ STORE Website Template</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

  </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">BZ STORE <em> Website</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="products.php">Products</a></li>
                            <?php
                                    if($_COOKIE['user-role'] == 'guest'){
                            ?>
                            <li><a href="checkout.php">Checkout</a></li>
                            <?php
                }
            ?>



                            <?php
                                    if($_COOKIE['user-role'] == 'guest'){
                            ?>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.php">About Us</a>
                                    <a class="dropdown-item" href="blog.php">Blog</a>
                                    <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                                    <a class="dropdown-item" href="terms.php">Terms</a>
                                </div>
                            </li>
            <?php
                }
            ?>
                            <?php
                                    if($_COOKIE['user-role'] == 'guest'){
                            ?>

                            <li><a href="contact.php">Contact</a></li> 
                            <?php
                }
            ?>
            <?php
                                    if($_COOKIE['user-role'] == 'admin'){
                            ?>

                            <li><a href="order_list.php" class="active">Commands</a></li>
                            <?php
                }
            ?>
                            <?php
                                    if($_COOKIE['user-role'] == 'admin'){
                            ?>

                            <li><a href="users_list.php" class="active">User Management</a></li>
                            <?php
                }
            ?>


                            <li><a href="login-form.php">Logout</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                
                <h2>WELCOME TO <em> BZ STORE</em> WEBSITE</h2>
                <div class="main-button">
                    <a href="contact.php">Contact us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Foods</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Discover a world of culinary delights at our online BZ store. From fresh produce to gourmet specialties, we offer a wide range of high-quality products delivered right to your doorstep. Explore our selection and indulge your taste buds with ease and convenience.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-4-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>15.00</del> <sup>$</sup>10.00
                            </span>

                            <h4>Cheese</h4>

                            <p>Discover exquisite artisanal cheeses at Food Fromage. Elevate your palate with our curated selection of fine cheeses from around the world. Shop now!</p>

                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-5-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>15.00</del> <sup>$</sup>10.00
                            </span>

                            <h4>Tomato</h4>

                            <p>Fresh, ripe tomatoes bursting with flavor await you at Food Tomate. From juicy heirlooms to plump cherry tomatoes, find the perfect addition to your recipes. Shop now for farm-fresh goodness!</p>

                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-6-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>15.00</del> <sup>$</sup>10.00
                            </span>

                            <h4>Bread</h4>

                            <p>Indulge in the crispy delight of our freshly baked baguettes at Food Baguette. With their golden crust and soft interior, they're the perfect complement to any meal. Taste the French tradition today!</p>

                           
                        </div>
                    </div>
                </div>
                
            </div>

            <br>

            <div class="main-button text-center">
                
                <a href="products.php">View our products</a>
            </div>
        </div>
    </section>
    
    
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Welcome to BZ STORE, We're your go-to destination for all things delicious and delightful.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p> At BZ STORE, we're passionate about providing the freshest and finest quality ingredients to fuel your culinary adventures.

From farm-fresh produce to artisanal cheeses, premium meats, and gourmet pantry essentials, we've curated a diverse selection to satisfy every craving and inspire your culinary creativity.

With a commitment to quality, sustainability, and customer satisfaction, </p>

                        <p>we strive to make your shopping experience enjoyable and hassle-free. Whether you're a seasoned chef or a cooking enthusiast, we're here to help you discover new flavors, elevate your dishes, and make every meal memorable.

Join us at BZ STORE and embark on a culinary journey that celebrates the joy of good food and great company. Happy cooking!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Blog</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Dive into the world of culinary delights with our blog. From mouth-watering recipes and cooking tips to behind-the-scenes stories and foodie adventures</p>
                    </div>
                </div>
            </div>
            
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>If you need help, you can contact us everytime and everywhere!</p>
                        <div class="main-button">
                            <a href="contact.php">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Explore what others are saying about us!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Rahma Bradai</h4>
                                <p><em>"Hello, i'm Rahma Bradai and i'm a student in international institute of Technology, welcome to our BZ STORE!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Zaineb Affes</h4>
                                <p><em>"Hello, i'm Zaineb Affes and i'm a student in international institute of Technology, welcome to our BZ STORE!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>

            <br>

            
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2024 BZ STORE
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>