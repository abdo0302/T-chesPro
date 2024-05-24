<?php
  if(isset($_POST['t'])){
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";
        
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM categories ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value='.$row["nom"].'>'.$row["nom"].'</option>';
        }}}
  }
?>