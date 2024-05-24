<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['title']) && isset($_POST['Description']) && isset($_POST['Date']) && isset($_POST['complete']) && isset($_POST['prioritai']) && isset($_POST['catégori'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "TâchesPro";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("INSERT INTO taches (titre, contenu, date_creation, complete, prioritai, categorie, auteur_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    
    $title = $_POST['title'];
    $Description = $_POST['Description'];
    $Date = $_POST['Date'];
    $complete = $_POST['complete'];
    $prioritai = $_POST['prioritai'];
    $catégori = $_POST['catégori'];
    $auteur_id = $_SESSION['id'];

    $stmt->bind_param("sssssss", $title, $Description, $Date, $complete, $prioritai, $catégori, $auteur_id);

    if ($stmt->execute()) {
        echo 'yas';
    } else {
        echo 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
