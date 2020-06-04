<?php
require_once("../modal/entityubicacion.php");
require_once("../utils/utils.php");
require_once("../modal/entityusers.php");
require_once("../modal/serviciosmodal.php");
$utils = new utilsphp();
$entityusers = new entityusersmodal();
$dataubicacion = new modalubicacion();
$listservice = new serviciosmodal();
$sdettable = "servicesdet";
$cdettable = "idtipservicio";
session_start();

if (!empty($_POST['requestactivateformfirst'])) {
    //Validación si Existe el Flag que restringe la edición del Campo DNI y Nombres
    if (!empty($_SESSION['flagmostrardata'])) {
        $Titulo = "Editar tu data - Tu DNI y Nombres estan en validación";
        $subTitulo = "Podrás editar esa información luego de 1 mes. <br>o mandar un correo a tusdatos@brokergo.com.pe";
        $propiedadblocked = "disabled = 'true'";
        //traemos el DNI y los nombres como datos por defecto.
        foreach ($entityusers->listaruser($_SESSION['email']) as $foreachresultval) {
            $_SESSION['tdoc'] = $foreachresultval['tdocumento'];
            $_SESSION['flagdoc'] = $foreachresultval['nrodoc'];
            $_SESSION['flagname'] = $foreachresultval['nameandlast'];
        }
    } else {
        $Titulo = "Nuevo Registro - Atención!";
        $subTitulo = "Mientras mas datos ingreses , mas confianza vas a generar. <br>Tus datos serán verificados ,evita la suspensión de tu cuenta.";
        $propiedadblocked = "";
        $_SESSION['tdoc'] = "";
        $_SESSION['flagdoc'] = "";
        $_SESSION['flagname'] = "";
    }
    //Mostrar el formulario por primera vez

    echo "<form class='form-horizontal'>";

    echo "<div class='alert alert-info alert-dismissible'>";
    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
    echo "<h4><i class='icon fa fa-info'></i> " . $Titulo . "!</h4>";
    echo $subTitulo;
    echo "</div>";
    // Si la data existe no va a mostrar el campo para editar el DNI
    if (empty($_SESSION['flagmostrardata'])) {
        echo "<div class='form-group'>";
        echo "<label for='inputName' class='col-sm-2 control-label'>Escoge:</label>";
        echo "<div class='col-sm-10'>";
        echo "<label for='exampleFormControlSelect1'> Tipo de Documento : DNI / CE / PTT</label>";
        echo "<select  class='form-control' id='selectedtipodoc'>";
        echo "<option value='1'>L.E / DNI</option>";
        echo "<option value='2'>CARNET EXT.</option>";
        echo "<option value='3'>PASAPORTE</option>";

        echo "</select>";
        echo "</div>";
        echo "</div>";
    }

    echo "<div class='form-group'>";
    echo "<label for='inputName' class='col-sm-2 control-label'>Documento</label>";

    echo "<div class='col-sm-10'>";
    echo "<div class='input-group input-group-lg'>";
    echo "<div class='input-group-btn'>";

    echo "</div>";
    echo "<input type='text' class='form-control' id='txtnrodni' placeholder='Ingresar el documento' $propiedadblocked value='" . $_SESSION['flagdoc'] . "' >";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='inputName' class='col-sm-2 control-label'>Nombres Full:</label>";
    echo "<div class='col-sm-10'>";
    echo "<input type='text' class='form-control' id='txtname' placeholder='Nombres y Apellidos' $propiedadblocked value='" . $_SESSION['flagname'] . "'>";
    echo "</div>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='txtemail' class='col-sm-2 control-label'> Escoge.:</label>";
    echo "<div class='col-sm-10'>";
    // echo "<input type='text' class='form-control' id='txtubicacion' onkeyup='valubi()' placeholder='Provincia,provincia,distrito'>";
    // echo "<div id='smsubicacion'></div>";


    echo "<label for='inputAddress'>Ubicación : Departamento,Provincia,Distrito</label>";
    require("../utils/ubigeocmb.php");
    // echo "<select id='iddepartamento' class='form-control'>";
    // echo "</select>";
    // echo "<select id='idprovincia' class='form-control'>";
    // echo "<option value='' id=''>Escoge la provincia...</option>";
    // echo "</select>";
    // echo "<select id='iddistrito' class='form-control'>";
    // echo "<option value=''>Escoge el Distrito...</option>";
    // echo "</select>";
    echo "</div>";
    echo "</div>";


    echo "<div class='form-group'>";
    echo "<label for='inputName' class='col-sm-2 control-label'>Dirección</label>";
    echo "<div class='col-sm-10'>";
    echo "<input type='text' class='form-control' id='txtdireccion' placeholder='Indica donde estas ubicado - No se verá en la web' required>";
    echo "</div>";
    echo "</div>";

 if($_SESSION['tipouser'] == "2"){
    echo "<div class='form-group'>";
    echo "<label for='inputExperience' class='col-sm-2 control-label'>Presentación</label>";
    echo "<div class='col-sm-10'>";
    echo "<textarea class='form-control' maxlength='350' id='txtdescripcion'  placeholder='Haz una buena presentación , esto es lo que verán tus clientes...' required></textarea>";
    echo "</div>";
    echo "</div>";
 }

    echo "<div class='form-group'>";
    echo "<label for='inputSkills' class='col-sm-2 control-label'><i class='fa fa-whatsapp fa-2' aria-hidden='true'></i> Whatsapp</label>";
    echo "<div class='col-sm-10'>";
    echo "<input type='tiponumber' class='form-control' id='txtcel' placeholder='Por aqui te van a contactar' required>";
    echo "</div>";
    echo "</div>";

    //Select de busqueda de trabajo Solo si se tratase de especialista - Condicional

    if($_SESSION['tipouser'] == "2"){
        echo "<div class='form-group'>";
        echo "<label for='inputSkills' class='col-sm-2 control-label'> Te dedicas a ?</label>";
        echo "<div class='col-sm-10'>";
        echo "<select class='form-control' id='selectespecialidad'>";
        foreach($listservice->listarservicios() as $resultlistser){
           echo "<option value='".$resultlistser['idtipservicio']."'>".$resultlistser['name']."</option>";     
        }
        echo "</select>";
        echo "</div>";
        echo "</div>";
    }

   
    




    //Select de busqueda de trabajo - --- 

    echo "<div class='form-group'>";
    echo "</div>";
    echo "<div id='smserrordatospersonales'></div>";
    echo "<div class='form-group'>";
    echo "<div class='col-sm-offset-2 col-sm-10'>";
    echo "<button type='button' id='btnactualizar' onclick='registrar()' class='btn btn-danger' data-toggle='modal' data-target='#modal-info'>Actualizar</button>";
    echo "<button type='button' id='btncancelar' onclick='cancelar()' class='btn btn-warning' data-toggle='modal' data-target='#modal-info'>Cancelar</button>";
    echo "</div>";
    echo "</div>";
    echo "</form>";
    echo "</div>";
}

