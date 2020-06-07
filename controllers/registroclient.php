<?php
require_once("../utils/utils.php");
require_once("../modal/entityusers.php");
require_once("../utils/utilsemail.php");
session_start();
//obtener la hora actual
// Fin de obtener hora actua

if (!empty($_POST['requestactivate'])) {
    // Instanciar
    $validatepass = new utilsphp();
    $insertuser = new entityusersmodal();
    $selectuser = new entityusersmodal();
    //Depurar espacios en Blanco
    $pass1 = trim($_POST['requestpass1']);
    $pass2 = trim($_POST['requestpass2']);
    $requestnamecompleto = ucwords(trim($_POST['requestnamecompleto']));
    $email = $validatepass->characterespecialubicacion(strtolower(trim($_POST['requestemail'])));
    $valuser = $selectuser->buscarusers($email);
    if ($_POST['resquestvalemail'] == "false") {
        // Trae un mensaje de la base de datos , tabla alert , es lo mismo para los otros códigos
        echo $validatepass ->alerts("1");
    }else if($requestnamecompleto == ""){
        echo $validatepass ->alerts("8");
    }else if ($pass1 != $pass2) {
        echo $validatepass ->alerts("2");
    } else if ($pass1 == "" || $pass1 == "") {
        echo $validatepass ->alerts("3");
    } else if (strlen($pass1) <= 6 || strlen($pass1) <= 6) {
        echo $validatepass ->alerts("4");
    } else if ($_POST['requestvalcondiciones'] == "false") {
        echo $validatepass ->alerts("5");
    } else if ($valuser === 0) {
        // Si existe el usuario el resultado será 1
        echo "1";

    } else if($valuser === 69){
        echo "69";// Error desconocido
    }else {
        // Tipo de usuario 1 = Cliente
        $checkcontrato = $_POST['requestvalcondiciones'];
        // Tipo de Usuario 1 = Cliente , 2 = Especialista GO , desde registroclient.js
        $tipodeuser = $_SESSION['temptipuser1'];
        // Encryptar contraseña
        $passencryptado = $validatepass->Encryptarpass($pass2);
        // Traer Fecha Actual
        $fechaactual = $validatepass->fecha();
        // Verificar el tipo de usuario enviado desde registroclient.js
       
        // Se realizar el registro del usuario --------------- nuevo cambio
        $registrado = $insertuser->registrarusers($tipodeuser,$fechaactual, $email, $passencryptado, $checkcontrato,$requestnamecompleto,4);
        if($registrado === 4){
            // Vamos a crear una contraseña aleatoria , para usarlo despues

           // Vamos a enviar un correo con los datos del usuario
            // Vamos a enviar un correo con los datos del usuario
           $emailutil = new email();
           $emailutil->emailregister($email,$requestnamecompleto,$email,1,$validatepass->passaleatorio(),$validatepass->fecha());
           echo $registrado;
        }
        //



    }
}
if(!empty($_POST['requestactivatesesionexist'])){
       
        echo "<p class='text-danger'>Ya tienes una cuenta en GO! - Inicia Sesión</p>";
        echo "<div class='form-group row'>";
        echo "<p class='text-danger'>Email</p>";
        echo "<div class='col-sm-10'>";
        echo "<input type='email' class='form-control' id='txtemail' placeholder='Email'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group row'>";
        echo "<p class='text-danger'>Pass :</p>";
        echo "<div class='col-sm-10'>";
        echo "<input type='password' class='form-control' id='txtpassword' placeholder='Password'>";
        echo "<div id='alertsesion'></div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='form-group row'>";
        echo "<div class='col-sm-10'>";
        echo "<button type='button' class='btn btn-outline-warning' onclick='iniciarsesion()'>Iniciar Sesión</button><p class='text-primary'>¿Recuperar contraseña?</p>";
        echo "</div>";
        echo "</div>";
        
}
if(!empty($_POST['requestactivatesesionnotexist'])){
    // Si la sesión no existe y ya esta creado , vamos a realizar la creación en nuevo view para el registro del proyecto
    // Se Necesita
    // Emai
// Vamos a traer la Sesión y el tipo de usuario
session_start();
// echo $_SESSION['idespecialidad'];
}

