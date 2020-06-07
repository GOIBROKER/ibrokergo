<?php
require_once("../modal/entityhashuser.php");
$userhash = new userhash();
session_start();
$userid = $_GET['iduser'];
$passurl = $_GET['token'];

$flag = $userhash->validarhash($userid,$passurl);
if($flag == 1){
    header("location:../bienvenido/useractivado.php");
    $_SESSION['useractivadotemp'];
}else if($flag == 3){
    header("location:../bienvenido/index.php");
}else if($flag == 0){
    header("location:../bienvenido/index.php");
}else{
    header("location:../bienvenido/index.php");
}

?>