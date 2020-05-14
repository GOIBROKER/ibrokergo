<?php
require_once("../modal/entityusers.php");
require_once("../utils/utils.php");
require_once("../modal/entityubicacion.php");

$entityusers = new entityusersmodal();
$utilsfront = new utilsphp();
$entityubic = new modalubicacion();
session_start();
if (!empty($_POST['postactivatetable'])) {
// Muestra el resultado de 10 busquedas de usuarios ( HARDCODE)
$flagregistrosview = 12  ;
//


    if(empty($_SESSION['acumulaquery'])){
        // Este flag se debe de cambiar , si la presentacion principal es 12 aqui se debe colocar 12
        $_SESSION['acumulaquery'] = 3;
    }
    if(empty($_SESSION['suma'])){
        $_SESSION['suma'] = 0;
    }
    $_SESSION['acumulaquery'] = $_SESSION['acumulaquery'] + $_SESSION['suma'];

    foreach ($entityusers->listaruserxlimit($_SESSION['acumulaquery'],$flagregistrosview) as $foreachuserlimit){
        echo "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>";
        echo "<div class='d-flex w-100 justify-content-between'>";
        echo "<h6 class='mb-1'><p class='text-dark'><strong>Especialista .: ".$foreachuserlimit['nameandlast']."</strong></p></h6>";
        echo "</br>";
        echo "<small>".$entityubic->mnameubic($foreachuserlimit['ubigeo'])."</small>";
        echo "</div>";
        echo "<p class='mb-1'>".$utilsfront->cortartexto($foreachuserlimit['present'])."</p>";
        echo "<p class='text-warning'><small><strong>Calidad de Atención.:</strong>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "</small></p>";
        echo "<strong><small>35 usuarios lo recomiendan</small></strong>";
        echo "</br>";
        echo "<button type='button' class='btn btn-primary' onclick='verifyuser(".$foreachuserlimit['iduser'].")'>Contactar</button>";
        echo "</a>";     
    }
    
  
    $_SESSION['suma'] = $flagregistrosview;

    // Valor que indica la iteración
   
}

if(!empty($_POST['postactespec'])){
    
    // Tipo de usuario 2 = Especialista - 1 = Clientes
    $tipuser ='2';
    // Cantidad de registros los que se mostraran en el inicio - En producción colocarlo en 12
    $Cantregi = '12';
 
    foreach($entityusers->listaruserxtip($tipuser,$Cantregi) as $fcantregistros){

        echo "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>";
        echo "<div class='d-flex w-100 justify-content-between'>";
        echo "<h6 class='mb-1'><p class='text-dark'><strong>Especialista .: ".$fcantregistros['nameandlast']."</strong></p></h6>";
        echo "</br>";
        echo "<small>".$entityubic->mnameubic($fcantregistros['ubigeo'])."</small>";
        echo "</div>";
        echo "<p class='mb-1'>".$utilsfront->cortartexto($fcantregistros['present'])."</p>";
        echo "<p class='text-warning'><small><strong>Calidad de Atención.:</strong>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "</small></p>";
        echo "<strong><small>35 usuarios lo recomiendan</small></strong>";
        echo "</br>";
        echo "<button type='button' class='btn btn-primary'>Contactar</button>";
        echo "</a>";
        
        
    }
}

if (!empty($_POST['postactivatesearch'])) {
    


    // Validar vacios - Valor por defecto
    if(empty($_POST['postvalidateubic'])){
        $_SESSION['ubigeofron'] = "";
    }

    if(!empty($_SESSION['ubigeofron'])){
        $ubigeofron = $_SESSION['ubigeofron'];
    }else{
        $ubigeofron = "";
    }

    if(!empty($_POST['posttuser'])){
        $posttuser = $_POST['posttuser'];
    }else{
        $posttuser ="";
    }

    if(!empty($_POST['postidentipservicio'])){
        $postidentipservicio = $_POST['postidentipservicio'];
    }else{
        $postidentipservicio = "";
    }

    if(!empty($_POST['posttxtsearchbar'])){
        $posttxtsearchbar = $_POST['posttxtsearchbar'];
    }else{
        $posttxtsearchbar = "";
    }

    $tipouser ='2';// Tipo de usuario especialista , no aplica para cliente , solo para trabajos
    echo $ubigeofron;
    foreach($entityusers->filtrobusqfront($postidentipservicio,$tipouser,$posttxtsearchbar,$ubigeofron) as $fquereseach){
        
        echo "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>";
        echo "<div class='d-flex w-100 justify-content-between'>";
        echo "<h6 class='mb-1'><p class='text-dark'><strong>Especialista .: ".$fquereseach['nameandlast']."</strong></p></h6>";
        echo "</br>";
        echo "<small>".$entityubic->mnameubic($fquereseach['ubigeo'])."</small>";
        echo "</div>";
        echo "<p class='mb-1'>".$utilsfront->cortartexto($fquereseach['present'])."</p>";
        echo "<p class='text-warning'><small><strong>Calidad de Atención.:</strong>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='far fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "<i class='fas fa-star'></i>";
        echo "</small></p>";
        echo "<strong><small>35 usuarios lo recomiendan</small></strong>";
        echo "</br>";
        echo "<button type='button' class='btn btn-primary'>Contactar</button>";
        echo "</a>";
    }

}
