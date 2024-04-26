<?php
// Inclure la classe de connexion
require_once('connexion.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Gérer l'upload de l'image
    $image = 'assets/images/' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

    // Insérer les données dans la base de données
    $db = new connexion();
    $dbc = $db->CNXbase();
    $stmt = $dbc->prepare("INSERT INTO products (name, description, price, image) VALUES (:name, :description, :price, :image)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':image', $image);
    $stmt->execute();

    // Redirection vers la page d'accueil après l'ajout du produit
    header("Location: products.php");
    exit();
}
?>
