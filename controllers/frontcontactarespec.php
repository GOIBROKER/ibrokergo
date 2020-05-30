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

if(!empty($_SESSION['idespeci'])){
    $_SESSION['idespeci'] = "";
}
$_SESSION['idespeci'] =$_POST['postcodespecialist'];
// Abrir sesiones para el uso en otros módulos
$_SESSION['idtservicioespe'] = $fdescripespeci['idtipservicio'];
// fin
echo "<div class='container'>";
echo "<div class='w-100'></div>";
echo "<div class='col col-example'>";
echo "<div class='card'>";
echo "<div class='card-body'>";

echo "<p class='text-primary'><center><strong>Mi servicio es .: ".$fdesserv['name']."</center></strong></br> Nombre.: ".$fdescripespeci['nameandlast']."</br>Ubicación .: ".$fubigeo['provincia'].",".$fubigeo['distrito']."</p>";

echo $fdescripespeci['present'];
echo "</div>";
echo "</div>";
echo "</div>";
echo "<div class='row'>";
echo "<div class='col col-example'>";
echo "<div class='md-form'>";
echo "<input type='text' id='txttitulo' class='form-control'>";
echo "<label for='txttitulo'>Título para el trabajo</label>";
echo "</div>";
echo "</div>";
echo "<div class='col col-example'>";
echo "<div class='md-form mb-4 pink-textarea active-pink-textarea-2'>";
echo "<i class='fas fa-angle-double-right prefix'></i>";
echo "<textarea id='txtdetalleob' class='md-textarea form-control' rows='3'></textarea>";
echo "<label for='txtdetalleob'>Dar más detalle</label>";
echo "</div>";
echo "</div>";
echo "<div class='w-100'></div>";
echo "<div class='col col-example'>";
echo "<select class='browser-default custom-select' id='selectserv'>";
echo "<option value=''>Precio referencial de tu servicio</option>";
foreach($preciosaprox->mostrarprecios() as $fmostrarprecios){
    echo "<option value='".$fmostrarprecios['idprecio']."'>".$fmostrarprecios['rango']."</option>";
}
echo "</select>";
echo "<div id='errorfrontcontact'></div>";
echo "</div>";
echo "</div>";
echo "</div>";
}
?>