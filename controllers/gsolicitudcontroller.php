<?php
session_start();
require_once("../utils/utils.php");
require_once("../modal/entityusers.php");
require_once("../modal/entitynewservice.php");
//Hardcore - Depurar - Tablas y codigos

$tabla_servicios = "servicesdet";
$campo_servicios="idtipservicio";
$tabla_precios="precios";
$campo_precios="idprecio";
$tabla_tipservicio="tipservicio";
$campo_tipservicio="id";

// Instanciar clases
$newservice = new entitynewservice();
$utils = new utilsphp();
// require_once("../modal/flags.php");
$entityusers = new entityusersmodal();
// Si existe la sesión activa especialidad escogida , se va a mostrar ,caso contrario no.
// mostrar el nombre del código
if(!empty($_POST['resquestdestroygsolicitud'])){
    // esta opción destruye la sesión para que genere el combobox de selección
    $_SESSION['idespecialidad']="";
    $_POST['resquestactivategsolicitud']="Activado";
}

if(!empty($_POST['resquestactivategsolicitud'])){
//Código de cabecera
    if (!empty($_SESSION['idespecialidad'])) {
        require("../modal/serviciosmodal.php");
        $servicioobtenido = new serviciosmodal();
        echo "<div class='callout callout-info'>";
        echo "<h4>" . $servicioobtenido->listarserviciosxcod($_SESSION['idespecialidad']) . "</h4>";
        echo "<button type='button' class='btn btn-danger' onclick='editarservicio()' >Editar Opción</button>";
        echo "</div>";
    } else {

        require("../modal/serviciosmodal.php");
        echo "<div class='form-group'>";
        echo "<label>Seleccionar el Servicio que deseas Publicar</label>";
        echo "<select class='form-control' id='cmbtrabajo'>";
        $listarservices = new serviciosmodal();
        foreach($listarservices->listarservicios() as $foreachservicios){
            echo "<option value=".$foreachservicios['idtipservicio'].">".$foreachservicios['name']."</option>";
        }
        echo "</select>";
        echo "</div>";
        
    }
}

if(!empty($_POST['requestactivateregistrar'])){
    
    // Verificar que no exista la sesión de escoger el tipo de servicio cuando se registra un nuevo usuario.
    // Verificar si el usuario ya registro su información personal para proceder con la creación de la solicitud.

    foreach($entityusers -> listaruser($_SESSION['email']) as $foreachflagvalidate){
        $flagvalidate = $foreachflagvalidate['tdocumento'];
        //Creamos una sesion con el id de usuario para utilizarlo en otras condicionales
        $_SESSION['iduser'] = $foreachflagvalidate['iduser'];
    }

    if($flagvalidate == 9){
        // Si es 9 significa que no ha registrado sus datos

        echo "1";
    }else{

        if(!empty($_SESSION['idespecialidad'])){

            $filtroidcombogsolicitud = $_SESSION['idespecialidad'];
        }else{
            $filtroidcombogsolicitud = $utils->characterespecialubicacion($utils->ucwordsletter($idcombogsolicitud = $_POST['requestidcombogsolicitud']));
    
        }
    
        if(empty($_POST['requestoptionservice'])){
            $_POST['requestoptionservice']="1";
        }
        
        $filtroidcmbrangoprecio = $utils->characterespecialubicacion($utils->ucwordsletter($idcmbrangoprecio = $_POST['requestidcmbrangoprecio']));
        $filtrooptionservice = $utils->characterespecialubicacion($utils->ucwordsletter($optionservice = $_POST['requestoptionservice']));
        $filtrotxttitulo = $utils->characterespecialubicacion($utils->firtsletterup($txttitulo = $_POST['requesttxttitulo']));
        $filtrotxtareadata = $utils->characterespecialubicacion($utils->firtsletterup($txtareadata = $_POST['requesttxtareadata']));

        // // Si es diferente a 9 , significa que sus datos ya fueron registrados y debe registrarse la solicitud
        // $flags = new flags();
        // $flags->tablas();
        // Depurar hardcode Retornara un returnok si existe el dato ingresado desde el Front 
        // Validar si el campo de tipo de solicitud existe
        $tsolicitud = $utils->validarestados($filtroidcombogsolicitud,$tabla_servicios,$campo_servicios);
        // Validar si el campo de rango de precio del servicio existe
        $rangodeprecio = $utils->validarestados($filtroidcmbrangoprecio,$tabla_precios,$campo_precios);
        // Validar si el tipo de servicio Remoto o presencial exite
        $tserviciorop = $utils->validarestados($filtrooptionservice,$tabla_tipservicio,$campo_tipservicio);
        //Enviaremos un parametro para aperturar el show de confirmación de data.

        $largotxttitulo = strlen($filtrotxttitulo);
        $largocomentario = strlen($filtrotxtareadata);

        if(empty($tsolicitud)){
            echo "El tipo de solicitud indicado no existe";
        }else if(empty($rangodeprecio)){
            echo "No Rango de Precio indicado no existe";
        }else if(empty($tserviciorop)){
            echo "Las opciones válidas es Remoto o Presencial";
        }else if($utils->valdatavacia($filtrotxttitulo)=="false"){
            echo "El titulo de la publicación no puede estar vacia";
        }else if($utils->valdatavacia($filtrotxtareadata)=="false"){
            echo "El detalle de la publicación no puede estar vacia";
        }else if($utils->cajadedetitulo($largotxttitulo)<>"Correcto"){
            echo "El titulo de tu inconveniente tiene que ser mayor a 35 letras";
        }else if(!empty($utils->cajadedetxtarea($largocomentario))){
            echo "El detalle de tu solicitud debe de tener entre 56 y 350 letras";
        }
        else{
            // Si todo esta correcto , se van a generar variables de sesiones que al final serán utilizadas para la confirmación de la publicación.
            $_SESSION['$tsolicitud'] = $filtroidcombogsolicitud;
            $_SESSION['$filtrotxttitulo'] = $filtrotxttitulo;
            $_SESSION['$filtrotxtareadata'] = $filtrotxtareadata;
            $_SESSION['$rangodeprecio'] = $filtroidcmbrangoprecio;
            $_SESSION['$tserviciorop'] = $_POST['requestoptionservice'];
            echo "2";
        }
    }
}

