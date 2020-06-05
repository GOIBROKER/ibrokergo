<?php
require_once("../modal/entityhistorylogin.php");
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
$utilshe = new utilsphp();
$historylogin = new historylogin();
if (!empty($_POST['requestactivatelogin'])) {
    if(!empty($_SESSION['temptipuser1'])){
        $_SESSION['temptipuser1']="";
    }
    if (!empty($_SESSION['email'])) {
        // Si la sesión ya esta iniciada se va a rechazar y se va a enviar al panel
        echo "2";
    }else{
        // Instanciamos las alertas
        $alertslogin = new utilsphp();
        $email = $_POST['requestemail'];
        $password = $_POST['requestpassword'];
        $validatelogin = new loguingo();
        $email2 = $utilshe->characterespecialubicacion($email);    

        // Mientras que el email y contraseña tengan informacion
        if (!empty($email2) && !empty($password)) {
            // Validamos que exista el usuario
            $resultado = $validatelogin->loginvalidate($email2);
            // Si existe el usuario retorna el número 1 , caso contrari sería incorrecto
            if ($resultado == 1) {
                $desincryptar = new utilsphp();
                //traemos la contraseña encryptada
                $passdb = $validatelogin->verificaruser($email2, $password);
                // Validamos en Util la desincrytación : si nos trae 1 es correcta , caso contrario error.
                if ($desincryptar->desincryptarpass($password, $passdb) == "1") {
            
                    $selectuser = new entityusersmodal();
                    // Variable para extraer el Alias
                    $tipouser = new tipouser();
                    // Si existe sesiones activas se van a destruir - Esto es para que no realicen dos inicios de sesiones en un mismo navegador
                    if (!empty($_SESSION['email'])) {
                        $_SESSION['nameandlast'] = "";
                        $_SESSION['email'] = "";
                        $_SESSION['tipouser'] = "";
                        $_SESSION['aliastipouser'] = "";
                        $_SESSION['fechaderegistro'] = "";
                        $_SESSION['iduser'] = "";
                    }
                    //--------------------------------------------
                    foreach ($selectuser->listaruser($email2) as $foreachresultselect) {
                        $_SESSION['nameandlast'] = $foreachresultselect['nameandlast'];
                        $_SESSION['email'] = $email2;
                        $_SESSION['iduser'] = $foreachresultselect['iduser'];
                        $_SESSION['tipouser'] = $foreachresultselect['tipouser'];
                        $_SESSION['aliastipouser'] = $tipouser->buscartipuser($foreachresultselect['tipouser']);
                        $_SESSION['fechaderegistro'] = $foreachresultselect['fechaderegistro'];
                    }
                    //Vamos a realizar un insert de logueo exitoso
                    // Información de de iduser / fecha de login
                    $historylogin->insertlogin($utilshe->fecha(),$foreachresultselect['iduser']);

                    //
                    // echo $_SESSION['nameandlast'];
                    // echo $_SESSION['email'];
                    // echo $_SESSION['tipouser'];
                    echo "1";
                } else {
                    //Mostramos la alerta desde BD
                    echo $alertslogin->alerts("10");
                }


                //Vamos a crear la sesión



                //Solo creamos la sesión del ID - NAME

            } else {
                //Mostramos la alerta desde BD
                echo $alertslogin->alerts("10");
            }
        } else {
            //Mostramos la alerta desde BD
            echo $alertslogin->alerts("11");
        }
    }
}

if(!empty($_POST['requestactivatetipuser'])){
$_SESSION['flagactimenuse']="2";

}
