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
    //                     filtrobusqfront($utilsfront->characterespecialubicacion($_POST['postidentipservicio']), $tipouser, $utilsfront->characterespecialubicacion($_POST['posttxtsearchbar']), $utilsfront->characterespecialubicacion($departamento), $utilsfront->characterespecialubicacion($provincia), $utilsfront->characterespecialubicacion($distrito), $utilsfront->characterespecialubicacion($txtnameespe), 0, $flagsystem->flagviewregister) as $fquereseach) {

    $flagcount = $entityusers->totalbusqfront($utilsfront->characterespecialubicacion($_SESSION['lastidentipservicio']), $tipouser, $utilsfront->characterespecialubicacion($_SESSION['lasttxtsearchbar']), $utilsfront->characterespecialubicacion($_SESSION['depa']), $utilsfront->characterespecialubicacion($_SESSION['prov']), $utilsfront->characterespecialubicacion($_SESSION['dist']), $utilsfront->characterespecialubicacion($_SESSION['nameessearch']), $_SESSION['acumulaquery'], $_SESSION['suma']);
    if ($flagcount === 99) {
        echo "Ocurrio un error de busqueda, lo estaremos solucionando lo más pronto posible";
    } else if ($flagcount === 0) {
        echo "Sin Resultados!";
    } else if ($flagcount >= 0) {
        foreach ($entityusers->filtrobusqfront($utilsfront->characterespecialubicacion($_SESSION['lastidentipservicio']), $tipouser, $utilsfront->characterespecialubicacion($_SESSION['lasttxtsearchbar']), $utilsfront->characterespecialubicacion($_SESSION['depa']), $utilsfront->characterespecialubicacion($_SESSION['prov']), $utilsfront->characterespecialubicacion($_SESSION['dist']), $utilsfront->characterespecialubicacion($_SESSION['nameessearch']), $_SESSION['acumulaquery'], $_SESSION['suma']) as $lastfquereseach) {

            echo "<a  class='list-group-item list-group-item-action flex-column align-items-start' id='" . $lastfquereseach['iduser'] . "' onclick='validatesession(this.id)'>";
            echo "<div class='d-flex w-100 justify-content-between'>";
            echo "<h6 class='mb-1'><p class='text-dark'><strong>Especialista .: " . $lastfquereseach['nameandlast'] . "</strong></p></h6>";
            echo "</br>";
            echo "<small>" . $lastfquereseach['provincia'] . "," . $lastfquereseach['distrito'] . "</small>";
            echo "</div>";
            echo "<p class='mb-1'>" . $utilsfront->cortartexto($lastfquereseach['present']) . "</p>";
            echo "<h5><p class='text-danger'><small><strong>Calidad en.:</strong>";
            echo $viewscalculate->calculastar($lastfquereseach['iduser'], $flagsystem->flagnoconcluido, $flagsystem->flagestacerrado, $flagsystem->flagpoints);
            echo "| Seguridad anti-Covid" . $viewscalculate->calculastar($lastfquereseach['iduser'], $flagsystem->flagnoconcluido, $flagsystem->flagestacerrado, $flagsystem->flagcovid) . "</small></p></h5>";
            echo "<strong><small>" . $viewscalculate->calculaestrellas($lastfquereseach['iduser'], $flagsystem->flagnoconcluido, $flagsystem->flagestacerrado) . "</small></strong>";
            echo "</br>";
            echo "<button type='button' id='" . $lastfquereseach['iduser'] . "' onclick='validatesession(this.id)' class='btn btn-primary'>Contactar</button>";
            echo "</a>";
        }
    }else{
        echo "Error desconocido en busqueda , estaremos solucionando lo más pronto posible";
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
    // Validar vacios - Valor por defecto - Nuevo Ubigeo
    if (empty($_POST['postiddepartamento'])) {
        $departamento = "";
        $_SESSION['depa'] = "";
    } else {
        $departamento = $_POST['postiddepartamento'];
        $_SESSION['depa'] = $_POST['postiddepartamento'];
    }
    if (empty($_POST['postidprovincia'])) {
        $provincia = "";
        $_SESSION['prov'] = "";
    } else {
        $provincia = $_POST['postidprovincia'];
        $_SESSION['prov'] = $_POST['postidprovincia'];
    }
    if (empty($_POST['postiddistrito'])) {
        $distrito = "";
        $_SESSION['dist'] = "";
    } else {
        $distrito = $_POST['postiddistrito'];
        $_SESSION['dist'] = $_POST['postiddistrito'];
    }

    if (empty($_POST['posttxtnameespe'])) {
        $txtnameespe = "";
        $_SESSION['nameessearch'] = "";
    } else {
        $txtnameespe = $_POST['posttxtnameespe'];
        $_SESSION['nameessearch'] = $_POST['posttxtnameespe'];
    }
 

    //--------------------------------------------

    //nuevo ubigeo
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

    // Aplicar Filtrados Ver variable de retorno
    // echo "tipo ser.:".$utilsfront->characterespecialubicacion($_POST['postidentipservicio']);
    // echo "</br>";
    // echo "tipo user.:".$tipouser;
    // echo "</br>";
    // echo "tipo busq.:".$utilsfront->characterespecialubicacion($_POST['posttxtsearchbar']);
    // echo "</br>";
    // echo "tipo dep.:".$utilsfront->characterespecialubicacion($departamento);
    // echo "</br>";
    // echo "tipo prov.:".$utilsfront->characterespecialubicacion($provincia);
    // echo "</br>";
    // echo "tipo dist.:".$utilsfront->characterespecialubicacion($distrito);
    // echo "</br>";
    // echo "tipo nombres.:".$utilsfront->characterespecialubicacion($txtnameespe);
    // echo "</br>";
    // echo "tipo inicio. 0.";
    // echo "</br>";
    // echo "tipo fin.:".$flagsystem->flagviewregister;




    $flagcant = $entityusers->totalbusqfront($utilsfront->characterespecialubicacion($_POST['postidentipservicio']), $tipouser, $utilsfront->characterespecialubicacion($_POST['posttxtsearchbar']), $utilsfront->characterespecialubicacion($departamento), $utilsfront->characterespecialubicacion($provincia), $utilsfront->characterespecialubicacion($distrito), $utilsfront->characterespecialubicacion($txtnameespe), 0, $flagsystem->flagviewregister);
    if ($flagcant === 99) {
        echo "Ocurrio un error de busqueda, lo estaremos solucionando lo más pronto posible";
    } else if ($flagcant === 0) {
        echo "No se encontro resultados para tu busqueda";
    } else if ($flagcant >= 0) {
        foreach ($entityusers->filtrobusqfront($utilsfront->characterespecialubicacion($_POST['postidentipservicio']), $tipouser, $utilsfront->characterespecialubicacion($_POST['posttxtsearchbar']), $utilsfront->characterespecialubicacion($departamento), $utilsfront->characterespecialubicacion($provincia), $utilsfront->characterespecialubicacion($distrito), $utilsfront->characterespecialubicacion($txtnameespe), 0, $flagsystem->flagviewregister) as $fquereseach) {

            echo "<a  class='list-group-item list-group-item-action flex-column align-items-start' id='" . $fquereseach['iduser'] . "' onclick='validatesession(this.id)'>";
            echo "<div class='d-flex w-100 justify-content-between'>";
            echo "<h6 class='mb-1'><p class='text-dark'><strong>Especialista .: " . $fquereseach['nameandlast'] . "</strong></p></h6>";
            echo "</br>";
            echo "<small>" .$fquereseach['provincia'] .",". $fquereseach['distrito'] . "</small>";
            echo "</div>";
            echo "<p class='mb-1'>" . $utilsfront->cortartexto($fquereseach['present']) . "</p>";
            echo "<h5><p class='text-danger'><small><strong>Calidad de Atención.:</strong>";
            echo $viewscalculate->calculastar($fquereseach['iduser'], $flagsystem->flagnoconcluido, $flagsystem->flagestacerrado, 'points');
            echo "| Seguridad anti-Covid" . $viewscalculate->calculastar($fquereseach['iduser'], $flagsystem->flagnoconcluido, $flagsystem->flagestacerrado, $flagsystem->flagcovid) . "</small></p></h5>";
            echo "</small></p></h5>";
            echo "<small>" . $viewscalculate->calculaestrellas($fquereseach['iduser'], $flagsystem->flagnoconcluido, $flagsystem->flagestacerrado) . "</small>";
            echo "</br>";
            // foreach($viewscalculate->calculastar($fquereseach['iduser'],$flagsystem->flagnoconcluido,$flagsystem->flagestacerrado) as $fpoint){
            //     echo "Aqui <small>".$fpoint['sumapserv']."</small>";
            // }


            echo "<button type='button' id='" . $fquereseach['iduser'] . "' onclick='validatesession(this.id)' class='btn btn-primary'>Contactar</button>";
            echo "</a>";
        }
    }else{
        echo "Error desconocido en busqueda , estaremos solucionando lo más pronto posible";
    }
    


}
