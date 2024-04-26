<?php
echo "<script>localStorage.removeItem('user-role');</script>";
echo "<script>console.log('login started');</script>";



// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    require_once('connexion.php');
    $db = new connexion();
    $dbc = $db->CNXbase();
    $stmt = $dbc->prepare("SELECT * FROM user WHERE username='$username' and password ='$password' LIMIT 1");
    $stmt->execute(); 
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user["role"]){
        setcookie("user-role", 'guest',time() + (86400 * 30), "/");
    }
    else{
        setcookie("user-role", $user["role"],time() + (86400 * 30), "/");
    }
    //setcookie("user-role", $user["role"],time() + (86400 * 30), "/");
    setcookie("username", $username,time() + (86400 * 30), "/");

    echo $user["role"];
    print($_COOKIE['user-role']);
    header("Location: index.php");
    exit();
} else {
    // Si la méthode de requête n'est pas POST, rediriger vers la page de connexion avec un message d'erreur
    header("Location: login.php?error=method_not_allowed");
    exit();
}
?>