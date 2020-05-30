<?php
require_once("../modal/entityusers.php");
require_once("../utils/utils.php");
require_once("../modal/entityubicacion.php");
require("../controllers/flagsystem.php");
require_once("../modal/entityviews.php");

$entityusers = new entityusersmodal();
$utilsfront = new utilsphp();
$entityubic = new modalubicacion();
$flagsystem = new flags();
$viewscalculate = new viewscalculate();
session_start();

$flaginiciosearch = '2';


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




  // Flag que muestra  la cantidad de registros que se va a visualizar
    $flagregistrosview = $flagsystem->flagviewregister;
    //----------------------

    if (empty($_SESSION['acumulaquery'])) {
     
        $_SESSION['acumulaquery'] = 0;
    }
    if (empty($_SESSION['suma'])) {
        $_SESSION['suma'] = $flagsystem->flagviewregister ;
    }
    $_SESSION['acumulaquery'] = $_SESSION['acumulaquery'] + $_SESSION['suma'];
    //---------------------

    $tipouser = '2';
    foreach ($entityusers->filtrobusqfront($_SESSION['lastidentipservicio'], $tipouser, $_SESSION['lasttxtsearchbar'],$_SESSION['ubigeofron'], $_SESSION['acumulaquery'], $_SESSION['suma']) as $lastfquereseach) {

        echo "<a  class='list-group-item list-group-item-action flex-column align-items-start' id='".$lastfquereseach['iduser']."' onclick='validatesession(this.id)'>";
        echo "<div class='d-flex w-100 justify-content-between'>";
        echo "<h6 class='mb-1'><p class='text-dark'><strong>Especialista .: " . $lastfquereseach['nameandlast'] . "</strong></p></h6>";
        echo "</br>";
        echo "<small>" . $entityubic->mnameubic($lastfquereseach['ubigeo']) . "</small>";
        echo "</div>";
        echo "<p class='mb-1'>" . $utilsfront->cortartexto($lastfquereseach['present']) . "</p>";
        echo "<h5><p class='text-danger'><small><strong>Calidad en.:</strong>";
        echo $viewscalculate->calculastar($lastfquereseach['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado,$flagsystem->flagpoints);
        echo "| Seguridad anti-Covid".$viewscalculate->calculastar($lastfquereseach['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado,$flagsystem->flagcovid)."</small></p></h5>";
        echo "<strong><small>".$viewscalculate->calculaestrellas($lastfquereseach['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado)."</small></strong>";
        echo "</br>";
        echo "<button type='button' id='".$lastfquereseach['iduser']."' onclick='validatesession(this.id)' class='btn btn-primary'>Contactar</button>";
        echo "</a>";
    }

    $_SESSION['suma'] = $flagregistrosview;

}

if(!empty($_POST['postactespec'])){
    
    // Tipo de usuario 2 = Especialista - 1 = Clientes
    $tipuser ='2';
    // Cantidad de registros los que se mostraran en el inicio - En producción colocarlo en 12
    $Cantregi = $flagsystem->flagviewregister;
 
    foreach($entityusers->listaruserxtip($tipuser,$Cantregi) as $fcantregistros){

        echo "<a  class='list-group-item list-group-item-action flex-column align-items-start' id='".$fcantregistros['iduser']."' onclick='validatesession(this.id)'>";
        echo "<div class='d-flex w-100 justify-content-between'>";
        echo "<h6 class='mb-1'><p class='text-dark'><strong>Especialista .: ".$fcantregistros['nameandlast']."</strong></p></h6>";
        echo "</br>";
        echo "<small>".$entityubic->mnameubic($fcantregistros['ubigeo'])."</small>";
        echo "</div>";
        echo "<p class='mb-1'>".$utilsfront->cortartexto($fcantregistros['present'])."</p>";
        echo "<h5><p class='text-danger'><small><strong>Calidad de Atención.:</strong>";
        echo $viewscalculate->calculastar($fcantregistros['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado,'points');
        echo "| Seguridad anti-Covid .: ".$viewscalculate->calculastar($fcantregistros['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado,$flagsystem->flagcovid)."</small></p></h5>";
        echo "</small></p></h5>";
        echo "<small>".$viewscalculate->calculaestrellas($fcantregistros['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado)."</small>";
        echo "</br>";
        echo "<button type='button' id='".$fcantregistros['iduser']."' onclick='validatesession(this.id)' class='btn btn-primary'>Contactar</button>";
        echo "</a>";
        
        
    }
}

if (!empty($_POST['postactivatesearch'])) {
    // Validar vacios - Valor por defecto
    if(!empty($_SESSION['acumulaquery'])){
        $_SESSION['acumulaquery'] = 0;
    }

    if(!empty($_SESSION['suma'])){
        $_SESSION['suma'] = 0;
    }
    if(!empty($_SESSION['lasttxtsearchbar'])){
        $_SESSION['lasttxtsearchbar'] = "";
    }

    if(!empty($_SESSION['lastidentipservicio'])){
        $_SESSION['lastidentipservicio'] = "";
    }



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
  

    
    foreach ($entityusers->filtrobusqfront($_POST['postidentipservicio'], $tipouser, $_POST['posttxtsearchbar'], $_SESSION['ubigeofron'], 0, $flagsystem->flagviewregister) as $fquereseach) {

        echo "<a  class='list-group-item list-group-item-action flex-column align-items-start' id='".$fquereseach['iduser']."' onclick='validatesession(this.id)'>";
        echo "<div class='d-flex w-100 justify-content-between'>";
        echo "<h6 class='mb-1'><p class='text-dark'><strong>Especialista .: " . $fquereseach['nameandlast'] . "</strong></p></h6>";
        echo "</br>";
        echo "<small>" . $entityubic->mnameubic($fquereseach['ubigeo']) . "</small>";
        echo "</div>";
        echo "<p class='mb-1'>" . $utilsfront->cortartexto($fquereseach['present']) . "</p>";
        echo "<h5><p class='text-danger'><small><strong>Calidad de Atención.:</strong>";
        echo $viewscalculate->calculastar($fquereseach['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado,'points');
        echo "| Seguridad anti-Covid".$viewscalculate->calculastar($fquereseach['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado,$flagsystem->flagcovid)."</small></p></h5>";
        echo "</small></p></h5>";
        echo "<small>".$viewscalculate->calculaestrellas($fquereseach ['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado)."</small>";
        echo "</br>";
        // foreach($viewscalculate->calculastar($fquereseach['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado) as $fpoint){
        //     echo "Aqui <small>".$fpoint['sumapserv']."</small>";
        // }

   
        echo "<button type='button' id='".$fquereseach['iduser']."' onclick='validatesession(this.id)' class='btn btn-primary'>Contactar</button>";
        echo "</a>";
    }


}
