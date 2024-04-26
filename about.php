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
                            <li><a href="command_form.php">Checkout</a></li>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Learn more <em>About Us</em></h2>
                        <p>Welcome to BZ STORE, We're your go-to destination for all things delicious and delightful.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i> Our Goals</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-briefcase"></i> Our Work</a></a></li>
                  <li><a href='#tabs-3'><i class="fa fa-heart"></i> Our Passion</a></a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/about-image-1-940x460.jpg" alt="">
                    <h4>Our Goals</h4>

                    <p>Our goal is to create a user-friendly and efficient web application for managing a product inventory. The application will allow users to easily add new products to the inventory by providing details such as product name, description, price, and an image. Additionally, users will be able to view the existing products in the inventory.</p>
                    
                   
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/about-image-2-940x460.jpg" alt="">
                    <h4>Our Work</h4>
                    <p>Running a food store entails a multifaceted approach to ensure its success. From meticulously sourcing high-quality products to providing exceptional customer service, every aspect of the operation is carefully managed. Inventory is diligently monitored to minimize waste and maintain optimal stock levels. Staff are trained to offer knowledgeable assistance and create a welcoming shopping environment. Marketing efforts engage the local community, while financial management ensures the store's sustainability. Through continuous adaptation and innovation, the store stays ahead of industry trends, ensuring it remains a reliable source of quality food products for its customers.</p>
                    
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/about-image-3-940x460.jpg" alt="">
                    <h4>Our Passion</h4>
                    <p>Our passion lies in our commitment to providing fresh, quality food that is essential for the health of our community. Every product on our shelves is carefully selected to meet the diverse needs of our customers. We strive for constant innovation, support local producers, and create memorable experiences for our clients. Together, we form a place where food, community, and passion intersect to enrich our lives and inspire change.</p>

                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

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