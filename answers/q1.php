<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pass = $_POST['pw1'];

if($pass !== "bark")
  {
    header("Location: wrong.php");
    exit();
  }
  else {
    header("Location: q1.php");
    exit();
  }
?>