<?php
session_start();
    if(!empty($_POST['postactivatedeletesesion'])){
       // sesiones que se eliminaran y se vuelvan 0 , se usan para el resultado de tablas
        $_SESSION['acumulaquery'] ="";
        $_SESSION['suma']="";
        //--------------------------------------
        //Sesion de ubigeo destruida
        $_SESSION['ubigeofron']="";
    }
?>