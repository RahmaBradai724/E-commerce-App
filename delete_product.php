<?php
// Vérifie si l'ID du produit à supprimer est transmis dans l'URL
if (isset($_GET['id'])) {
    // Récupère l'ID du produit depuis l'URL
    $product_id = $_GET['id'];

    // Inclut le fichier de connexion à la base de données
    require_once('connexion.php');
    $db = new connexion();
    $dbc = $db->CNXbase();

    // Requête SQL pour supprimer le produit de la base de données
    $stmt = $dbc->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$product_id]);

    // Redirige l'utilisateur vers la page products.php après la suppression
    header("Location: products.php");
    exit(); // Arrête l'exécution du script après la redirection
} else {
    // Si l'ID du produit n'est pas transmis, affiche un message d'erreur
    echo "Erreur : ID du produit manquant.";
}
?>
