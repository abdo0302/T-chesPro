<?php
echo 'jjj';
if(isset($_POST['t']) && isset($_POST['titre']) && isset($_POST['discription']) && isset($_POST['complete'])){
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";
         
    $ltitre=$_POST['t'];
    $titre=$_POST['titre'];
    $description=$_POST['discription'];
    $completet=$_POST['complete'];

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "UPDATE taches SET titre='$titre' , contenu='$description' , complete='$completet' WHERE titre='$ltitre'";
          
    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } 

  mysqli_close($conn);
}


?>