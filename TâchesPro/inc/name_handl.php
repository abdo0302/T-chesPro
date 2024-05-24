<?php
   $logo_name=str_split($_SESSION['name']);
    for ($i=0; $i < 2; $i++) { 
       echo $logo_name[$i];
    }
 ?>