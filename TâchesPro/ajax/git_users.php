<?php
  if(isset($_POST['t'])){
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";
        
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM utilisateurs ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="cl_us">
            <div class="log_name"><img src="./ajax/img/'.$row["image"].'" alt=""></div>
            '.$row["nom"].'
            <button class="'.htmlspecialchars($row["id"]).' button_sup">supprimer</button>
        </div>';
        }}}
  }
?>