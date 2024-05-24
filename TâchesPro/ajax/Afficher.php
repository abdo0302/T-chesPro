<?php
  if(isset($_POST['tach_Afficher'])){
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $tach_Afficher = mysqli_real_escape_string($conn, $_POST['tach_Afficher']);
     
    $sql = "SELECT * FROM taches WHERE titre='$tach_Afficher'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            echo ' <div class="contenar_afficher">
            <h3>'.$row['titre'].'</h3>
            <p>'.$row['contenu'].'</p>
            <div class="da">
               <h3 class="date">Date <span class="date_type">'.$row['date_creation'].'</span></h3>
               <span class="complete">la tache <span class="complete_type">'.$row['complete'].'</span></span>
            </div>
            <div>
               <span class="prioritai">prioritai <span class="prioritai_type">'.$row['prioritai'].'</span></span>
               <span class="categorie">categorie <span class="categorie_type">'.$row['categorie'].'</span></span>
            </div>
         </div>';
            }}}
  }

?>