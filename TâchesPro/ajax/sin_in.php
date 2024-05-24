<?php
 if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (isset($_POST['emaill']) && isset($_POST['pass'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";

    $email = $_POST['emaill'];
    $pass = $_POST['pass'];
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Sanitize user inputs
    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $pass);

    $sql = "SELECT * FROM utilisateurs WHERE email='$email' AND mot_de_passe='$pass'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if($row['est_admin']==0){
                   echo 'user';
                }elseif($row['est_admin']==1){
                  echo 'admin';
                }
                 $_SESSION['nom']=$row['nom'];
                 $_SESSION['email']=$row['email'];
                 $_SESSION['mot_de_passe']=$row['mot_de_passe'];
                 $_SESSION['image']=$row['image'];
                 $_SESSION['id']=$row['id'];
            }
        } else {
            echo "non enregistré";
        }
    } 
    mysqli_close($conn);
}
?>
