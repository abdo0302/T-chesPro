<?php
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST['tach_supprimer'])){
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $tach_supprimer = mysqli_real_escape_string($conn, $_POST['tach_supprimer']);
    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
    $sql = "DELETE FROM taches WHERE titre='$tach_supprimer'";
     if(mysqli_query($conn, $sql)){
        $sql = "SELECT * FROM taches WHERE auteur_id='$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card_tach">
                        <h5>'.$row["titre"].'</h5>
                        <div class="continar_buttons">
                            <button class="'.htmlspecialchars($row["titre"]).' Afficher">Afficher</button>
                            <button class="'.htmlspecialchars($row["titre"]).' modifier">modifier</button>
                            <button class="'.htmlspecialchars($row["titre"]).' supprimer">supprimer</button>
                        </div>     
                    </div>';
            }}}
     }
}




?>