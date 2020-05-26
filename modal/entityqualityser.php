<?php

class entityquality{

    // Función que sirve para insertar data en la tabla quality u actualizar los campos de la tabla historico
    
    function insertdata($idhistorico,$pointserv,$comen,$pointcovi,$fsolucion,$estasol,$idterror){
        require("../utils/config/conex.php");
        $insertquery = mysqli_query($enlacego,"INSERT INTO qualityservice VALUES($idhistorico,$pointserv,'$comen',$pointcovi,'NULL',$idterror)");
        // Tabla historico
        $updatequer = mysqli_query($enlacego,"UPDATE newservice SET fsolucion='$fsolucion',estadosol='$estasol' where idhistorico='$idhistorico'");

        if($insertquery==false){
            $log = 0; // Si hay error sale 0
        }else if ($updatequer == false){
            $log = 0;   // Si hay error sale 0 
        }else{
            $log = 1;// Si hay error sale 1
        }
        return $log;
    }
}
?>