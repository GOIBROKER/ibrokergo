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
        $texto = preg_replace('([^A-Za-z0-9 ,ñÑáéíóúÁÉÍÓÚ@._-])', '', $texto);	     					
        return $texto;
    }

    function valnrotelefono($nrocasacel)
    {
        $flagnrcel = "9";
        $charactercel = strlen($nrocasacel);
        if ($charactercel <> $flagnrcel) {
            $mensaje = "El nro. de contacto tiene que ser de 9 Dígitos";
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
        if ($numtota < 56) {
            $smsvaltxtarea = "Debe contener como mínimo 56 carácteres | Vas .: " . $numtota." carácter Válido";
        } else if ($numtota > 350) {
            $smsvaltxtarea = "No debe de superar los 350 carácteres .: " . $numtota;
        } else if ($numtota >= 56 && $numtota <= 350) {
            $smsvaltxtarea = "";
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
    Validar existencia de opciones en base de datos para los selects
    
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
// Funcion que corta un texto - Según criterio hasta 82 carácteres como máximo
    function cortartexto($textocort){
        $mensajep = ", me gusta la plataforma ya que me pueden encontrar facilmente en cualquier ubicación ; me encanta.";
        $totletras = strlen($textocort);
        if($totletras > 110){
            $cortadoletter = substr($textocort, 0, 110)." ...";

        }else if($totletras <= 110){
           
            $cortadoletter1=$textocort.$mensajep;
            $cortadoletter = substr($cortadoletter1, 0, 110)." ...";

        }
        return $cortadoletter;
    }

    // funcion para validar si la sesión esta activa o no.

    function validatesesion($sessionval){
        // Si la sesión esta activa devolvera un 1 , caso contrario un 0
        if(!empty($sessionval)){
            $valsesion = "1";
        }else{
            $valsesion = "0";
        }
        return $valsesion;
    }
    // Funcion que filtra la información - Vacios , caracteres especiales y largo de las cajas de texto Y/o otros.

    function depurateinfor($tamano,$informacion,$tdcaja){
        
        // Primera letra en mayúscula y sin caracteres especiales
        $textodep = ucfirst(preg_replace('([^A-Za-z0-9 ,ñÑáéíóúÁÉÍÓÚ])', '', $informacion));
        $largo = strlen($textodep);
        if(empty($textodep)){
            $sms = "El " . $tdcaja . " no puede estar vacia";
        }else if($largo < $tamano){
            $sms = "La opción " . $tdcaja . " debe de tener al menos ".$tamano." carácteres";
        }else{
            $sms = "";
        }
        
        return $sms;
    }
    //Validar si el usuario ya registro su información
    function vregisteruser($codemail){
        require("config/conex.php");
        $queryve = mysqli_query($enlacego,"select * from gouser where email = '$codemail'");
        while($rowqry = mysqli_fetch_assoc($queryve)){
            $tdocumento = $rowqry['tdocumento'];
        }
            if($tdocumento <> 9){
                // YA se registro
                $rest = 1;
            }else{
                // No se registro
                $rest = 0;
            }
            return $rest;
    }

    function depurateinfocavioalfa($informacion,$tdcaja){
        
        // Primera letra en mayúscula y sin caracteres especiales
        $textodep = ucfirst(preg_replace('([^A-Za-z0-9 ,ñÑáéíóúÁÉÍÓÚ])', '', $informacion));
        if(empty($textodep)){
            $sms = "El " . $tdcaja . " no puede estar vacia";
        }else{
            $sms = "";
        }
        
        return $sms;
    }

    function convertircawhat($dato){
        $caracterbusc=" ";
        $changecaracter="%20";
        $datane =str_replace($caracterbusc,$changecaracter,$dato);
        return $datane;
    }
 // Herramienta que sirve para contactar whatsapp
    function enviarwhatsapp($nombrescom,$servicio,$detalleserv,$cel){        
        $flagwhatsapp = "https://api.whatsapp.com/send?phone=051";
        $bienvenida=",vengo de la pagina BrokerGo! ";
        $converd = new utilsphp();
        $converd->convertircawhat($bienvenida);
        $data2 = ",necesito preguntarte sobre tu servicio de .:";
        $data3 = ",Detalle .: ";
        echo $link=$flagwhatsapp.$cel."&text=Hola,soy%20".$converd->convertircawhat($nombrescom).$converd->convertircawhat($bienvenida).$converd->convertircawhat($data2).$converd->convertircawhat($servicio).$converd->convertircawhat($data3).$converd->convertircawhat($detalleserv);
        
        
    }
   


    
}
