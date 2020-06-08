<?php
require_once("../utils/utils.php");
require_once("../utils/utilsemail.php");
require_once("../modal/entityusers.php");
require_once("../modal/entityhashuser.php");
$utilreset = new utilsphp();
$usermodal = new entityusersmodal();
$userhashreset = new userhash();
$emailreset = new email();
session_start();
if(!empty($_POST['postactivatereset'])){
    
    /* Validar la existencia del email y el estado
    Si estuviera Existencia de Email
    Estado Activado
    No Eliminado - Bloqueado - y si esta en plena activación , 
    derivarlo ala pantalla de reenviar correo de activación
    */
    $posttruser = $_POST['posttruser'];
    // Validar existencia de email y estado de usuario


    if(!empty($utilreset->email($posttruser))){
        echo $utilreset->email($posttruser);
    }else if($usermodal->buscarusers($posttruser) == 1){
        echo "<code>El email indicado no existe , favor de registrarte</code> <a href='../bienvenido/registergo.php'>Crear Usuario</a></strong>";
    }else{
        foreach($usermodal->listaruser($posttruser) as $fbuscaruser){
            if($fbuscaruser['statususer'] == 2){
                echo "<code>Tu cuenta esta suspendida : comunicate a contacto@brokergo.com.pe</code>";
            }else if($fbuscaruser['statususer'] == 3){
                echo "<code>Tu cuenta fue eliminada : comunicate a contacto@brokergo.com.pe</code>";
            }else if($fbuscaruser['statususer'] == 4){
                echo "<code>Tu cuenta debe de activarse , si no recibiste el correo , ingresa a </code> <a href='aemail.php'>Activar Usuario</a></strong>";
            }else if($fbuscaruser['statususer'] == 1){
                $tokennum = $utilreset->numaleatorio();
                $fechareset = $utilreset->fecha();
                $status = 1;
                // echo $posttruser."-".$tokennum."-".$status."-".$fechareset;
                $insert = $userhashreset->insertreset($posttruser,$tokennum,$status,$fechareset);
                if($insert == 0){
                    echo "Hubo un error , intentalo más tarde o envia un correo a contacto@brokergo.com.pe";
                }else if($insert == 1){
                    //Enviar email de reseteo
                    $resetemail = $emailreset->emailreset($fbuscaruser['nameandlast'],$posttruser,$tokennum);
                    if($resetemail == 1){
                        echo "Se envio a tu correo el link de reseteo , demora entre 1 a 5 minutos en llegar, Slds";
                    }else if($resetemail == 0){
                        echo "Hubo un error , favor de volver a intentar más tarde";
                    }else{
                        echo "Favor de volver a intentar más adelante";
                    }
                }
            }
        }
    }

    }

if (!empty($_POST['postactitoken'])) {
    $posttremail = $_POST['posttremail'];
    $posttxtoken = $_POST['posttxtoken'];

    if (!empty($utilreset->email($posttremail))) {
        echo $utilreset->email($posttremail);
    } else {
        $consultatoken = $userhashreset->searchtoken($posttxtoken, $posttremail);
        if ($consultatoken == 0) {
            echo "Ocurrio un error inesperado , volver mas tarde";
        } else if ($consultatoken == 1) {
            echo "Tu token no existe o esta <strong>expirado</strong> , volver a solicitar en <a href='reset.php'><code>Resetear password</code></a>";
        } else if ($consultatoken == 2) {
            $_SESSION['emailtoken'] = $posttremail;
            echo 2;
        } else {
            echo "Ocurrio un error inesperado , volver mas tarde";
        }
    }
}

if(!empty($_POST['postactpass'])){
    if(empty($_POST['postmypass1']) || empty($_POST['postmypass2'])){
        echo "Una de las contraseñas esta vacia";
    }else if(strlen($_POST['postmypass1'])<=6 || strlen($_POST['postmypass2'])<=6){
        echo "Las contraseñas deben de ser mayor a 6 letras";
    }else if($_POST['postmypass1'] != $_POST['postmypass2']){
        echo "Las contraseñas tienen que ser iguales";
    }else{
        $passen = $utilreset->Encryptarpass($_POST['postmypass2']);
        $updatepass = $usermodal->updatepass($_SESSION['emailtoken'],$passen);
        echo $updatepass;
    }
    // echo $_SESSION['emailtoken'];
}

// postactpass:actpass,
// postmypass1:mypass1,
// postmypass2:mypass2


if(!empty($_POST['postactivateemail'])){

    $posttruser = $_POST['posttxtemail'];

    if(!empty($utilreset->email($posttruser))){
        echo $utilreset->email($posttruser);
    }else if($usermodal->buscarusers($posttruser) == 1){
        echo "<code>El email indicado no existe , favor de registrarte</code> <a href='../bienvenido/registergo.php'>Crear Usuario</a></strong>";
    }else{
        foreach($usermodal->listaruser($posttruser) as $fbuscaruser){
            if($fbuscaruser['statususer'] == 2){
                echo "<code>Tu cuenta esta suspendida : comunicate a contacto@brokergo.com.pe</code>";
            }else if($fbuscaruser['statususer'] == 3){
                echo "<code>Tu cuenta fue eliminada : comunicate a contacto@brokergo.com.pe</code>";
            }else if($fbuscaruser['statususer'] == 1){
                echo "<code>Tu cuenta ya se encuentra activa , si perdistes el password ingresa aqui </code> <a href='reset.php'>Resetear Password</a></strong>";
            }else if($fbuscaruser['statususer'] == 4){

                $envioemail = $emailreset->emailregister($posttruser,$fbuscaruser['nameandlast'],$fbuscaruser['iduser'],2,$utilreset->passaleatorio(),$utilreset->fecha());
                
                echo "Se envio nuevamente el correo de activación , recuerde que demora entre 2 a 5 minutos , en caso no llegue el correo . Favor de revisar en Spam";
                // if($envioemail == 0){
                //     echo "Hubo un error en el envio de correo , intentar más tarde";
                // }else if($envioemail == 1){
                //     echo "Se envio nuevamente el correo de activación , recuerde que demora entre 2 a 5 minutos , en caso no llegue el correo . Favor de revisar en Spam";
                // }


            
            }
        }
    }



}
?>