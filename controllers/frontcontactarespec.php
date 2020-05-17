<?php

session_start();
require_once("../utils/utils.php");
$utilscontac = new utilsphp();
if(!empty($_POST['postactivatecontaces'])){
    if(!empty($_SESSION['email'])){
        $sessionval = $_SESSION['email'];
    }else{
        $sessionval = "";
    }

    echo $utilscontac->validatesesion($sessionval);


}
// Si la sesión esta activa devolvera un 1 , caso contrario un 0

?>