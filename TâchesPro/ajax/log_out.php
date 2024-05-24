<?php
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
 }
  if(isset($_POST['out'])){
    if($_POST['out']=='ok'){
        session_destroy();
        echo 'ok';
    }
  }

?>