// Modulo de visualición de confirmación de la publicación del trabajo.


// Sesión que indica cuando se registro correctamente al usuario
if(!empty($_POST['postvalidateupdateusers'])){
       echo $utils->vregisteruser($_SESSION['email']);
    }

    
//
if(!empty($_POST['postactivado'])){
    $largo = strlen($_POST['posttxtdescripcion']);

    echo "<code>".$utils->cajadedetxtarea($largo)."</code>";
}
if(!empty($_POST['postactivadotitulo'])){
    $largotitulo = strlen($_POST['posttxttitulo']);
    echo "<code>".$utils->cajadedetitulo($largotitulo)."</code>";
}


if(!empty($_POST['postpreviapublicacion'])){
    // SELECT * FROM servicesdet WHERE idtipservicio='1'
    foreach($utils->extraerinfo($_SESSION['$tsolicitud'],$tabla_servicios,$campo_servicios) as $foreachser){
        $nameserv = $foreachser['name'];
    }

    foreach($utils->extraerinfo($_SESSION['$rangodeprecio'],$tabla_precios,$campo_precios) as $foreachser){
        $rangos = $foreachser['rango'];
    }

    foreach($utils->extraerinfo($_SESSION['$tserviciorop'],$tabla_tipservicio,$campo_tipservicio) as $foreachser){
        $tipservicio = $foreachser['name'];
    }

    echo "<ul class='nav nav-stacked' >";
    echo "<li><a href='#'>Servicio Elegido <span class='pull-right badge bg-blue'>".$nameserv."</span></a></li>";
    echo "<li><a href='#'>Titulo de Pedido<span class='pull-right badge bg-aqua'>".$_SESSION['$filtrotxttitulo']."</span></a></li>";
    echo "<li><a href='#'>Precio Aproximado <span class='pull-right badge bg-green'>".$rangos."</span></a></li>";
    echo "<li><a href='#'>Tipo de Asistencia <span class='pull-right badge bg-red'>".$tipservicio."</span></a></li>";
    echo "</ul>";
}

if(!empty($_POST['postactivateclose'])){
    $_SESSION['$tsolicitud'] = "";
    $_SESSION['$filtrotxttitulo'] = "";
    $_SESSION['$filtrotxtareadata'] = "";
    $_SESSION['$rangodeprecio'] = "";
    $_SESSION['$tserviciorop'] = "";
}

if(!empty($_POST['varregistrarinfo'])){
    // Fecha actual
    $fecharegistro = $utils->fecha();
    // Registrar nuevo servicio
    //SA = SIN ASIGNACIÓN - S = SUBASTA - D = DIRECTO
    
    $newservice->registrarservicio($_SESSION['iduser'],$_SESSION['$tsolicitud'],$_SESSION['$filtrotxttitulo'],$_SESSION['$filtrotxtareadata'],$_SESSION['$rangodeprecio'],$_SESSION['$tserviciorop'],$fecharegistro,"SA",'0');
    
    
    echo "3";
}

