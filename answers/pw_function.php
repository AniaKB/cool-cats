<?php
function pw($correctpw){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pass = $_POST['pw1'];

if($correctpw != $correctpw)
  {
    header("Location: wrong.php");
    exit();
  }
}
?>