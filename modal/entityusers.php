<?php

class entityusersmodal{

    function registrarusers($tipouser,$datetime,$email,$password,$contrato,$nombrescompletos){
        require("../utils/config/conex.php");
        $queryinsert = mysqli_query($enlacego,"INSERT INTO gouser VALUES (NULL, '$tipouser', '$nombrescompletos', 'default', 'default', '$datetime', '$email', '$password', 'default', '000000000000', '000000000000',$contrato,'9','default','99')");
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
        $queryselect = mysqli_query($enlacego,"select * from gouser where email='$codemail'");
        $arraryselectuuser = array();
        while($filas = mysqli_fetch_assoc($queryselect)){
            $arraryselectuuser[] = $filas;
        }
        return $arraryselectuuser;
        }
        // Función que realizará la primera actualización del Especialista GO o Cliente GO
    function Actualizarusuario($nameandlastname,$ubigeo,$direccion,$nrodoc,$celular,$tipodoc,$email,$presentacion,$especialidad){
        require("../utils/config/conex.php");
        $updatequery = mysqli_query($enlacego,"UPDATE gouser SET nameandlast = '$nameandlastname',ubigeo = '$ubigeo',direccion = '$direccion',nrodoc = '$nrodoc',celular = '$celular',tdocumento = '$tipodoc' ,present = '$presentacion' ,idtipservicio = '$especialidad' WHERE email = '$email'");
         mysqli_close($enlacego);
    }


    // Listar usuarios por limite
    // Funcion usada en el front del sistema - no del intranet
    function listaruserxlimit($inicio, $fin)
    {
        // En duro - llevar a un sistema como parametro Listar cada 10 resultado Variable $fin
        require("../utils/config/conex.php");
        $querylistarxlimit = mysqli_query($enlacego, "SELECT * FROM gouser WHERE tipouser ='2' AND tdocumento<>9 LIMIT $inicio,$fin");
        $arrayxlimit = array();
        while ($filaresult = mysqli_fetch_assoc($querylistarxlimit)) {
            $arrayxlimit[] = $filaresult;
        }
        return $arrayxlimit;
        mysqli_close($enlacego);
    }
    function listaruserxtip($tipuser,$cantregistros){
        require("../utils/config/conex.php");
        $querytouser = mysqli_query($enlacego,"select * from gouser where tipouser ='$tipuser' limit $cantregistros");
        $arraytouser = array();
        while($rowtouser = mysqli_fetch_assoc($querytouser)){
            $arraytouser[] = $rowtouser;
        }
        return $arraytouser;
        mysqli_close($enlacego);
    }
    // Funcion que se utiliza en el search de la web
    function filtrobusqfront($idtipservicio, $idtipouser, $present, $ubigeo,$inicio2,$fin2)
    {
        require("../utils/config/conex.php");
        $querysearch = mysqli_query($enlacego, "SELECT * FROM gouser WHERE idtipservicio LIKE '%$idtipservicio%' AND tipouser = '$idtipouser' AND present LIKE '%$present%' AND ubigeo LIKE '%$ubigeo%' AND tdocumento<>9 limit $inicio2,$fin2");
        $arraysearch = array();
        while ($rowsearch = mysqli_fetch_assoc($querysearch)) {
            $arraysearch[] = $rowsearch;
        }
        return $arraysearch;
        mysqli_close($enlacego);
    }

    // Funcion que te devuelve solo la lista de especialistas que esten registrados complemtanete y sean de tipo 2 (Especialista)
        function listarxiduser($iduser){
            require("../utils/config/conex.php");
            $querylistarxiduser= mysqli_query($enlacego,"SELECT * FROM gouser where iduser ='$iduser' and tipouser='2' and tdocumento <> 9");
            $arraylistarxiduser = array();
            while($rowlistarxiduser = mysqli_fetch_assoc($querylistarxiduser)){
                $arraylistarxiduser[] = $rowlistarxiduser;
            }
            return $arraylistarxiduser;
            mysqli_close($enlacego);
        }
        
        

    
}
