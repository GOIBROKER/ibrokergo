<?php

session_start();
require_once("../utils/utils.php");
require_once("../modal/entityprecios.php");
require_once("../modal/entityusers.php");
require_once("../modal/entitynewservice.php");
require_once("../modal/serviciosmodal.php");
require_once("../modal/entityubicacion.php");

$preciosaprox = new preciosaprox();
$utilscontac = new utilsphp();
$entityusersmodal = new entityusersmodal();
$serviciosmodal2 = new serviciosmodal();
$modalubicacion = new modalubicacion();

if(!empty($_POST['postverifyregistro'])){
    echo $flagexistregistro = $utilscontac ->vregisteruser($_SESSION['email']);
}

if(!empty($_POST['postactivatecontaces'])){
    if(!empty($_SESSION['email'])){
        $sessionval = $_SESSION['email'];
    }else{
        $sessionval = "";
    }

    echo $utilscontac->validatesesion($sessionval);


}
// Si la sesión esta activa devolvera un 1 , caso contrario un 0
if(!empty($_POST['postmodal'])){


foreach ($entityusersmodal->listarxiduser($_POST['postcodespecialist']) as $fdescripespeci){
    
}
foreach ($serviciosmodal2->listarserviciosxcodfull($fdescripespeci['idtipservicio']) as $fdesserv){
  
}

foreach ($modalubicacion->selectdataubigeo($fdescripespeci['ubigeo']) as $fubigeo){

}
    //Vamos a crear una sesion para enviar la información del idespecialista
    // Condicional para vacear la sesión cada vez que se ingrese a esta opción

    if (!empty($_SESSION['idespeci'])) {
        $_SESSION['idespeci'] = "";
    }
    $_SESSION['idespeci'] = $_POST['postcodespecialist'];
    // Abrir sesiones para el uso en otros módulos
    $_SESSION['idtservicioespe'] = $fdescripespeci['idtipservicio'];
    // fin


    echo "<div class='card border-primary mb-3' style='max-width: 960px;'>";
    echo "<div class='row no-gutters'>";
    echo "<div class='col-md-4'>";
    echo "<img src='frontend/assets/img/logobig.png' class='card-img' alt='150x150' style='width: 150px; height: 150px;'>";
    echo "</div>";
    echo "<div class='col-md-8'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>".$fdescripespeci['nameandlast']."</h5>";
    echo "<p class='card-text'>".$fdescripespeci['present'].".</p>";
    echo "<p class='card-text'><small class='text-muted'>Gracias por usar BrokerGo!</small></p>";
    echo "<h6 class='card-title'> <i class='fas fa-briefcase' style='font-size:28px'></i> Mi servicio es de .:".$fdesserv['name']."</h6>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "<div class='card bg-light mb-3'  style='max-width: 960px;'>";

    echo "<div class='card-body'>";
    echo "<h5 class='card-title'><i class='fas fa-user-tie' style='font-size:15px'></i>Enviame tu inconveniente.:</h5>";
    echo "<p class='card-text'>Hazle saber tu necesidad al especialista.</p>";
    echo "<form>";
    echo "<div class='form-group'>";
    echo "<label for='txttitulo'>Titúlo de Inconveniente</label>";
    echo "<input type='text' class='form-control' id='txttitulo' placeholder='Problema con mi Laptop LENOVO G45'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='txtdetalleob'>Brindanos mas detalle</label>";
    echo "<textarea class='form-control' id='txtdetalleob' rows='3'></textarea>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<select class='browser-default custom-select' id='selectserv'>";
    echo "<option value=''>Precio referencial de tu servicio</option>";
    foreach ($preciosaprox->mostrarprecios() as $fmostrarprecios) {
        echo "<option value='" . $fmostrarprecios['idprecio'] . "'>" . $fmostrarprecios['rango'] . "</option>";
    }
    echo "</select>";
    echo "</div>";
    echo "<div id='errorfrontcontact'></div>";
    echo "</form>";
    echo "</div>";
    echo "</div>";


}
?>