<?php
class loguingo

{

    // Validaruser , si existe devuelve 1 si no existe 0
    function loginvalidate($user)
    {
        require("../utils/config/conex.php");

        $queryselect = mysqli_query($enlacego, "select * from gouser where email='$user'");
        $countuserexits = mysqli_num_rows($queryselect);
        
        if ($countuserexits == 1) {
            $mensaje = "1";
        } else {
            $mensaje = "0";
        }
        return $mensaje;
        mysqli_close($enlacego);
    }

    // Validar user , una vez que se verifica , este modulo trae el pass encryptado
    function verificaruser($user)
    {
        require("../utils/config/conex.php");
        $queryselectpass = mysqli_query($enlacego,"select * from gouser where email='$user'");
        while ($rowuser = mysqli_fetch_assoc($queryselectpass)) {
            $arraypass = $rowuser['pass'];
        }
        return $arraypass;
    }
}
