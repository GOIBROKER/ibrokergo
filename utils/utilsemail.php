<?php
require_once("../controllers/flagsystem.php");
require_once("../utils/utils.php");
require_once("../modal/entityhashuser.php");
class email {

    function emailregister($emailto,$nombres,$iduser,$ta,$passaleatorio,$fecha){
        $flagsemail = new flags();
        /* variable $ta , es para verificar si la acción sera de insert o update en caso de recuperar contraseña
        1 = Insert 2 = Update
        */
       $userhash = new userhash();
       $userhash->registerhash($emailto,$passaleatorio,$fecha);
        // Vamos a crear un número aleatorio y convertirlo a encryptarlo e insertarlo en la tabla SQL


        /// Vamos a insertar en la base de datos de contraseñas como previa actualización
            
         
            
        
   
                    // Vamos a enviar un correo con los datos del usuario
               
                    $msg = "<div class=''>
            <div class='aHl'></div>
            <div id=':rh' tabindex='-1'></div>
            <div id=':um' class='ii gt'>
                <div id=':uj' class='a3s aXjCH '><u></u>
                    <div style='margin:0;padding:0;min-width:100%'>
                        <center style='width:100%;table-layout:fixed'>
                            <div style='max-width:600px'>
                                <table style='margin:0 auto;width:100%;max-width:600px;font-family:arial' align='center' cellpadding='0' cellspacing='0' border='0'>
                                    <tbody>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:0 50px;line-height:0;text-align:center'>
                                                <a href='#' target='_blank' data-saferedirecturl=''><img src='".$flagsemail->urlsite."/librerias/dist/img/user4-128x128.jpg' style='margin:0 auto;border:0;width:50%;max-width:120px' alt='' class='CToWUd'></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <p style='font-size:14px;color:#999;text-align:left'>¡Bienvenid@
                                                    <span>".$nombres."</span>!
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <p style='font-size:14px;color:#999;text-align:center'>".$flagsemail->bienvenida."</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px;text-align:center'>
                                                <a style='font-size:18px;color:#fff;display:inline-block;padding:15px 20px;border-radius:25px;text-decoration:none;background:#cc0066;text-align:center' href='".$flagsemail->urlsite.$flagsemail->urlwebaactivate."?iduser=".$iduser."&token=".$passaleatorio."' target='_blank'>
                                                    ".$flagsemail->buttonactivate."
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <hr style='width:100%;height:1px;border:0;border-bottom:1px solid #cccc;margin:0;padding:0'>
                                                <h3 style='margin:15px 0;margin-bottom:0;text-align:center;color:#999;font-size:14px'>.$flagsemail->emailtext1.</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px;letter-spacing:-5px;text-align:center'>
                                                <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                    <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                    </div>
                                                    <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                        <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title1</h3>
                                                        <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->titlesubt1</p>
                                                    </div>
                                                    <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                </div>
                                                <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                    <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                    </div>
                                                    <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                        <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title2</h3>
                                                        <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->titlesubt2</p>
                                                    </div>
                                                    <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
        
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px;letter-spacing:-5px;text-align:center'>
                                                <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                    <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                    </div>
                                                    <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                        <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title3</h3>
                                                        <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title3</p>
                                                    </div>
                                                    <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                </div>
                                                <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                    <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                    </div>
                                                    <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                        <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title4</h3>
                                                        <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title4</p>
                                                    </div>
                                                    <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='text-align:center;padding:15px 50px'>
                                                <a style='display:inline-block;font-size:14px;color:#0099cc;border:2px solid #0099cc;padding:0px 20px;border-radius:25px;text-decoration:none' href='".$flagsemail->urlsite."' target='_blank' data-saferedirecturl='><span style=' font-size:40px;display:inline-block;vertical-align:middle;padding:0 5px;line-height:34px'>+</span> Ver más</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='padding:10px 50px'>
                                                <p style='color:#999;font-size:10px;line-height:1.2;text-align:center;margin:0'>".$flagsemail->ftittle."</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <hr style='width:100%;height:1px;border:0;border-bottom:1px solid #cccc;margin:0;padding:0'>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <table border='0' align='center' cellpadding='0' cellspacing='0' style='border-spacing:0;width:136px;margin:0 auto'>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p style='color:#999;font-size:10px;line-height:1.2;text-align:center;margin:0'>2020 Broker Go!</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </center>
        
                    </div>
                </div>
                <div class='adL'>
        
        
                </div>
            </div>
        </div>
        <div id=':rp' class='ii gt' style='display:none'>
            <div id=':ro' class='a3s aXjCH undefined'></div>
        </div>
        <div class='hi'></div>
        </div>";
                   
                    $header = "MIME-Version: 1.0" . "\r\n";
                    $header .= "Content-type: text/html; charset=utf-8" . "\r\n";
                    $header .= "From: ".$flagsemail->emailfrom . "\r\n";
                    $header .="Reply-To: ".$flagsemail->emailfrom . "\r\n";
                    $header .="X-Mailer: PHP/". phpversion();
                    $enviomail = mail($emailto,$flagsemail->asunto,$msg,$header);
                    if($enviomail){
                        return 1; // Envio correcto
                    }else{
                        return 0; // Error al envio
                    }
               

    }    
    function emailreset($name,$emailtoreset,$code){
        $flagsemail = new flags();
          /// Vamos a insertar en la base de datos de contraseñas como previa actualización
        
   
                    // Vamos a enviar un correo con los datos del usuario
               
                    $msgreset = "<div class=''>
                    <div class='aHl'></div>
                    <div id=':rh' tabindex='-1'></div>
                    <div id=':um' class='ii gt'>
                        <div id=':uj' class='a3s aXjCH '><u></u>
                            <div style='margin:0;padding:0;min-width:100%'>
                                <center style='width:100%;table-layout:fixed'>
                                    <div style='max-width:600px'>
                                        <table style='margin:0 auto;width:100%;max-width:600px;font-family:arial' align='center' cellpadding='0' cellspacing='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:0 50px;line-height:0;text-align:center'>
                                                        <a href='#' target='_blank' data-saferedirecturl=''><img src='".$flagsemail->urlsite."/librerias/dist/img/user4-128x128.jpg' style='margin:0 auto;border:0;width:50%;max-width:120px' alt='' class='CToWUd'></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <p style='font-size:14px;color:#999;text-align:left'>¡Bienvenid@
                                                            <span>".$name."</span>!
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <p style='font-size:14px;color:#999;text-align:center'>".$flagsemail->bienvenidareset."</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px;text-align:center'>
                                                        <a style='font-size:18px;color:#fff;display:inline-block;padding:15px 20px;border-radius:25px;text-decoration:none;background:#cc0066;text-align:center' href='".$flagsemail->urlsitereset."' target='_blank'>
                                                            ".$flagsemail->buttonreseteo."
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <hr style='width:100%;height:1px;border:0;border-bottom:1px solid #cccc;margin:0;padding:0'>
                                                        <h3 style='margin:15px 0;margin-bottom:0;text-align:center;color:#999;font-size:14px'>.$flagsemail->emailtext1reset.</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px;letter-spacing:-5px;text-align:center'>
                                                        <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                            <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                            </div>
                                                            <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                                <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$code</h3>
                                                                <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->titlesubt1reset</p>
                                                            </div>
                                                            <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                        </div>
                                                       
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px;letter-spacing:-5px;text-align:center'>
                                                        <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                            <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </td>
                                                </tr>
        
        
                                                <tr>
                                                    <td style='padding:10px 50px'>
                                                        <p style='color:#999;font-size:10px;line-height:1.2;text-align:center;margin:0'>".$flagsemail->ftittle."</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <hr style='width:100%;height:1px;border:0;border-bottom:1px solid #cccc;margin:0;padding:0'>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <table border='0' align='center' cellpadding='0' cellspacing='0' style='border-spacing:0;width:136px;margin:0 auto'>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <td>
                                                                    </td>
                                                                    <td>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style='color:#999;font-size:10px;line-height:1.2;text-align:center;margin:0'>2020 Broker Go!</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </center>
                
                            </div>
                        </div>
                        <div class='adL'>
                
                
                        </div>
                    </div>
                </div>
                <div id=':rp' class='ii gt' style='display:none'>
                    <div id=':ro' class='a3s aXjCH undefined'></div>
                </div>
                <div class='hi'></div>
                </div>";
                   
                    $header = "MIME-Version: 1.0" . "\r\n";
                    $header .= "Content-type: text/html; charset=utf-8" . "\r\n";
                    $header .= "From: ".$flagsemail->emailfrom . "\r\n";
                    $header .="Reply-To: ".$flagsemail->emailfrom . "\r\n";
                    $header .="X-Mailer: PHP/". phpversion();
                    $enviomail = mail($emailtoreset,$flagsemail->asuntoreset,$msgreset,$header);
                    if($enviomail){
                        return 1; // Envio correcto
                    }else{
                        return 0; // Error al envio
                    }


    }
}

?>