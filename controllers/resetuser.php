<?php
require_once("../utils/utils.php");
require_once("../utils/utilsemail.php");
require_once("../modal/entityusers.php");
require_once("../modal/entityhashuser.php");
$utilreset = new utilsphp();
$usermodal = new entityusersmodal();
$userhashreset = new userhash();
$emailreset = new email();
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

?>