<?php
require_once("../modal/entityhashuser.php");
$userhash = new userhash();

$userid = $_GET['iduser'];
$passurl = $_GET['token'];

$flag = $userhash->validarhash($userid,$passurl);
if($flag == 1){
    session_start();
    $_SESSION['useractivadotemp'] = "activado";
    header("location:../bienvenido/useractivado.php");
    
}else if($flag == 3){
    header("location:../bienvenido/index.php");
}else if($flag == 0){
    header("location:../bienvenido/index.php");
}else{
    header("location:../bienvenido/index.php");
}

?>