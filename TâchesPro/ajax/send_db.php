<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "TâchesPro";

$titr = '';
$contenu = '';
$date_creation = '';
$complete = '';
$prioritai = '';
$categorie = '';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$file_contents = file_get_contents('./file_inpourt/mytache.csv');
$array = explode("\n", $file_contents);
$array = array_filter($array, function($value) { return !is_null($value) && $value !== ''; });

foreach ($array as $line) {
    $array_line = explode(",", $line);
    
    $titr = isset($array_line[1]) ? $array_line[1] : '';
    $contenu = isset($array_line[2]) ? $array_line[2] : '';
    $date_creation = isset($array_line[3]) ? $array_line[3] : '';
    $complete = isset($array_line[4]) ? $array_line[4] : '';
    $prioritai = isset($array_line[5]) ? $array_line[5] : '';
    $categorie = isset($array_line[6]) ? $array_line[6] : '';
    
    $auteur_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
    
    $stmt = $conn->prepare("INSERT INTO taches (titre, contenu, date_creation, complete, prioritai, categorie, auteur_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sssssss", $titr, $contenu, $date_creation, $complete, $prioritai, $categorie, $auteur_id);

    if ($stmt->execute()) {
        echo 'successfully.';
    } 
    $stmt->close();
}

$conn->close();
?>
