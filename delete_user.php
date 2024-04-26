<?php
// Vérifier si l'ID de l'utilisateur à supprimer est passé en paramètre dans l'URL
if(isset($_GET['id'])) {
    // Récupérer l'ID de l'utilisateur depuis l'URL
    $user_id = $_GET['id'];

    // Connexion à la base de données
    require_once('connexion.php');
    $db = new connexion();
    $dbc = $db->CNXbase();

    // Préparer la requête SQL pour supprimer l'utilisateur de la base de données
    $stmt = $dbc->prepare("DELETE FROM user WHERE id = ?");
    $stmt->execute([$user_id]);

    // Rediriger l'utilisateur vers la page user_list.php après la suppression
    header("Location: users_list.php");
    exit(); // Arrêter l'exécution du script après la redirection
} else {
    // Si l'ID n'est pas fourni, afficher un message d'erreur
    echo "Erreur : ID de l'utilisateur non spécifié.";
}
?>
