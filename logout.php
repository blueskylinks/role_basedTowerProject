<?php
 session_start();

  echo "Logout Successfully ";
  session_destroy();   // function that Destroys Session 
   unset($_SESSION['admin_use']);
    unset($_SESSION['user_use']);
  header("Location: Loginpage.php");
?>