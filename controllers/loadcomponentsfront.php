<?php
session_start();
require_once("../utils/utils.php");
$utilsbutton = new utilsphp();
if(!empty($_POST['postbuttonactuvar'])){
if(!empty($_SESSION['email'])){
    $sessionuser = $_SESSION['email'];
}else{
        $sessionuser = "";
    }
    if ($utilsbutton->validatesesion($sessionuser) == 0) {
        echo "<a class='dropdown-item' href='registergo.php'>Registrate</a>";
        echo "<a class='dropdown-item' data-toggle='modal' data-target='#modalLRForm' href='#'>Iniciar Sesión</a>";
    } else if(($utilsbutton->validatesesion($sessionuser) == 1)){
        echo "<li class='nav-item'>";
        echo "<a href='../controllers/sessiondestroy.php' class='nav-link border border-light rounded' >Cerrar Sesión <i class='fas fa-eye ml-1'></i></a>";
        echo "</li>";
        echo "<li class='nav-item'>";
        echo "<a href='miespacio.php' class='nav-link border border-light rounded' target='_blank'>";
        echo "<i class='waves-effect mdb-icon-copy far fa-user'></i>Ir a mi panel";
        echo "</a>";
        echo "</li>";
    }
}
if(!empty($_POST['postloadb'])){
    if(!empty($_SESSION['email'])){
        $sessionuser = $_SESSION['email'];
    }else{
            $sessionuser = "";
        }
        if ($utilsbutton->validatesesion($sessionuser) == 0) {
           echo "Iniciar Sesión";
        } else if(($utilsbutton->validatesesion($sessionuser) == 1)){
            echo "Sesión Iniciada - Ver";
        }
}

?>