if (!empty($_POST['requestmostrar'])) {
    // Lógica que envia al front si el usuario tiene registrado los datos para iniciar con la validación

    //Validar si es la primera vez que ingrsa a la opción para editar datos
    
    foreach ($entityusers->listaruser($_SESSION['email']) as $foreachusers) {
        $flagdevalidacion = $foreachusers['nrodoc'];
    }

    $vregistro = $utils->vregisteruser($_SESSION['email']);
    if ($vregistro === 0) {
        // es 0 cuando se encuentra sin registrar
        echo "<div class='alert alert-info alert-dismissible'>";
        echo "<h4><i class='icon fa fa-info'></i> Gracias por Registrarte!</h4>";
        echo "<p>Hola " . $_SESSION['nameandlast'] . "  y bienvenido a Broker Go! para comenzar a usar la plataforma tienes que registrar tus datos para Inicializar tu plataforma , Vamos! .</p>";
        echo "</div>";

        echo "<button type='button' onclick='mostrarformfirst()' class='btn btn-block btn-primary btn-lg'>Comienza a Editar</button>";

        echo "</div>";
    } else if($vregistro === 1){
        // Si encuentra información en la Base de datos sobre el Doc,Dirección,whatsapp , entre otras , se mostrará este Form para editar la información
        //Vamos a extraer la información desde la base de datos.
        //Si la data existe se va a crear una sesión para no editar el campo de DNI y Nombres y apellidos.
        $_SESSION['flagmostrardata'] = "noeditardnilastname";
        //
        echo "<form class='form-horizontal'>";

        echo "<div class='callout callout-warning   '>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
        echo "<h4><i class='icon fa fa-info'></i> Tus datos</h4>";
        echo "Editar Información.";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='inputName' class='col-sm-2 control-label'>Documento</label>";

        echo "<div class='col-sm-10'>";
        echo "<div class='input-group input-group-lg'>";
        echo "<div class='input-group-btn'>";

        echo "</div>";
        echo $foreachusers['nrodoc'];
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='inputName' class='col-sm-2 control-label'>Nombres Full:</label>";
        echo "<div class='col-sm-10'>";
        echo $foreachusers['nameandlast'];
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='txtemail' class='col-sm-2 control-label'> Ubicación</label>";
        echo "<div class='col-sm-10'>";
        foreach ($dataubicacion->selectdataubigeo($foreachusers['ubigeo']) as $foreachubicacion) {
            echo $foreachubicacion['provincia'].",".$foreachubicacion['distrito'];
        }
        echo "</div>";
        echo "</div>";


        echo "<div class='form-group'>";
        echo "<label for='inputName' class='col-sm-2 control-label'>Dirección</label>";
        echo "<div class='col-sm-10'>";
        echo $foreachusers['direccion'];
        echo "</div>";
        echo "</div>";
        if ($_SESSION['tipouser'] == "2") {
            // Mostrar la información de presentación si el tipo de usuario es de Tipo especialista 2
            echo "<div class='form-group'>";
            echo "<label for='inputExperience' class='col-sm-2 control-label'>Presentación</label>";
            echo "<div id='smspresentacion'></div>";
            echo "<div class='col-sm-10'>";
            echo "<blockquote>";
            echo "<textarea class='form-control' disabled='true' value='" . $foreachusers['present'] . "' maxlength='350'  placeholder='" . $foreachusers['present'] . "' required></textarea>";
            echo "<small>Tu presentación de Trabajo <cite title='Broker Go'>Broker Go</cite></small>";
            echo "</blockquote>";
            echo "</div>";
            echo "</div>";
        }

        echo "<div class='form-group'>";
        echo "<label for='inputSkills' class='col-sm-2 control-label'><i class='fa fa-whatsapp fa-2' aria-hidden='true'></i> Whatsapp</label>";
        echo "<div class='col-sm-10'>";
        echo $foreachusers['celular'];
        echo "</div>";
        echo "</div>";
        if ($_SESSION['tipouser'] == "2") {
        echo "<div class='form-group'>";
        echo "<label for='inputSkills' class='col-sm-2 control-label'><i class='fa fa-whatsapp fa-2' aria-hidden='true'></i>Tu servicio.:</label>";
        echo "<div class='col-sm-10'>";
        echo $listservice->listarserviciosxcod($foreachusers['idtipservicio']);
        echo "</div>";
        echo "</div>";

        }
        echo "<div class='form-group'>";
        echo "</div>";
        echo "<div id='smserrordatospersonales'></div>";
        echo "<div class='form-group'>";
        echo "<div class='col-sm-offset-2 col-sm-10'>";
        echo "<button type='button'  onclick='mostrarformfirst()' class='btn btn-danger' data-toggle='modal' data-target='#modal-info'>Editar Información</button>";
        echo "</div>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
    }
    //




}

