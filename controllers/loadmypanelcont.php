

<?php
session_start();
require_once("../modal/entitynewservice.php");
require_once("../controllers/flagsystem.php");
require_once("../modal/entityusers.php");
require_once("../modal/entityprecios.php");
require_once("../modal/entitytblerrorserv.php");
require_once("../utils/utils.php");
require_once("../modal/entityqualityser.php");
require_once("../modal/entityubicacion.php");

$tblerrorserv = new tblerrorserv();
$newserviceload = new entitynewservice();
$flagsload = new flags();
$entityusersmodal = new entityusersmodal();
$preciosaprox = new preciosaprox();
$utilsphp2 = new utilsphp();
$entityquality = new entityquality();
$modalubicacion = new modalubicacion();
// se uitliza para la carga inicial de tickets

if(!empty($_POST['postloadticket'])){
    echo "<div class='callout callout-warning'>";
    echo "<h4>Hola !</h4>";
    echo "<p><h4>Aquí encontraras los trabajos que has generado para otros especialistas<h4></p>";
    echo "</div>";
    foreach ($newserviceload->mostrarticket($_SESSION['iduser'], $flagsload->flagestaabierto, $flagsload->flagdirecto) as $fticket) {
    echo "<ul class='timeline'>";
    echo "<li class='time-label'>";
    echo "<span class='bg-red'>";
    echo $fticket['fregistro'];
    echo "</span>";
    echo "</li>";
    echo "<li>";
    echo "<i class='fa fa-envelope bg-blue'></i>";
    echo "<div class='timeline-item'>";
    echo "<span class='time'><i class='fa fa-clock-o'></i> <strong>Tipo de Solicitud.: Subasta | Directo</strong></span>";
    echo "<h3 class='timeline-header'><a href='#'>Nro Solicitud : ".$fticket['idhistorico']."</a></h3>";
    echo "<div class='timeline-body'>";
    echo "<strong>Titulo .:</strong> ".$fticket['temaservicio'];
    echo "</br>";
    echo "<strong>Detalle .:</strong>".$fticket['detalleservicio'];
    echo "</br>";
    foreach($entityusersmodal->listarxiduser($fticket['idespeclient']) as $fespecialista){
        
    }
    echo "<strong>Asignado al especialista .:</strong> ".$fespecialista['nameandlast'];
    echo " | <strong>Celular Whatsapp .:</strong> ".$fespecialista['celular']."| <strong>Ubicación .: </strong>".$modalubicacion->mnameubic($fespecialista['ubigeo']);
    echo "</br>";
    foreach($preciosaprox->idprecios($fticket['idprecioaprox']) as $fprecios){

    }
    echo "<code>Precio Aproximado que indicastes .: ".$fprecios['rango']."</code>";
    echo "</div>";
    echo "<div class='timeline-footer'>";

    echo "<a class='btn btn-danger btn-xs' id='".$fticket['idhistorico']."'  onclick='terminarsol(this.id)'>Terminar Solicitud</a>";
    echo "</div>";
    echo "</div>";
    echo "</li> ";
    echo "</ul>";
    
    }
}

if(!empty($_POST['postloadticket2'])){
    echo "<div class='callout callout-danger'>";
    echo "<h4>Hola !</h4>";
    echo "<p><h4>Aqui encontraras los trabajos que te han generado tus clientes<h4></p>";
    echo "</div>";
    foreach ($newserviceload->mticketasignados($_SESSION['iduser'], $flagsload->flagestaabierto, $flagsload->flagdirecto) as $fticket2) {
    echo "<ul class='timeline'>";
    echo "<li class='time-label'>";
    echo "<span class='bg-red'>";
    echo $fticket2['fregistro'];
    echo "</span>";
    echo "</li>";
    echo "<li>";
    echo "<i class='fa fa-envelope bg-blue'></i>";
    echo "<div class='timeline-item'>";
    echo "<span class='time'><i class='fa fa-clock-o'></i> <strong>Tipo de Solicitud.: Subasta | Directo</strong></span>";
    echo "<h3 class='timeline-header'><a href='#'>Nro Solicitud : ".$fticket2['idhistorico']."</a></h3>";
    echo "<div class='timeline-body'>";
    echo "<strong>Titulo .:</strong> ".$fticket2['temaservicio'];
    echo "</br>";
    echo "<strong>Detalle .:</strong>".$fticket2['detalleservicio'];
    echo "</br>";
    
    foreach($entityusersmodal->listarxiduser2($fticket2['iduser']) as $fusers2){
        
    }

    echo "<strong>Tu cliente es .:</strong> ".$fusers2['nameandlast'];
    echo " | <strong>Celular Whatsapp .:</strong>".$fusers2['celular']."| <strong>Ubicación .: </strong>".$modalubicacion->mnameubic($fusers2['ubigeo']);
    echo "</br>";
    foreach($preciosaprox->idprecios($fticket2['idprecioaprox']) as $fprecioaprox2){
        
    }
    echo "<code>Precio Aproximado que indicastes .: ".$fprecioaprox2['rango']."</code>";
    echo "</div>";

    echo "<div class='timeline-footer'>";
    echo "<div class='alert alert-info' role='alert'>";
    echo "<strong>Finaliza tu Trabajo!</strong>Los podras téminar cuando tu cliente lo acepte";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</li> ";
    echo "</ul>";
}
}

