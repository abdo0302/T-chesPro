<?php
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
   } 
   if(isset($_POST['o'])){
    file_put_contents('../tache.csv','');
     $file=fopen('../tache.csv','a');
     fwrite($file,'id,titre,contenu,date_creation,complete,prioritai,categorie'."\n");
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";
        
    $conn = new mysqli($servername, $username, $password, $dbname);
    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
    $sql = "SELECT * FROM taches WHERE auteur_id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
           fwrite($file,$row['id'].",".$row['titre'].",".$row['contenu'].",".$row['date_creation'].",".$row['complete'].",".$row['prioritai'].",".$row['categorie']."\n");
        }
        echo "Exporté avec succès";
    }}
   fclose($file);
   }



?>
