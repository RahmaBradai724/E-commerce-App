<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Utilisateur</title>
    <!-- Include CSS styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* CSS style for the user modification form */
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
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

        input[type="text"]:focus,
        input[type="email"]:focus {
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
                        <h2>Modifier <em>Utilisateur</em></h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** User Modification Form Start ***** -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <?php
                    // Vérifier si l'ID de l'utilisateur est passé en paramètre
                    if(isset($_GET['id'])) {
                        // Récupérer l'ID de l'utilisateur depuis l'URL
                        $user_id = $_GET['id'];

                        // Vérifier si le formulaire est soumis
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Récupérer les données du formulaire
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $email = $_POST['email'];

                            // Connexion à la base de données
                            require_once('connexion.php');
                            $db = new connexion();
                            $dbc = $db->CNXbase();

                            // Préparer la requête SQL pour mettre à jour les informations de l'utilisateur
                            $stmt = $dbc->prepare("UPDATE user SET nom = ?, prenom = ?, mail = ? WHERE id = ?");
                            $stmt->execute([$lastname, $firstname, $email, $user_id]);

                            // Rediriger l'utilisateur vers la page users_list.php après la mise à jour
                            header("Location: users_list.php");
                            exit();
                        }

                        // Récupérer les informations de l'utilisateur à partir de la base de données
                        require_once('connexion.php');
                        $db = new connexion();
                        $dbc = $db->CNXbase();

                        $stmt = $dbc->prepare("SELECT * FROM user WHERE id = ?");
                        $stmt->execute([$user_id]);
                        $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <form action="" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                        <label for="firstname">Prénom:</label>
                        <input type="text" id="firstname" name="firstname" value="<?php echo $user['prenom']; ?>"><br><br>
                        <label for="lastname">Nom:</label>
                        <input type="text" id="lastname" name="lastname" value="<?php echo $user['nom']; ?>"><br><br>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" value="<?php echo $user['mail']; ?>"><br><br>
                        <input type="submit" value="Modifier">
                    </form>
                    <?php
                    } else {
                        // Si l'ID de l'utilisateur n'est pas passé en paramètre, afficher un message d'erreur
                        echo "ID d'utilisateur non spécifié.";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** User Modification Form End ***** -->

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
