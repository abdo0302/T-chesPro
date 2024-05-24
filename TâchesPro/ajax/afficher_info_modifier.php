<?php
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "TâchesPro";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $tach_modifier = mysqli_real_escape_string($conn, $_POST['tach_modifier']);
     
    $sql = "SELECT * FROM taches WHERE titre='$tach_modifier'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              if($row['complete']=='incomplete'){
                echo '<div><span>Titre</span></div>
                <input type="text" class="input_tetle input_tetle_modifier" value='.$row["titre"].'>
                <div><span>Description</span></div>
                <input type="text" class="input_Description input_Description_modifier" value='.$row["contenu"].'>
                <div class="d2">
                   <div>
                      <select name="" id="" class="complete modifier_complete" value="completet">
                         <option value="incomplete" selected>incomplete</option>
                         <option value="completet">completet</option>
                      </select>
                   </div>
                </div>
                <div>
                      <button class="modifier_tach" id='.$row["titre"].'>submit</button>
                 </div>';
              }elseif($row['complete']=='completet'){
                echo '<div><span>Titre</span></div>
                <input type="text" class="input_tetle input_tetle_modifier" value='.$row["titre"].'>
                <div><span>Description</span></div>
                <input type="text" class="input_Description input_Description_modifier" value='.$row["contenu"].'>
                <div class="d2">
                   <div>
                      <select name="" id="" class="complete modifier_complete" value="completet">
                         <option value="incomplete">incomplete</option>
                         <option value="completet" selected>completet</option>
                      </select>
                   </div>
                </div>
                <div>
                      <button class="modifier_tach" id='.$row["titre"].'>submit</button>
                </div>';
              }
            }}}
?>