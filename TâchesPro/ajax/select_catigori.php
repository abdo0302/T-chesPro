<?php
 if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  if(isset($_POST['Ctegori'])){
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";
        
    $conn = new mysqli($servername, $username, $password, $dbname);
    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
    $categorie = mysqli_real_escape_string($conn, $_POST['Ctegori']);
    $sql = "SELECT * FROM taches WHERE auteur_id='$id' AND categorie='$categorie'";
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


?>