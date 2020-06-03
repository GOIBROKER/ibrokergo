<?php

class entityquality{

    // Función que sirve para insertar data en la tabla quality u actualizar los campos de la tabla historico
    
    function insertdata($idhistorico,$pointserv,$comen,$pointcovi,$fsolucion,$estasol,$idterror){
        require("../utils/config/conex.php");
        $updatequer = mysqli_query($enlacego,"UPDATE newservice SET fsolucion='$fsolucion',estadosol='$estasol',points='$pointserv',comentario='$comen',tempcovid='$pointcovi',idtiperror='$idterror' where idhistorico='$idhistorico'");
        // $insertquery = mysqli_query($enlacego,"INSERT INTO qualityservice VALUES($idhistorico,$pointserv,'$comen',$pointcovi,'NULL',$idterror)");
        // Tabla historico

        if($updatequer==false){
            $log = 0; // Si hay error sale 0
        }else{
            $log = 1;// Si hay error sale 1
        }
        return $log;
    }
}
?>