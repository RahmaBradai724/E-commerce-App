<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST['user_name'], $_POST['email'], $_POST['phone'], $_POST['address1'], $_POST['city'], $_POST['quantity'], $_POST['product_name'])
    ) {
        // Retrieve username from cookie
        $username = $_COOKIE['username'];
        
        // Sanitize and retrieve form data
        $user_name = htmlspecialchars($_POST['user_name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $address1 = htmlspecialchars($_POST['address1']);
        $city = htmlspecialchars($_POST['city']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $product_name = htmlspecialchars($_POST['product_name']);

        // Insert data into the database
        require_once('connexion.php');
        $db = new connexion();
        $dbc = $db->CNXbase();

        $stmt = $dbc->prepare("INSERT INTO commands (user_connected, user_name, email, phone, address1, city, quantity, product_name) VALUES (:user_connected, :user_name, :email, :phone, :address1, :city, :quantity, :product_name)");
        $stmt->bindParam(':user_connected', $username); // Bind username to user_connected column
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address1', $address1);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->execute();

        header("Location: order_confirmation.php");
        exit();
    }
}
?>
