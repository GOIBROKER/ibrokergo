<?php
require_once("../../modal/entityusers.php");
require_once("../../utils/utils.php");

$entityusers = new entityusersmodal();
$utilsfront = new utilsphp();
session_start();
if (!empty($_POST['postactivatetable'])) {
// Muestra el resultado de 10 busquedas de usuarios ( HARDCODE)
$flagregistrosview = 12  ;
//


    if(empty($_SESSION['acumulaquery'])){
        $_SESSION['acumulaquery'] = 0;
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
