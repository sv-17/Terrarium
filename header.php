<?php
  session_start();
  if(empty($_SESSION["login_lock"])){ /* IF NO USERNAME REGISTERED TO THE SESSION VARIABLE */
    header("LOCATION:login_password.php"); /* REDIRECT USER TO LOGIN PAGE */
  }
?>