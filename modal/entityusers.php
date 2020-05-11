<?php

class entityusersmodal{

    function registrarusers($tipouser,$datetime,$email,$password,$contrato,$nombrescompletos){
        require("../utils/config/conex.php");
        $queryinsert = mysqli_query($enlacego,"INSERT INTO gouser VALUES (NULL, '$tipouser', '$nombrescompletos', 'default', 'default', '$datetime', '$email', '$password', 'default', '000000000000', '000000000000',$contrato,'9','default')");
        mysqli_close($enlacego); 
    }
    // Buscar usuario por Email y devolver la cantidad de filas
    function buscarusers($codemail){
        require("../utils/config/conex.php");
        $queryselect =mysqli_query($enlacego,"select * from gouser where email='$codemail'");
        $filas = mysqli_fetch_row($queryselect);
        if($filas >=1){
            // Si existe el usuario es true
            $respuesta = "true";
        }else{
            // Si no existe el usuario es false
            $respuesta = "false";
        }
        return $respuesta;
        mysqli_close($enlacego); 
    }
    function listaruser($codemail){
        require("../utils/config/conex.php");
        $queryselect =mysqli_query($enlacego,"select * from gouser where email='$codemail'");
        $arraryselectuuser = array();
        while($filas = mysqli_fetch_assoc($queryselect)){
            $arraryselectuuser[] = $filas;
        }
        return $arraryselectuuser;
        

        }
        // Función que realizará la primera actualización del Especialista GO o Cliente GO
    function Actualizarusuario($nameandlastname,$ubigeo,$direccion,$nrodoc,$celular,$tipodoc,$email,$presentacion){
        require("../utils/config/conex.php");
        $updatequery = mysqli_query($enlacego,"UPDATE gouser SET nameandlast = '$nameandlastname',ubigeo = '$ubigeo',direccion = '$direccion',nrodoc = '$nrodoc',celular = '$celular',tdocumento = '$tipodoc' ,present = '$presentacion' WHERE email = '$email'");
       
    }


    // Listar usuarios por limite
    // Funcion usada en el front del sistema - no del intranet
    function listaruserxlimit($inicio, $fin)
    {
        // En duro - llevar a un sistema como parametro Listar cada 10 resultado Variable $fin
        require("../../utils/config/conex.php");
        $querylistarxlimit = mysqli_query($enlacego, "SELECT * FROM gouser WHERE tipouser ='1' LIMIT $inicio,$fin");
        $arrayxlimit = array();
        while ($filaresult = mysqli_fetch_assoc($querylistarxlimit)) {
            $arrayxlimit[] = $filaresult;
        }
        return $arrayxlimit;
        mysqli_close($enlacego);
    }
}
