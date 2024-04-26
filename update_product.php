<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs requis sont définis et non vides
    if (
        isset($_POST["product_id"]) && isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["description"]) &&
        !empty($_POST["product_id"]) && !empty($_POST["name"]) && !empty($_POST["price"]) && !empty($_POST["description"])
    ) {

        // Récupérer les données du formulaire
        $product_id = $_POST["product_id"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $description = $_POST["description"];

        // Gérer l'upload de l'image
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image = 'assets/images/' . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        } else {
            // Si aucune image n'est téléchargée ou s'il y a une erreur lors du téléchargement, utilisez une valeur par défaut ou affichez un message d'erreur
            echo "Erreur lors du téléchargement de l'image.";
            exit(); // Arrêter l'exécution du script si une erreur se produit
        }

        // Effectuer la mise à jour du produit dans la base de données
        require_once('connexion.php');
        $db = new connexion();
        $dbc = $db->CNXbase();

        $stmt = $dbc->prepare("UPDATE products SET name = ?, price = ?, description = ?, image = ? WHERE id = ?");
        $stmt->execute([$name, $price, $description, $image, $product_id]);

        // Rediriger l'utilisateur vers la page products.php
        header("Location: products.php");
        exit(); // Arrêter l'exécution du script après la redirection
    } else {
        // Si des champs sont manquants, afficher un message d'erreur
        echo "Tous les champs sont obligatoires.";
    }
} else {
    // Si la requête n'est pas de type POST, rediriger l'utilisateur vers la page d'accueil ou afficher un message d'erreur
    echo "Erreur : méthode de requête invalide.";
}
