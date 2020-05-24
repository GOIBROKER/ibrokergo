<?php
session_start();
require_once("../modal/entitynewservice.php");
require_once("../controllers/flagsystem.php");
require_once("../modal/entityusers.php");
require_once("../modal/entityprecios.php");
$newserviceload = new entitynewservice();
$flagsload = new flags();
$entityusersmodal = new entityusersmodal();
$preciosaprox = new preciosaprox();
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
    echo " | <strong>Celular Whatsapp .:</strong> ".$fespecialista['celular'];
    echo "</br>";
    foreach($preciosaprox->idprecios($fticket['idprecioaprox']) as $fprecios){

    }
    echo "<code>Precio Aproximado que indicastes .: ".$fprecios['rango'];
    echo "</div>";
    echo "<div class='timeline-footer'>";

    echo "<a class='btn btn-danger btn-xs' id='".$fticket['idespeclient']."' onclick='terminsol(this.id)'>Terminar Solicitud</a>";
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
    
    foreach($entityusersmodal->listarxiduser($fticket2['iduser']) as $fusers2){
        
    }

    echo "<strong>Tu cliente es .:</strong> ".$fusers2['nameandlast'];
    echo " | <strong>Celular Whatsapp .:</strong>".$fusers2['celular'];
    echo "</br>";
    foreach($preciosaprox->idprecios($fticket2['idprecioaprox']) as $fprecioaprox2){
        
    }
    echo "<code>Precio Aproximado que indicastes .: ".$fprecioaprox2['rango']."</code>";
    echo "</div>";

    echo "<div class='timeline-footer'>";
    
    echo "<a class='btn btn-danger btn-xs' id='".$fticket2['iduser']."' onclick='terminsol(this.id)'>Termine el servicio</a>";
    echo "</div>";
    echo "</div>";
    echo "</li> ";
    echo "</ul>";
}
}

?>