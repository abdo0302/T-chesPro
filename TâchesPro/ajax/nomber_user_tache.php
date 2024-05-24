<?php
  if(isset($_POST['t'])){
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";
    $nomber_tach=0;
    $nomber_users=0;
        
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM utilisateurs ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {$nomber_users++;}}}

    $sql = "SELECT * FROM taches ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {$nomber_tach++;}}}    

    echo '<div class="nomber_users">
    <img src="./img/icons8-users (1).gif" alt="">
    <span>'.$nomber_users.'</span></div>
    <div class="nomber_tach">
    <img src="./img/icons8-list.gif" alt="">
    <span>'.$nomber_tach.'</span></div>';

  }
?>