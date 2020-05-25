<?php
require_once("../utils/utils.php");
require_once("../controllers/flagsystem.php");
require_once("../modal/entityusers.php");
require_once("../modal/entitynewservice.php");
$utilsphpregister = new utilsphp();
$entityusersmodal = new entityusersmodal();
$flags = new flags();
$entitynewservice = new entitynewservice();
session_start();
if(!empty($_POST['postactivaterse'])){
    $titulore = $utilsphpregister->depurateinfor($flags->tamanotitulos,$_POST['posttitulo'],"Titulo");
    $descripre = $utilsphpregister->depurateinfor($flags->tamanodescripcion,$_POST['postdetalle'],"Descripción");
    $postselect = $utilsphpregister->validarestados($_POST['postselect'],'precios','idprecio');
    if(!empty($titulore)){
        echo "<p class='text-danger'>".$titulore."</p>";
        
    }else if(!empty($descripre)){
        echo "<p class='text-danger'>".$descripre."</p>";
    }else if(empty($postselect)){
        echo "<p class='text-danger'> El Precio indicado no existe</p>";
    }else if($_SESSION['iduser'] == $_SESSION['idespeci']){
        echo "<p class='text-danger'> No puedes generar solicitudes para tu mismo usuario ;)</p>";
    }else{
        $entitynewservice->registrarservicio($_SESSION['iduser'],$_SESSION['idtservicioespe'],$_POST['posttitulo'],$_POST['postdetalle'],$_POST['postselect'],'1',$utilsphpregister->fecha(),'D',$_SESSION['idespeci']);
        echo "1";
    }

}
?>