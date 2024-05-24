<?php
  if(isset($_POST['color'])){
      setcookie('color',$_POST['color'],time() + 3600 * 24 * 30);
      echo $_COOKIE['color'];
  }


?>