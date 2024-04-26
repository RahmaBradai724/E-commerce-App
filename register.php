<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(assets/images/a.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Register</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Create an account</h3>
                    <?php
                    // Définition des variables de message pour chaque champ
                    $firstname_error = '';
                    $lastname_error = '';
                    $email_error = '';
                    $password_error = '';

                    // Vérifier si le formulaire est soumis
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Récupérer les données du formulaire
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        // Valider le format du prénom
                        if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
                            $firstname_error = 'Le prénom ne doit contenir que des lettres et des espaces.';
                        }

                        // Valider le format du nom de famille
                        if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
                            $lastname_error = 'Le nom de famille ne doit contenir que des lettres et des espaces.';
                        }

                        // Valider le format de l'e-mail
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $email_error = 'Format d\'e-mail invalide.';
                        }

                        // Valider le format du mot de passe
                        if (!preg_match("/^[a-zA-Z ]*$/", $password)) {
                            $password_error = 'Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et faire au moins 8 caractères de longueur.';
                        }

                        // Si aucune erreur n'est détectée, insérer l'utilisateur dans la base de données
                        if (empty($firstname_error) && empty($lastname_error) && empty($email_error) && empty($password_error)) {
                            // Hasher le mot de passe avant de le stocker dans la base de données
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);


                            // Connexion à la base de données
                            require_once('connexion.php');
                            $db = new connexion();
                            $dbc = $db->CNXbase();

                            // Préparer la requête SQL pour insérer les données dans la base de données
                            $stmt = $dbc->prepare("INSERT INTO user (nom, prenom, mail, password, role,username) VALUES (?, ?, ?, ?, ?,?)");
                            $stmt->execute([$firstname, $lastname, $email, $hashed_password, 'guest',$firstname]); // Insérer le rôle dans la base de données

                            // Rediriger l'utilisateur vers une page de succès ou une autre page de votre choix
                            header("Location: index.php");
                            exit();
                        }
                    }
                    ?>
                    <form method="POST" class="signin-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                            <small class="text-danger"><?php echo $firstname_error; ?></small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                            <small class="text-danger"><?php echo $lastname_error; ?></small>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <small class="text-danger"><?php echo $email_error; ?></small>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <small class="text-danger"><?php echo $password_error; ?></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                        </div>
                    </form>
                    
                    <p class="w-100 text-center">&mdash; Already have an account? <a href="login-form.php">Sign In</a> &mdash;</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src
