<?php
session_start();
require_once("../utils/utils.php");
require_once("../modal/entityusers.php");
//Hardcore - Depurar - Tablas y codigos

$tabla_servicios = "servicesdet";
$campo_servicios="idtipservicio";
$tabla_precios="precios";
$campo_precios="idprecio";
$tabla_tipservicio="tipservicio";
$campo_tipservicio="id";
// Instanciar clases
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

        if(empty($tsolicitud)){
            echo "El tipo de solicitud indicado no existe";
        }else if(empty($rangodeprecio)){
            echo "No Rango de Precio indicado no existe";
        }else if(empty($tserviciorop)){
            echo "Las opciones válidas es Remoto o Presencial";
        }
        else{
            echo "2";
        }




        

    }
}

// Sesión que indica cuando se registro correctamente al usuario
if(!empty($_POST['postvalidateupdateusers'])){
   
        if(!empty($_SESSION['flagactivadorupdateusers'])){
            echo "1";
            // Luego destruir la sesión
            // $_SESSION['flagactivadorupdateusers']="";
        }else{
            echo "";
        }
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




