<?php
require_once("../modal/entityusers.php");
require_once("../utils/utils.php");
require_once("../modal/entityubicacion.php");

$entityusers = new entityusersmodal();
$utilsfront = new utilsphp();
$entityubic = new modalubicacion();
session_start();
if (!empty($_POST['postactivatetable'])) {

    if(empty($_SESSION['lastidentipservicio'])){
        $_SESSION['lastidentipservicio']="";
    }
    if(empty($_SESSION['lasttxtsearchbar'])){
        $_SESSION['lasttxtsearchbar']="";
    }
    if(empty($_SESSION['ubigeofron'])){
        $_SESSION['ubigeofron']="";
    }
    echo $_SESSION['lastidentipservicio']."-".$_SESSION['lasttxtsearchbar']. $_SESSION['ubigeofron'];
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


    if (empty($_POST['postvalidateubic'])) {
        $_SESSION['ubigeofron'] = "";
    }
    if (empty($_SESSION['ubigeofron'])) {
        $_SESSION['ubigeofron'] = "";
    }

    if (empty($_POST['posttuser'])) {
        $_POST['posttuser'] = "";
    }

    if (empty($_POST['postidentipservicio'])) {
        $_POST['postidentipservicio'] = "";

    }else{$_SESSION['lastidentipservicio'] = $_POST['postidentipservicio'];}

    if (empty($_POST['posttxtsearchbar'])) {
        $_POST['posttxtsearchbar'] = "";
        $_SESSION['lasttxtsearchbar']="";
    }else{$_SESSION['lasttxtsearchbar'] = $_POST['posttxtsearchbar'];}

    $tipouser = '2'; // Tipo de usuario especialista , no aplica para cliente , solo para trabajos
    //--------------------------------------
    // // Muestra el resultado de 10 busquedas de usuarios ( HARDCODE)
    // $flagregistrosview = 5;
    // //----------------------

    // if (empty($_SESSION['acumulaquery'])) {
    //     // Este flag se debe de cambiar , si la presentacion principal es 12 aqui se debe colocar 12
    //     $_SESSION['acumulaquery'] = 0;
    // }
    // if (empty($_SESSION['suma'])) {
    //     $_SESSION['suma'] = 0;
    // }
    // $_SESSION['acumulaquery'] = $_SESSION['acumulaquery'] + $_SESSION['suma'];
    // //---------------------

    // echo $_SESSION['acumulaquery'] . " - " . $_SESSION['suma'] . " - " . $_SESSION['ubigeofron'] ;

    
    foreach ($entityusers->filtrobusqfront($_POST['postidentipservicio'], $tipouser, $_POST['posttxtsearchbar'], $_SESSION['ubigeofron'], 0, 12) as $fquereseach) {

        echo "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>";
        echo "<div class='d-flex w-100 justify-content-between'>";
        echo "<h6 class='mb-1'><p class='text-dark'><strong>Especialista .: " . $fquereseach['nameandlast'] . "</strong></p></h6>";
        echo "</br>";
        echo "<small>" . $entityubic->mnameubic($fquereseach['ubigeo']) . "</small>";
        echo "</div>";
        echo "<p class='mb-1'>" . $utilsfront->cortartexto($fquereseach['present']) . "</p>";
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

    // $_SESSION['suma'] = $flagregistrosview;

    // // Cuando no se encuentren resultados, volvera a cero
    // if(!empty($fquereseach['nameandlast'])){
    //     // echo "El número de resultados es .:";
    // }else{
    //     echo $_SESSION['suma'] = "";
    //     echo $_SESSION['acumulaquery'] = "";
    //     echo "No existe mas resultados de Busqueda";
    // }
}