if(!empty($_POST['postactivarsol'])){
    // Vamos a crear una sesión del idhistorico para el tratamiento
    $_SESSION['sesionidhist'] = $_POST['postsesionidhist'];
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><h3>Con esto nos ayudas a calificar al especialista ;)<h3></div>";
    echo "<div class='panel-body'>";
    echo "<div id='continueform'>";
    echo "<div class='form-group'>";
    echo "<label for='Enabled'><h4>¿Indicanos el estado de la solicitud?</h4></label>";
    echo "<select id='selectsol' class='form-control'>";
    echo "<option value='2'>Se termino el servicio</option>";
    echo "<option value='4'>No me atendieron</option>";

    echo "</select>";
    echo "</div>";
    echo "</div>";
    // echo "<center><img src='../librerias/dist/img/ibroger.jpg' class='img-fluid rounded' alt='Paris' style='width:204px;height:auto;'></center>";
    
    echo "<center><div class='btn-group' role='group' aria-label='Basic example'>";
    echo "<button type='button' onclick='secondconcluido()'class='btn btn-secondary' id='btnext'>Siguiente</button>";
    echo "</div></center>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

}
if(!empty($_POST['postfinish'])){
    echo "<div class='callout callout-info'>";
    echo "<h4>Hola!</h4>";
    echo "<h4>Califica al Especialista de un puntaje del 1 al 5</h4>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='exampleFormControlInput1'>Atención del especialista:</label>";
    echo "</br>";
    echo "<center><h3>";
    echo "<div id='wrapper'>";
    echo "<p class='clasificacion'>";
    echo "<input id='radio1' type='radio' name='estrellas' value='1'>";
    echo "<label for='radio1'>★</label>";
    echo "<input id='radio2' type='radio' name='estrellas' value='2'>";
    echo "<label for='radio2'>★</label>";
    echo "<input id='radio3' type='radio' name='estrellas' value='3'>";
    echo "<label for='radio3'>★</label>";
    echo "<input id='radio4' type='radio' name='estrellas' value='4'>";
    echo "<label for='radio4'>★</label>";
    echo "<input id='radio5' type='radio' name='estrellas' value='5'>";
    echo "<label for='radio5'>★</label>";
    echo "</p>";
    echo "</div>";
    echo "</h3></center>";
    echo "</div>";
    
    echo "<div class='form-group'>";
    echo "<label for='exampleFormControlSelect1'>¿Seguridad ante Covid?</label>";
    echo "<select class='form-control' id='slspuntaje2'>";
    echo "<option value='1'>1</option>";
    echo "<option value='2'>2</option>";
    echo "<option value='3'>3</option>";
    echo "<option value='4'>4</option>";
    echo "<option value='5'>5</option>";
    echo "</select>";
    echo "</div>";

    
    echo "<div class='form-group'>";
    echo "<label for='exampleFormControlTextarea1'>Comentarios de atención.:</label>";
    echo "<textarea class='form-control' id='txtcomentario' rows='3'></textarea>";
    echo "</div>";
    echo "<div id='errorf1'></div>";
}
//
if(!empty($_POST['grabarflujo1'])){
$postpuntaje1 = $_POST['postpuntaje1'];
$postpuntaje2 = $_POST['postpuntaje2'];
$postcoment = $_POST['postcomentario'];

if(!empty($utilsphp2->depurateinfor('25',$_POST['postcomentario'],"Comentario"))){
    echo $utilsphp2->depurateinfor('25',$_POST['postcomentario'],"Comentario");
}else{

    // Obtener fecha ( Devolvera un 1 si no hubo error en la insercción)
    echo $entityquality->insertdata($_SESSION['sesionidhist'],$postpuntaje1,$utilsphp2->characterespecialubicacion($_POST['postcomentario']),$postpuntaje2,$utilsphp2->fecha(),$flagsload->flagestintermedio,'99');

}

}

