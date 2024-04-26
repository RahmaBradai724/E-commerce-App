<?php
// Include the database connection file
require_once('connexion.php');

// Connect to the database
$db = new connexion();
$dbc = $db->CNXbase();

// Prepare and execute the query to fetch data from the commands table
$stmt = $dbc->query("SELECT * FROM commands");
$commands = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commands Table</title>
    <!-- Include CSS styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Additional CSS styles for the commands table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Commands <em>List</em></h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Commands Table Start ***** -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table>
                        <thead>
                            <tr>
                                <th>User Connected</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Quantity</th>
                                <th>Product Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($commands as $command): ?>
                            <tr>
                                <td><?php echo $command['user_connected']; ?></td>
                                <td><?php echo $command['user_name']; ?></td>
                                <td><?php echo $command['email']; ?></td>
                                <td><?php echo $command['phone']; ?></td>
                                <td><?php echo $command['address1']; ?></td>
                                <td><?php echo $command['city']; ?></td>
                                <td><?php echo $command['quantity']; ?></td>
                                <td><?php echo $command['product_name']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Commands Table End ***** -->

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
