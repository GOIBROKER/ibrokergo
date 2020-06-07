<?php

class entityusersmodal{

    function registrarusers($tipouser,$datetime,$email,$password,$contrato,$nombrescompletos,$statususer){
        require("../utils/config/conex.php");
        $queryinsert = mysqli_query($enlacego,"INSERT INTO gouser VALUES (NULL, '$tipouser', '$nombrescompletos', 50000, 'default', '$datetime', '$email', '$password', 'default', '000000000000', '000000000000',$contrato,'9','default','99',$statususer)");
        if($queryinsert==false){
            $register = 3; // Error Desconocido
        }else{
            $register = 4; // Procede
        }
        return $register;
        mysqli_close($enlacego); 
    }
    // Buscar usuario por Email y devolver la cantidad de filas
    function buscarusers($codemail){
        require("../utils/config/conex.php");
        $queryselect = mysqli_query($enlacego,"select * from gouser where email='$codemail'");
        $filas = mysqli_fetch_row($queryselect);
        
        if($queryselect==false){
            $respuesta = 69;
        }else{
            if($filas >=1){
                // Si existe el usuario es true
                $respuesta = 0;
            }else{
                // Si no existe el usuario es false
                $respuesta = 1;
            }
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
        if($updatequery == false){
            $flagac = "0"; // Error
        }else{
            $flagac = "1";
        }
        return $flagac;
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
        $querytouser = mysqli_query($enlacego,"select * from gouser where tipouser ='$tipuser' AND tdocumento<>9 limit $cantregistros");
        $arraytouser = array();
        while($rowtouser = mysqli_fetch_assoc($querytouser)){
            $arraytouser[] = $rowtouser;
        }
        return $arraytouser;
        mysqli_close($enlacego);
    }
    // Funcion que se utiliza en el search de la web
    function filtrobusqfront($idtipservicio, $idtipouser, $present, $departamento,$provincia,$distrito,$nameespecialista,$inicio2,$fin2)
    {
        require("../utils/config/conex.php");
        // $querysearch = mysqli_query($enlacego, "SELECT * FROM gouser WHERE idtipservicio LIKE '%$idtipservicio%' AND tipouser = '$idtipouser' AND present LIKE '%$present%' AND ubigeo LIKE '%$ubigeo%' AND tdocumento<>9 limit $inicio2,$fin2");
        $querysearch = mysqli_query($enlacego, "SELECT * FROM viewubigeouser WHERE idtipservicio LIKE '%$idtipservicio%' AND tipouser = '$idtipouser' AND present LIKE '%$present%' AND idDistrito LIKE '%$distrito%' AND idProvincia  LIKE '%$provincia%' AND idDepartamento  LIKE '%$departamento%' AND nameandlast LIKE '%$nameespecialista%' AND tdocumento<>9 LIMIT $inicio2,$fin2");
        $arraysearch = array();
        while ($rowsearch = mysqli_fetch_assoc($querysearch)) {
            $arraysearch[] = $rowsearch;
        }
        
            return $arraysearch;
        
        
        mysqli_close($enlacego);
    }
// Busca cantidad
    function totalbusqfront($idtipservicio, $idtipouser, $present, $departamento,$provincia,$distrito,$nameespecialista,$inicio2,$fin2)
    {
        require("../utils/config/conex.php");
        // $querysearch = mysqli_query($enlacego, "SELECT * FROM gouser WHERE idtipservicio LIKE '%$idtipservicio%' AND tipouser = '$idtipouser' AND present LIKE '%$present%' AND ubigeo LIKE '%$ubigeo%' AND tdocumento<>9 limit $inicio2,$fin2");
        $querysearch = mysqli_query($enlacego, "SELECT * FROM viewubigeouser WHERE idtipservicio LIKE '%$idtipservicio%' AND tipouser = '$idtipouser' AND present LIKE '%$present%' AND idDistrito LIKE '%$distrito%' AND idProvincia  LIKE '%$provincia%' AND idDepartamento  LIKE '%$departamento%' AND nameandlast LIKE '%$nameespecialista%' AND tdocumento<>9 LIMIT $inicio2,$fin2");
        if($querysearch == false){
            return 99; // error
        }else{
            $flagtotal = mysqli_num_rows($querysearch);
            return $flagtotal;
        }
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

        function listarxiduser2($iduser2){
            require("../utils/config/conex.php");
            $querylistarxiduser2= mysqli_query($enlacego,"SELECT * FROM gouser where iduser ='$iduser2'  and tdocumento <> 9");
            $arraylistarxiduser2 = array();
            while($rowlistarxiduser2 = mysqli_fetch_assoc($querylistarxiduser2)){
                $arraylistarxiduser2[] = $rowlistarxiduser2;
            }
            return $arraylistarxiduser2;
            mysqli_close($enlacego);
        }
        function updatepass($email,$pass){
            require("../utils/config/conex.php");
            $qryupdatepass = mysqli_query($enlacego,"UPDATE gouser SET pass='$pass' where email ='$email'");
            if($qryupdatepass == false){
                $men = 0; // Error
            }else{
                $men = 1; // ok
            }
            return $men;
            mysqli_close($enlacego);
        }
        
        
        

    
}
