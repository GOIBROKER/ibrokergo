<?php
session_start();
require_once("../controllers/flagsystem.php");
$flags = new flags();
if(!empty($_POST['postwelcome'])){
  if(empty($_SESSION['count'])){
    $_SESSION['count'] = 0;
  }
  $count = $_SESSION['count'] = $_SESSION['count'] + 1;
  if($count <= $flags->id01){
    echo 1;
  }else{
    echo 0;
  }
}
  ?>





