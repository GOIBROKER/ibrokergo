<?php

class utilsphp
{

    //Funcion para encryptar contraseña y lo devuelve cifrado
    function Encryptarpass($password)
    {

        $PASSENCRYPTE = password_hash($password, PASSWORD_DEFAULT);
        return $PASSENCRYPTE;
    }
    //Funcion para desencryptar // devuelve vacio si es incorrecto , devuelve 1 si es correcto contraseña y lo devuelve cifrado
    //$password2 = Desde la base de datos || $validacionpass = Desde el front end ( Registro de user)
    function desincryptarpass($password, $hash)
    {
        if (password_verify($password, $hash)) {
            $resulhash = "1";
        } else {
            $resulhash = "0";
        }
        return $resulhash;
    }

    function fecha()
    {
        date_default_timezone_set("America/Lima");
        $fecha = date("Y-m-d h:i:s");
        return $fecha;
    }

    // Tomar datos de alertas desde base de datos
    function alerts($codigo){
        require("config/conex.php");
        
        $selectalert = mysqli_query($enlacego,"select * from alerts where idalert='$codigo'");
        while($rowalerts = mysqli_fetch_assoc($selectalert)){
            $resultrow = $rowalerts['bootstrap'];
        }
        return $resultrow;
    }

    function characterespecialubicacion($texto)
    {
        #$texto = preg_replace('([^A-Za-z0-9])', '', $texto); - - quita con espacios
        $texto = preg_replace('([^A-Za-z0-9 ,ñÑáéíóúÁÉÍÓÚ])', '', $texto);	     					
        return $texto;
    }

    function valnrotelefono($nrocasacel)
    {
        $charactercel = strlen($nrocasacel);
        if ($charactercel <= 7) {
            $mensaje = "El nro. de contacto tiene que ser más de 7 Dígitos";
        } else if (empty($nrocasacel)) {
            $mensaje = "El campo no puede ser vacio";
        } else if (!is_numeric($nrocasacel)) {
            $mensaje = "El celular ingresado no es un número , corregir";
        } else{
            $mensaje = "1";
        }
        return $mensaje;
    }
    function valdatavacia($codigoletra){
        if (!empty($codigoletra)) {
            $mensajevacion = "true";
        }else{
            $mensajevacion = "false";
        }
        return $mensajevacion;
    }
    // La primera letra en mayuscula de una frase
    function firtsletterup($firtsletter){
        $cadenaupfirts = ucfirst($firtsletter);
        return $cadenaupfirts;
    }
    // La primera letra en mayuscula de todas las palabras
    function ucwordsletter($firtsletter)
    {
        $cadenaucwordsletter = ucwords($firtsletter);
        return $cadenaucwordsletter;
    }
    // Validar total de letras
    function cajadedetxtarea($numtota)
    {
        if ($numtota < 125) {
            $smsvaltxtarea = "Debe contener como mínimo 125 carácteres | Total .: " . $numtota;
        } else if ($numtota > 350) {
            $smsvaltxtarea = "No debe de superar los 350 carácteres .: " . $numtota;
        } else if ($numtota >= 125 && $numtota <= 350) {
            $smsvaltxtarea = "Correcto";
        }else{
            
        }
        return $smsvaltxtarea;
    }
    // Validar Titulo
    function cajadedetitulo($numtotaltitulo)
    {
        if ($numtotaltitulo < 35) {
            $smsvaltxtarea = "Debe contener como mínimo 35 carácteres | Total .: " . $numtotaltitulo;
        } else if ($numtotaltitulo > 120) {
            $smsvaltxtarea = "No debe de superar los 120 carácteres .: " . $numtotaltitulo;
        } else if ($numtotaltitulo >= 35 && $numtotaltitulo <= 120) {
            $smsvaltxtarea = "Correcto";
        }else{
            
        }
        return $smsvaltxtarea;
    }
    // Utilitario para validar el tipo de documento
    function validaciontipodoc($num,$tipodoc){
        //tipo DOC , DNI-LE:1 ,Carnet ext:2,Pasaporte :3

        $nrodocumento = strlen($num);
        // Validación de CE y pasaporte , si esta todo bien , devolverá un vacio
        if($tipodoc == 3 || $tipodoc == 2){
            // Logintud  12  Sunat y es alfanumerico
            if($nrodocumento != 12){
                $respuesta = "El número de documento tiene que ser de 12 dígitos";
            }else{
                $respuesta = "";
            }
        }
        // Validación de DNI
        if ($tipodoc == 1) {
            if (!is_numeric($num)) {
                // Logintud  8  Sunat y es númerico
                $respuesta = "El número de DNI debe ser númerico";
            } else if ($nrodocumento != 8) {
                $respuesta = "El número de DNI tiene que ser de 8 dígitos";
            } else {
                $respuesta = "";
            }
        }
        return $respuesta;
    }

    /*
    Validar existencia de opciones en base de datos
    
    */
    function validarestados($codigo,$tabla,$campo){
        require("config/conex.php");
        
        $validarestado = mysqli_query($enlacego,"select * from $tabla where $campo='$codigo'");
        $flagvalidate = mysqli_num_rows($validarestado);
        if($flagvalidate>0){
            $mensajes = "returnok";
        }else{
            $mensajes = "";
        }
        return $mensajes;
        mysqli_close($enlacego);
    }
    // extrae datos en especificos
    function extraerinfo($codigo2,$tabla2,$campo2){
        require("config/conex.php");
        $arrayextraerinfo = array();
        $validarestado2 = mysqli_query($enlacego,"select * from $tabla2 where $campo2='$codigo2'");
        while($rowinfo = mysqli_fetch_assoc($validarestado2)){
            $arrayextraerinfo[] = $rowinfo;
        }

        return $arrayextraerinfo;
        mysqli_close($enlacego);
    }
    // Validar tipo de usuario ,especialidad
    function tipouser($tipouser,$idespecialidad,$sdettable,$cdettable){

        if($tipouser == "1"){
            $devolver="";
        }else if($tipouser == "2"){
            $funcutils = new utilsphp();
            if($funcutils->valdatavacia($idespecialidad) === "false"){
                $devolver = "Escoger especialidad";
            }else if(empty($funcutils->validarestados($idespecialidad,$sdettable,$cdettable))){
                $devolver = "Escoger especialidad";
            }
            $devolver="";
        }
        return $devolver;
    }

    function cortartexto($textocort){
        $totletras = strlen($textocort);
        if($totletras > 82){
            $cortadoletter = substr($textocort, 0, 82)." ...";

        }else if($totletras <= 82){
            $cortadoletter=$textocort;
        }
        return $cortadoletter;
    }
    
}
