<?php
require_once("../../modal/entityusers.php");
$entityusers = new entityusersmodal();
session_start();
if (!empty($_POST['postactivatetable'])) {
// Muestra el resultado de 10 busquedas de usuarios ( HARDCODE)
$flagregistrosview = 3;
//
    if(empty($_SESSION['acumulaquery'])){
        $_SESSION['acumulaquery'] = 0;
    }
    if(empty($_SESSION['suma'])){
        $_SESSION['suma'] = 0;
    }
    $_SESSION['acumulaquery'] = $_SESSION['acumulaquery'] + $_SESSION['suma'];

    foreach ($entityusers->listaruserxlimit($_SESSION['acumulaquery'],$flagregistrosview) as $foreachuserlimit){
        echo "<li class='list-group-item'>";
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<h6 class='card-subtitle mb-2 text-muted'>Nombre.: ".$foreachuserlimit['nameandlast']." - Lima, San Luis</h6>";
        echo "Hola.: Soy especialista de Jaime , espero les guste mi trabajo";
        echo "<div>";
        echo "<button type='button' class='btn btn-outline-primary waves-effect'><i class='fas fa-sun pr-2' aria-hidden='true'></i>Contactar</button>";
        echo "</div>";
        echo "</div>";
        echo "<div class='card-footer text-muted'>";
        echo "Recomendación .:";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "</div>";
        echo "</div>";
        echo "</li>";
    }
    $_SESSION['suma'] = $flagregistrosview;

    // Valor que indica la iteración
   
}
