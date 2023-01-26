<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pass = $_POST['pw2'];

if($pass != "bark")
  {
    header("Location: wrong.php");
    exit();
  }
  else {
    header("Location: /owen-wilson.php");
    exit();
  };
?>