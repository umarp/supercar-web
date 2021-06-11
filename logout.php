<?php
   session_start();
   if(session_destroy()) {
      header("Location:Index.php", true, 301);
      exit;
   }
?>