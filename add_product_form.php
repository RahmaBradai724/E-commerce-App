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

  <style>
    /* CSS style for centering the form */
    #add-product {
      text-align: center;
      margin-top: 50px; /* Adjust margin top as needed */
    }

    #add-product form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    #add-product form label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    #add-product form input[type="text"],
    #add-product form textarea,
    #add-product form input[type="number"],
    #add-product form input[type="file"],
    #add-product form input[type="submit"] {
      width: calc(100% - 20px);
      margin-bottom: 15px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 16px;
      transition: border-color 0.3s;
    }

    #add-product form input[type="submit"] {
      background-color: #fd7e14;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    #add-product form input[type="submit"]:hover {
      background-color: #0056b3;
    }

    #add-product form input[type="file"] {
      padding-top: 7px;
    }

    #add-product form input[type="text"]:focus,
    #add-product form textarea:focus,
    #add-product form input[type="number"]:focus {
      border-color: #007bff;
      outline: none;
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
              <!-- Add other menu items as needed -->
            </ul>
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
            <h2>Add <em>Products</em></h2>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section" id="add-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea><br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required><br>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required><br>

            <input type="submit" value="Add Product">
          </form>
        </div>
      </div>
    </div>
  </section>


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
