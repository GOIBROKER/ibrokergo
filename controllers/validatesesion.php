<?php
/*
Este módulo va a validar el código de sesión, para el formulario expuerto Registrar usuario ya que este es solo
para Especialistas GO, mientras que el tipo de usuario sea "2" , se podra ingresar al form , caso contrario se irá
a register.php donde puede registrarse los dos tipos de usuario

Incluir este módulo
*/

//Activamos la sesión 
session_start();
if($_SESSION['idtipouser']=="2"){

}else{
    header("location:../bienvenido/registergo.php");
}
?>