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

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Products</em></h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

        <div class="row">          
                   
     <!-- Récupérer les produits depuis la base de données -->
            <?php
            require_once('connexion.php');
            $db = new connexion();
            $dbc = $db->CNXbase();
            $stmt = $dbc->query("SELECT * FROM products");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='col-lg-4'>";
                echo "<div class='trainer-item'>";
                echo "<div class='image-thumb'>";
                echo "<img src='{$row['image']}' alt='Product Image'>";
                echo "</div>";
                echo "<div class='down-content'>";
                echo "<span>";
                echo "<sup>$</sup>{$row['price']}";
                echo "</span>";
                echo "<h4>{$row['name']}</h4>";
                echo "<p>{$row['description']}</p>";
                echo "<ul class='social-icons'>";
                
                echo "<li><a href='checkout.php'>+ Order</a></li>";
                 // Ajouter l'icône d'édition et le lien vers la page de modification
                 
                 if($_COOKIE['user-role'] == 'admin'){
             
                    echo "<li><a href='modify_product.php?id={$row['id']}'><i class='fa fa-pencil'></i> Modify</a></li>";
             
                 }
             
                
                
                // Ajouter l'icône de suppression et le lien vers le script de suppression
                if($_COOKIE['user-role'] == 'admin'){
             
                    echo "<li><a href='delete_product.php?id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this product?\");'><i class='fa fa-trash'></i> Delete</a></li>";
             
                 }
                
                
                echo "</ul>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        
        
               
                    
                </div>
            
            </div>

            <br>
            <?php
                if($_COOKIE['user-role'] == 'admin'){
            ?>
            <style>
               .center {
                text-align: center;
               }
            </style>
            <div class="center">
            <a href="add_product_form.php" style="center">Add Product</a>
            </div>
            <?php
                }
            ?>
            <br>
            <br>
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
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