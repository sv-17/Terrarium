<?php
  session_start();
  unset($_SESSION["login_lock"]);
  header("LOCATION:login_password.php");
?>