if (!empty($_POST['requestactivateubicacion'])) {



    $valorfiltrado = $utils->characterespecialubicacion($_POST['requestvalorubi']);


    foreach ($dataubicacion->buscarxcodubic($valorfiltrado) as $foreachdata) {

        echo "<div class='callout callout-warning'>";
        echo "<p>" . $foreachdata['unido'] . " - CORRECTO!</p>";
        echo "</div>";
        // La ubicación se va ir guardando en una variable       
        $_SESSION['ubigeo'] = $foreachdata['idubigeo'];
    }
    if (empty($foreachdata['unido'])) {
        echo "<div class='callout callout-danger'>";
        echo "<p>No se encontro : #Quedate en casa</p>";
        echo "</div>";
        // Se guardara en una sessión si no existe  
        $_SESSION['ubigeo'] = "ubigeofalse";
    }
    // echo "<div class='callout callout-info'>";
    // echo "<p>".$foreachdata['unido']."</p>";
    // echo "</div>";

}

if (!empty($_POST['requestactivatedescripcion'])) {
    $num = $utils->cajadedetxtarea($_POST['requestcanttotaldescripcion']);

    echo "<code>" . $num . "</code>";
}

if (!empty($_POST['requestactivateregister'])) {
    // Destruir la sesión para que no sale la validación !! importante
   
    
    //
    // Filtrado de informacion front end
    if($_SESSION['tipouser'] == "1"){
        // Si es tipo cliente no debe de llenar información en la presentación
        $_POST['requesttxtdescripcion']="defaulclientedefaulclientedefaulclientedefaulclientedefaulclientedefaulclientedefaulclientedefaulcliente";
    }
    $nombre =  $utils->ucwordsletter($utils->characterespecialubicacion($_POST['requesttxtname']));
    $direccion = $utils->ucwordsletter($utils->characterespecialubicacion($_POST['requesttxtdireccion']));
    $descripcion = $utils->firtsletterup($utils->characterespecialubicacion($_POST['requesttxtdescripcion']));
    $celular = $utils->characterespecialubicacion($_POST['requesttxtcel']);
    $nrodoc = $utils->characterespecialubicacion($_POST['requesttxtnrodoc']);
    // $requesttxtubicacion = $utils->characterespecialubicacion($_POST['requesttxtubicacion']);
    $requesttxtubicacion = $utils->characterespecialubicacion($_POST['requestubicacion']);


    foreach($entityusers->listaruser($_SESSION['email']) as $resulttipo2){
        $resulttip = $resulttipo2['tipouser'];
    }

    if($resulttip == "2"){
        $requestsespecialidad = $utils->characterespecialubicacion($_POST['requestsespecialidad']);
    }else{
        $requestsespecialidad = "99";
    }

    
    // convertir la descripción anumero
    $numdescripción = strlen($descripcion);
    // Restricciones

    if (!empty($_SESSION['tdoc'])) {
        $tipodoc = $_SESSION['tdoc'];
    } else {
        $tipodoc = $utils->characterespecialubicacion($_POST['requestselectedtipodoc']);
    }
    if (!empty($_SESSION['flagdoc'])) {
        $nrodoc = $_SESSION['flagdoc'];
    }
    if (!empty($_SESSION['flagname'])) {
        $nombre = $_SESSION['flagname'];
    }
    if ($utils->valdatavacia($nombre) === "false") {
        $mensaje = "El campo Nombres no puede estar vacia";
    } else if ($utils->valdatavacia($nrodoc) === "false") {
        $mensaje = "El Número de Documento no puede estar vacía";
    } else if ($utils->valdatavacia($direccion) === "false") {
        $mensaje = "El campo dirección no puede estar vacia";
    } else if ($utils->valdatavacia($descripcion) === "false") {
        $mensaje = "El campo presentación no puede estar vacia";
    } else if ($utils->valdatavacia($requesttxtubicacion) === "false") {
        $mensaje = "Debes de indicar tu Departamento/Provincia/Distrito";
    } else if ($utils->valdatavacia($celular) === "false") {
        $mensaje = "El campo Celular no puede estar vacia";
    } else if ($utils->valnrotelefono($celular) != 1) {
        $mensaje = $utils->valnrotelefono($celular);
    } else if (!empty($utils->cajadedetxtarea($numdescripción))) {
        $mensaje = "El campo presentación ".$utils->cajadedetxtarea($numdescripción);
    } else if (!empty($utils->validaciontipodoc($nrodoc, $tipodoc))) {
        $mensaje = $utils->validaciontipodoc($nrodoc, $tipodoc);
    // } else if (!isset($_SESSION['ubigeo'])) {
    //     $mensaje = "Falta escoger tu Ubicación";
    // } else if ($_SESSION['ubigeo'] == "ubigeofalse") {
    //     $mensaje = "No existe la Ubicación indicada , favor de corregir";
    } else if(!empty($utils->tipouser($resulttip,$requestsespecialidad,$sdettable,$cdettable))){
        $mensaje = $utils->tipouser($resulttip,$requestsespecialidad,$sdettable,$cdettable);
    } else {
        // Funcionalidad "Publicar un trabajo"
        //Cambia la variable si ya existe la sesión de tdoc,nombre y nro doc
        echo $_SESSION['flagactivadorupdateusers'] = $entityusers->Actualizarusuario($nombre,$_POST['requestubicacion'], $direccion, $nrodoc, $celular, $tipodoc, $_SESSION['email'], $descripcion,$requestsespecialidad);
        //Flag que indica que fue actualizado correctamente
  
    }

    if (!empty($mensaje)) {
        echo "<div class='alert alert-danger alert-dismissible'>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
        echo "<h4><i class='icon fa fa-ban'></i> Alerta de Registro!</h4>";
        echo $mensaje;
        echo "</div>";
    }
}
