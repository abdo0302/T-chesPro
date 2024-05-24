<?php
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
   } 
   if(isset($_POST['o'])){
    file_put_contents('../tache.csv','');
     $file=fopen('../tache.csv','a');
     fwrite($file,'///////////Admin///////////'."\n");
     fwrite($file,"id,nom,email,mot_de_passe,image,est_admin"."\n");
     fwrite($file,$_SESSION['nom'].",".$_SESSION['email'].",".$_SESSION['mot_de_passe'].",".$_SESSION['image'].",".$_SESSION['id']."\n"."\n");
     fwrite($file,'///////////Users///////////'."\n");
     fwrite($file,"id,nom,email,mot_de_passe,image,est_admin"."\n");

    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";
        
    $conn = new mysqli($servername, $username, $password, $dbname);
              //users
    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
    $sql = "SELECT * FROM utilisateurs";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
           fwrite($file,$row['id'].",".$row['nom'].",".$row['email'].",".$row['mot_de_passe'].",".$row['image'].",".$row['est_admin']."\n");
        }
    }}

    fwrite($file,"\n\n".'///////////les Tache///////////'."\n");
fwrite($file,'id,titre,contenu,date_creation,complete,prioritai,categorie,auteur_id'."\n");

    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
    $sql = "SELECT * FROM taches";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
           fwrite($file,$row['id'].",".$row['titre'].",".$row['contenu'].",".$row['date_creation'].",".$row['complete'].",".$row['prioritai'].",".$row['categorie'].",".$row['auteur_id']."\n");
        }
    }}
   fclose($file);
   }



?>