if(!empty($_POST['postloadticket3'])){
    echo "<div class='callout callout-danger'>";
    echo "<h4>Hola !</h4>";
    echo "<p><h4>Aqui aparecen todos tus servicios que has atendido con las aceptación de tu cliente , solo falta tu confirmación para cerrar y aumentar tu puntaje en el portal!<h4></p>";
    echo "</div>";

   
    foreach ($newserviceload->mticketasignados($_SESSION['iduser'], $flagsload->flagestintermedio, $flagsload->flagdirecto) as $fticket2) {
    echo "<ul class='timeline'>";
    echo "<li class='time-label'>";
    echo "<span class='bg-red'>";
    echo $fticket2['fregistro'];
    echo "</span>";
    echo "</li>";
    echo "<li>";
    echo "<i class='fa fa-envelope bg-blue'></i>";
    echo "<div class='timeline-item'>";
    echo "<span class='time'><i class='fa fa-clock-o'></i> <strong>Tipo de Solicitud.: Subasta | Directo</strong></span>";
    echo "<h3 class='timeline-header'><a href='#'>Nro Solicitud : ".$fticket2['idhistorico']."</a></h3>";
    echo "<div class='timeline-body'>";
    echo "<strong>Titulo .:</strong> ".$fticket2['temaservicio'];
    echo "</br>";
    echo "<strong>Detalle .:</strong>".$fticket2['detalleservicio'];
    echo "</br>";
    
    foreach($entityusersmodal->listarxiduser2($fticket2['iduser']) as $fusers2){
        
    }

    echo "<strong>Tu cliente es .:</strong> ".$fusers2['nameandlast'];
    echo " | <strong>Celular Whatsapp .:</strong>".$fusers2['celular']."| <strong>Ubicación .: </strong>".$modalubicacion->mnameubic($fusers2['ubigeo']);
    echo "</br>";
    foreach($preciosaprox->idprecios($fticket2['idprecioaprox']) as $fprecioaprox2){
        
    }
    echo "<code>Precio Aproximado que indicastes .: ".$fprecioaprox2['rango']."</code>";
    echo "</div>";

    echo "<div class='timeline-footer'>";
    
    echo "<a class='btn btn-danger btn-xs' id='".$fticket2['idhistorico']."' onclick='cerrarservicio(this.id)'>Concluir mi Servicio</a>";
    echo "</div>";
    echo "</div>";
    echo "</li> ";
    echo "</ul>";
}
}
if (!empty($_POST['postcloseservesp'])) {
    $_SESSION['postcod'] = $_POST['postcod'];
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><h3>Termina tu servicio!</h3></div>";
    echo "<div class='panel-body'>";
    echo "<p class='font-italic'>Concluye el servicio para que obtengas estrellas y llegues a ser publicado como el mejor especialista en tu rubro</p></div>";
    
    echo "<center>Vas a cerrar la solicitud .:".$_POST['postcod']."</center>";
    echo "</br>";
    echo "<button type='button' onclick='terminarserv()' class='btn btn-warning btn-lg btn-block'>Termine el servicio!</button>";
   
    echo "</div>";

}

if(!empty($_POST['postalertac'])){
    $queryd = $newserviceload->finishticket($_SESSION['postcod'],$flagsload->flagestacerrado,$utilsphp2->fecha());
    if($queryd == 0){
        echo "Hubo un error en la actualización de ticket - Intentar más tarde";
    }else if($queryd == 1){
        echo 1;
    }
}

if(!empty($_POST['postnoconcluido'])){
    $_SESSION['sesionidhist'];
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><h4>!Cuentanos que ha pasado!</h4  ></div>";
    echo "<div class='panel-body'>";
    echo "<p class='font-italic'>Favor de darnos detalle para mejorar el servicio , gracias por tu apoyo!</p></div>";
    echo "<center>Vas a cerrar la solicitud .:".$_SESSION['sesionidhist']."</center>";
    echo "</br>";
    echo "<div class='form-group'>";
   
    echo "<label for='Enabled'><h4>Escoge.:</h4></label>";
    echo "<select id='selecterrorserv' class='form-control'>";
    foreach($tblerrorserv->loadserv() as $fdataserv){
        echo "<option value='".$fdataserv['iderrorserv']."'>".$fdataserv['name']."</option>";
    }
    

    echo "</select>";
    echo "<label for='comment'>Favor de brindarnos el detalle:</label>";
    echo "<textarea class='form-control' rows='5' id='txtcommen'></textarea>";
    echo "</div>";
    echo "<button type='button' onclick='ticketnottermin()' class='btn btn-warning btn-lg btn-block'>Termine el servicio!</button>";
    echo "</div>";
}

if(!empty($_POST['postgrabarflujo2'])){
  $_POST['postselecterrorserv'];
    if(!empty($utilsphp2->depurateinfor('25',$_POST['postcoment'],"Comentario"))){
        echo $utilsphp2->depurateinfor('25',$_POST['postcoment'],"Comentario");
    }else{
        // Obtener fecha ( Devolvera un 1 si no hubo error en la insercción)
        
        echo $entityquality->insertdata($_SESSION['sesionidhist'],$flagsload->puntaje,$utilsphp2->characterespecialubicacion($_POST['postcoment']),$flagsload->puntaje,$utilsphp2->fecha(),$flagsload->flagestanotconcluido,$_POST['postselecterrorserv']);
    
    }
}