<?php
   session_start();
   if(session_destroy()) {
      header("Location:adminLogin.php", true, 301);
      exit;
   }
?>