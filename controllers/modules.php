<?php

// Esta sección se dedica a la centralización de módulos genéricos la cual serán instanciadas desde un div
// Módulo que sirve para registrar usuario - Modulo 1 - View
session_start();
require_once("../modal/serviciosmodal.php");
require_once("../modal/entitytdocumento.php");
require_once("../utils/utils.php");
require_once("../modal/entityusers.php");
require_once("../modal/entitynewservice.php");
$entityusers = new entityusersmodal();
$serviciosmodal = new serviciosmodal();
$entitytdoc = new entitytdoc();
$utilsphp = new utilsphp();
$entitynewservice = new entitynewservice();
if(!empty($_POST['registeruser'])){
// Los componentes de tipo de servicio o descripción se van a mostrar, dependiendo si se trata de un especialista o un cliente
    

    echo "<div class='alert alert-warning' role='alert'>";
    echo "<h5 class='alert-heading'>Hola!, esto solo se pedirá por unica vez.</h5>";
    echo "¿Eres nuevo verdad? , termina tu registro para contactar al especialista.Gracias.";
    echo "</div>";
    echo "<div class='md-form form-sm'>";
    echo "<i class='fas fa-pencil-alt prefix'></i>";
    echo "<input type='text' id='txtlastname' class='form-control form-control-sm'>";
    echo "<label for='txtlastname' class=''>Nombres y Apellidos</label>";
    echo "</div>";
    echo "<div class='form-row mb-4'>";
    echo "<div class='col'>";
    echo "<select class='browser-default custom-select mb-4' id='slstdocumento'>";
    echo "<option value='' disabled>Tipo . de Documento</option>";
    foreach($entitytdoc->listdocumento() as $ftipodocu){
        echo "<option value='".$ftipodocu['id']."' selected>".$ftipodocu['alias']."</option>";
    }
    
    echo "</select>";
    echo "</div>";
    echo "<div class='col'>";                
    echo "<input type='text' id='txtnrodocumento' class='form-control' placeholder='Nro de Documento'>";
    echo "</div>";
    echo "</div>";
    echo "<div class='md-form form-sm'>";
    echo "<div class='col'>";
    echo "<i class='far fa-address-book prefix'></i>";
    echo "<input type='text' id='txtubicacion' class='form-control' onkeyup='valubi()'placeholder='Ubicación ,Ejemp. : Lima,Lima,San Luis'>";
    echo "<div class='alert alert-danger' role='alert' id='smsubicacion'></div>";
    echo "</div>";
    
    echo "<div class='col'>";
    echo "<i class='far fa-address-book prefix'></i>";
    echo "<input type='text' id='txtdirecciond' class='form-control' placeholder='Dirección : Urb./Lote - Referencia'>";
    echo "</div>";
    echo "</div>";

    // Si la sesión es de tipo especialista , se va a mostrar esta información
    
    if($_SESSION['tipouser'] == '2'){
    echo "<select class='browser-default custom-select mb-4' id='slstipodoc'>";
    echo "<option value='' disabled>Indica el Servicio que brindas</option>";
    foreach($serviciosmodal->listarservicios() as $fservice){
        echo "<option value='".$fservice['idtipservicio']."' selected>".$fservice['name']."</option>";
    }
    
    echo "</select>";
    echo "<div class='form-group'>";
    echo "<textarea class='form-control rounded-0' id='txtareades' rows='3' placeholder='Describe tu servicio para que los demás lo vean!' onkeyup='detval()'></textarea>";
    echo "<div id='smsdetalle'></div>";
    echo "</div>";
    }

    echo "<div class='md-form form-sm'>";
    echo "<i class='fab fa-whatsapp prefix'></i>";
    echo "<input type='text' id='nrowhatsapp' class='form-control form-control-sm' id='txtnrocel'>";
    echo "<label for='nrowhatsapp' class=''>Tu Celular (Whatsapp).</label>";
    echo "</div>";
    echo "<div id='msmerrorge'></div>";
    echo "<div class='text-center mt-4'>";
    echo "<button class='btn btn-info waves-effect waves-light' onclick='registercont()'>Registrar!";
    echo "<i class='fas fa-sign-in ml-1'></i>";
    echo "</button>";
    echo "</div>";
}
// Registro del módulo Modulo 1 - View ( Registro de usuario)
if(!empty($_POST['pactiateregister'])){
// Excepción si el usuario es de tipo 1 - Cliente , no registra servicio y preentación
    if($_SESSION['tipouser'] == '1'){
        
   
        $_POST['pslstipodoc']='1';
        $_POST['ptxtareades']="defaulclientedefaulclientedefaulclientedefaulclientedefaulclientedefaulclientedefaulclientedefaulcliente";
        
    }


    $ptxtlastname = $utilsphp->depurateinfocavioalfa($_POST['ptxtlastname'],"Nombres Completos");
    $pslstdocumento = $utilsphp->validarestados($_POST['pslstdocumento'],'tdocumento','id');
    $pslstipodoc = $utilsphp->validarestados($_POST['pslstipodoc'],'servicesdet','idtipservicio');
    $valtipdoc = $utilsphp->validaciontipodoc($_POST['ptxtnrodocumento'],$_POST['pslstdocumento']);
    $ptxtubicaciond = $utilsphp->depurateinfocavioalfa($_POST['ptxtubicaciond'],"Ubicación");
    $ptxtdirecciond = $utilsphp->depurateinfocavioalfa($_POST['ptxtdirecciond'],"Dirección"); 
    $ptxtareades = $utilsphp->depurateinfocavioalfa($_POST['ptxtareades'],"Detalle");

    $pnrowhatsapp = $utilsphp->valnrotelefono($_POST['pnrowhatsapp']);




    if(!empty($ptxtlastname)){
        echo $ptxtlastname;
    }else if(empty($pslstdocumento)){
        echo "No existe el tipo de documento indicado";
    }else if(!empty($valtipdoc)){
        echo $valtipdoc;
    }else if(!empty($ptxtubicaciond)){
        echo $ptxtubicaciond;
    }else if($_SESSION['ubigeo']=="ubigeofalse"){
        echo "La ubicación Indicada no existe";
    }else if(!empty($ptxtdirecciond)){
        echo $ptxtdirecciond;
    }else if(empty($pslstipodoc)){
        echo "No existe el tipo de Servicio Indicado";
    }else if(!empty($ptxtareades)){
        echo $ptxtareades;
    }else if(!empty($utilsphp->cajadedetxtarea(strlen($_POST['ptxtareades'])))){
        echo $mensaje = "Error en el campo presentación";
        
    }else if($pnrowhatsapp!="1"){
        echo $pnrowhatsapp;
    }else{
        // realizar la actualización
        if($_SESSION['tipouser'] == '1'){
            $_POST['pslstipodoc']='99';
            $_POST['ptxtareades']="defaulclientedefaulclientedefaulclientedefaulclientedefaulclientedefaulclientedefaulclientedefaulcliente";
        }  

        $entityusers->Actualizarusuario($_POST['ptxtlastname'],$_SESSION['ubigeo'],$_POST['ptxtdirecciond'],$_POST['ptxtnrodocumento'],$_POST['pnrowhatsapp'],$_POST['pslstdocumento'],$_SESSION['email'],$_POST['ptxtareades'],$_POST['pslstipodoc']);
        echo "1";
    }
    
  
    
}

// Modulo de validación de detalles

if(!empty($_POST['pactdetalle'])){
    if(!empty($utilsphp->cajadedetxtarea(strlen($_POST['pdato'])))){
        echo $utilsphp->cajadedetxtarea(strlen($_POST['pdato']));
        // sesión usada como flag si esque se usa desde otro módulo
        $_SESSION['validatecajadet']="error";
    }else{
        $_SESSION['validatecajadet']="";
    }
}

// Módulo para enviar mensajes al whatsapp

    if(!empty($_POST['postactivatewha'])){
            
// Buscar el ultimo servicio realizado por el usuario
            foreach($entitynewservice->buscarservxcodcliente($_SESSION['iduser']) as $fresulser){

            }
            
            foreach($entityusers->listarxiduser($fresulser['idespeclient']) as $fbusq){
                
            }
            $utilsphp->enviarwhatsapp($_SESSION['nameandlast'],$fresulser['temaservicio'],$fresulser['detalleservicio'],$fbusq['celular']);
    }
?>