<?php
// Traemos para extraer el Alias
require_once("../modal/entitytipouser.php");
// traemos validaciones del modal
require_once("../modal/loginmodal.php");
// desincryptamos la contraseña en utils
require_once("../utils/utils.php");
//para usar este Controller Variables de Entrada requestactivatelogin(Activar) , requestemail, requestpassword
//vamos a traer una clase para realizar las sesiones
require_once("../modal/entityusers.php");
session_start();
if(!empty($_POST['requestactivatelogin'])){
    // Instanciamos las alertas
    $alertslogin = new utilsphp();
    $email=$_POST['requestemail'];
    $password=$_POST['requestpassword'];
    $validatelogin = new loguingo();
    // Mientras que el email y contraseña tengan informacion
    if(!empty($email)&&!empty($password)){
        // Validamos que exista el usuario
       $resultado = $validatelogin ->loginvalidate($email);
       // Si existe el usuario retorna el número 1 , caso contrari sería incorrecto
       if($resultado == 1){
           $desincryptar = new utilsphp();
           //traemos la contraseña encryptada
           $passdb = $validatelogin->verificaruser($email,$password);
            // Validamos en Util la desincrytación : si nos trae 1 es correcta , caso contrario error.
            if($desincryptar->desincryptarpass($password,$passdb) == "1"){
                 $selectuser = new entityusersmodal();
                 // Variable para extraer el Alias
                 $tipouser = new tipouser();
                // Si existe sesiones activas se van a destruir - Esto es para que no realicen dos inicios de sesiones en un mismo navegador
                if(!empty($_SESSION['email'])){
                    $_SESSION['nameandlast'] = "";
                    $_SESSION['email'] = "";
                    $_SESSION['tipouser'] = "";
                    $_SESSION['aliastipouser'] = "";
                    $_SESSION['fechaderegistro'] = "";
                }
                //--------------------------------------------
                foreach($selectuser->listaruser($email) as $foreachresultselect){
                    $_SESSION['nameandlast'] = $foreachresultselect['nameandlast'];
                    $_SESSION['email'] = $email;
                    $_SESSION['tipouser'] =$foreachresultselect['tipouser'];
                    $_SESSION['aliastipouser'] =$tipouser->buscartipuser($foreachresultselect['tipouser']);
                    $_SESSION['fechaderegistro'] =$foreachresultselect['fechaderegistro'];
                }
                // echo $_SESSION['nameandlast'];
                // echo $_SESSION['email'];
                // echo $_SESSION['tipouser'];
                echo "1";
             }
             else{
                //Mostramos la alerta desde BD
                echo $alertslogin->alerts("10");
            }
            
            
                //Vamos a crear la sesión
                
               
                
                //Solo creamos la sesión del ID - NAME
          
        }else{
            //Mostramos la alerta desde BD
            echo $alertslogin->alerts("10");
        }
    }else{
        //Mostramos la alerta desde BD
        echo $alertslogin->alerts("11");
    }
    
}

if(!empty($_POST['requestactivatetipuser'])){
$_SESSION['idtipouser']="2";

}
