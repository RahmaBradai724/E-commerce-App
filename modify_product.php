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
    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    textarea,
    input[type="number"],
    input[type="file"],
    input[type="submit"] {
      width: calc(100% - 20px);
      margin-bottom: 15px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 16px;
      transition: border-color 0.3s;
    }

    input[type="submit"] {
      background-color: #fd7e14;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    input[type="file"] {
      padding-top: 7px;
    }

    input[type="text"]:focus,
    textarea:focus,
    input[type="number"]:focus {
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
  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br>
            <br>
            <h2>Modify <em>Products</em></h2>

          </div>
        </div>
      </div>
    </div>
  </section>


    <?php
    // Vérifier si l'ID du produit est transmis dans l'URL
    if(isset($_GET['id'])) {
        // Récupérer l'ID du produit depuis l'URL
        $product_id = $_GET['id'];

        // Inclure le fichier de connexion à la base de données
        require_once('connexion.php');
        $db = new connexion();
        $dbc = $db->CNXbase();

        // Requête SQL pour récupérer les détails du produit
        $stmt = $dbc->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$product_id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier si le produit existe dans la base de données
        if($product) {
            // Afficher les champs de modification avec les valeurs du produit
            ?>
            <form action="update_product.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>"><br><br>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>"><br><br>
                <label for="description">Description:</label><br>
                <textarea id="description" name="description"><?php echo $product['description']; ?></textarea><br><br>
                <label for="image">Image:</label>
                <input type="file" id="image" name="image"><br><br>
                <input type="submit" value="Update">
            </form>
            
            <?php
        } 
    } 
    ?>
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
