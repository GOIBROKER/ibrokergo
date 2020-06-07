<?php
    
    
class userhash{

    function registerhash($email,$passhash,$fecha){
        
        require("../utils/config/conex.php");
        $queryinsert = mysqli_query($enlacego,"INSERT INTO hashuser VALUES(NULL,'$email','$passhash',2,'$fecha')");
        mysqli_close($enlacego);
        // $queryregister = mysqli_query($enlacego,"INSERT INTO hashuser VALUES(NULL,'$email','$passhash',2,'$date')");

    }
    // Funcion que verifica si el email y pass indicado son correctos , si son correctos va actualizar el campo de estado de usuario de 4 a 1
    function validarhash($email,$passhash){
        require("../utils/config/conex.php");
        $qryselect = mysqli_query($enlacego,"SELECT * FROM hashuser WHERE emailhash='$email' AND passacti='$passhash' AND status='2'");
        
        if($qryselect == false){
            echo "hubo un error , intentarlo nuevamente";
        }else{
            $rowd = mysqli_num_rows($qryselect);
            if($rowd==0){
                $men = "Favor de volver a solicitar el link de activación por este link :";
            }else if($rowd==1){
                $men = "Correcto :";
            }
        }
        return $men;
                       
        mysqli_close($enlacego);
    }
}

?>