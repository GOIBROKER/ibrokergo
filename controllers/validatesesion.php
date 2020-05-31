<?php
/*
Este módulo va a validar el código de sesión, para el formulario expuerto Registrar usuario ya que este es solo
para Especialistas GO, mientras que el tipo de usuario sea "2" , se podra ingresar al form , caso contrario se irá
a register.php donde puede registrarse los dos tipos de usuario

Incluir este módulo
*/

//Activamos la sesión 
session_start();
if(!empty($_SESSION['email'])){
    echo "<script>alert('Tienes una sesión iniciada , te vamos a redirigir a tu panel')</script>";
    header("location:../bienvenido/miespacio.php");
}

// if($_SESSION['flagactimenuse']=="2"){

// }else{
//     header("location:../bienvenido/registrate.php");
// }
?>