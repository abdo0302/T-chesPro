<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['image'])) {
    $image = $_FILES['image'];
    $upload_dir = "img/";
    $file_path = $upload_dir . basename($image['name']);

    if (move_uploaded_file($image["tmp_name"], $file_path)) {
        $photo = $image['name'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "TâchesPro";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe, image, est_admin) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $name, $email, $hashed_password, $photo, $est_admin);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $hashed_password = $_POST['password'];
        $est_admin = 0;
        if ($stmt->execute()) {
            echo "Enregistré avec succès";
        } 
        $stmt->close();
        $conn->close();
    } 
} 
?>
