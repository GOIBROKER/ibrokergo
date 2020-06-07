<?php
    
    
class userhash{

    function registerhash($email,$passhash,$fecha){
        
        require("../utils/config/conex.php");
        $queryinsert = mysqli_query($enlacego,"INSERT INTO hashuser VALUES(NULL,'$email','$passhash',2,'$fecha')");
        mysqli_close($enlacego);
        // $queryregister = mysqli_query($enlacego,"INSERT INTO hashuser VALUES(NULL,'$email','$passhash',2,'$date')");

    }
    // Funcion que verifica si el email y pass indicado son correctos , si son correctos va actualizar el campo de estado de usuario de 4 a 1
    function validarhash($email, $passhash)
    {
        require("../utils/config/conex.php");
        $qryselect = mysqli_query($enlacego, "SELECT * FROM hashuser WHERE emailhash='$email' AND passacti='$passhash' AND status='2'");

        if ($qryselect == false) {
            echo "hubo un error , intentarlo nuevamente";
        } else {
            $rowd = mysqli_num_rows($qryselect);
            if ($rowd == 0) {
                $men = 3; // Enlace caducado
            } else if ($rowd == 1) {
                // Se va actualizar el estado del usuario a 1
                $qryupdatehash = mysqli_query($enlacego,"UPDATE hashuser SET status='1' where emailhash='$email'");
                if($qryupdatehash){
                    $qryupdateuser = mysqli_query($enlacego,"UPDATE gouser SET statususer='1' where email='$email'");
                    $men = 1; // Se inserto correctamente
                }else{
                   $men = 2; // Error en activación
                }
            }
        }
        return $men;

        mysqli_close($enlacego);
    }
    function insertreset($emailhash,$code,$status,$fechahash){
        require("../utils/config/conex.php");
        $insertquery = mysqli_query($enlacego,"INSERT INTO resetuser VALUES (NULL,'$emailhash','$code','$status','$fechahash')");
        if($insertquery == false){
            $msmr = 0; // ERROR INSERT
        }else{
            $msmr = 1; // OK INSERT
        }
        return $msmr;
    }

    function searchtoken($token,$email){
        require("../utils/config/conex.php");
        $querytoken = mysqli_query($enlacego,"SELECT * FROM resetuser where email='$email' and code='$token' and status = 1");
        if($querytoken == false){
            $respuesta = 0; // Error de consulta
        }else{
            $num = mysqli_num_rows($querytoken);
            if ($num == 0) {
                $respuesta = 1; // No existe el token o esta expirado    
            } else if ($num == 1) {
                
                $updatetoken = mysqli_query($enlacego,"UPDATE resetuser SET STATUS='2' WHERE email='$email' AND CODE = '$token'");
                if($updatetoken == false){
                    $respuesta = 0;
                }else{
                    $respuesta = 2; // Procede
                }
            }
            return $respuesta;
        }
    }
}

?>