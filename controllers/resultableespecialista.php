<?php
require_once("../modal/entityusers.php");
require_once("../utils/utils.php");

$entityusers = new entityusersmodal();
$utilsfront = new utilsphp();
session_start();
if (!empty($_POST['postactivatetable'])) {
// Muestra el resultado de 10 busquedas de usuarios ( HARDCODE)
$flagregistrosview = 3  ;
//


    if(empty($_SESSION['acumulaquery'])){
        // Este flag se debe de cambiar , si la presentacion principal es 12 aqui se debe colocar 12
        $_SESSION['acumulaquery'] = 3;
    }
    if(empty($_SESSION['suma'])){
        $_SESSION['suma'] = 0;
    }
    $_SESSION['acumulaquery'] = $_SESSION['acumulaquery'] + $_SESSION['suma'];
    echo "</br>";   
    echo "<div class='row'>";
    foreach ($entityusers->listaruserxlimit($_SESSION['acumulaquery'],$flagregistrosview) as $foreachuserlimit){

        echo "<div class='col-md-4'>";
        echo "<div class='card text-center'>";
        echo "<div class='card-header primary-color white-text'>";
        echo "Soy .: ".$foreachuserlimit['nameandlast'];
        echo "</div>";
        echo "<div class='card-body'>";
        echo "<h4 class='card-title'>Mi trabajo.: </h4>";
        echo "<p class='card-text'> Hola .: ".$utilsfront->cortartexto($foreachuserlimit['present'])."</p>";
        echo "<a class='btn btn-success btn-sm waves-effect waves-light' onclick='verifyuser(".$foreachuserlimit['iduser'].")' >Contactar</a>";
        echo "</div>";
        echo "<div class='card-footer text-muted success-color white-text'>";
        echo "<p class='mb-0'>Atención.:";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "</p>";
        echo "Lima - San Luis";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        
        
    }
    echo "</div>";
  
    $_SESSION['suma'] = $flagregistrosview;

    // Valor que indica la iteración
   
}

if(!empty($_POST['postactespec'])){
    
    // Tipo de usuario 2 = Especialista - 1 = Clientes
    $tipuser ='2';
    // Cantidad de registros los que se mostraran en el inicio - En producción colocarlo en 12
    $Cantregi = '3';
    echo "<div class='row'>";
    foreach($entityusers->listaruserxtip($tipuser,$Cantregi) as $fcantregistros){
        echo "<div class='col-md-4'>";
        echo "<div class='card text-center'>";
        echo "<div class='card-header primary-color white-text'>";
        echo "Soy .: ".$fcantregistros['nameandlast'];
        echo "</div>";
        echo "<div class='card-body'>";
        echo "<h4 class='card-title'>Mi trabajo.: </h4>";
        echo "<p class='card-text'> Hola .: ".$utilsfront->cortartexto($fcantregistros['present'])."</p>";
        echo "<a class='btn btn-success btn-sm waves-effect waves-light' onclick='verifyuser(".$fcantregistros['iduser'].")' >Contactar</a>";
        echo "</div>";
        echo "<div class='card-footer text-muted success-color white-text'>";
        echo "<p class='mb-0'>Atención.:";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "</p>";
        echo "Lima - San Luis";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
}

