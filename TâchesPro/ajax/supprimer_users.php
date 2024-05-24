<?php
if(isset($_POST['users_supprimer'])){
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $users_supprimer = mysqli_real_escape_string($conn, $_POST['users_supprimer']);
    
    $sql = "DELETE FROM taches WHERE auteur_id='$users_supprimer'";//
     if(mysqli_query($conn, $sql)){
        $sql = "DELETE FROM utilisateurs WHERE id='$users_supprimer'";
     if(mysqli_query($conn, $sql)){
        $sql = "SELECT * FROM utilisateurs";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="cl_us">
                <div class="log_name"><img src="./ajax/img/'.$row["image"].'" alt=""></div>
                '.$row["nom"].'
                <button class="'.htmlspecialchars($row["nom"]).' button_sup">supprimer</button>
            </div>';
            }}}
     }
     }
    
    
}


?>