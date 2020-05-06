<?php
class serviciosmodal
{

    function listarservicios()
    {

        //Esta funcion lista la tabla servicesdet
        require("../utils/config/conex.php");
        $arraylistarservicios = array();
        $querylistarservicios = mysqli_query($enlacego, "Select * from servicesdet");
        while ($rowlistarservicios = mysqli_fetch_assoc($querylistarservicios)) {
            $arraylistarservicios[] = $rowlistarservicios;
        }
        return $arraylistarservicios;
    }

    function listarserviciosxcod($codigo){

        // Funcion de IntranetServices - Exclusivo
        /*
        páginas que lo usan:
        1.- generarsolicitud.php
        */
        require("../utils/config/conex.php");
        $querylistarserviciosxcod = mysqli_query($enlacego, "Select * from servicesdet where idtipservicio='$codigo'");
        while($rowlistarserviciosxcod=mysqli_fetch_assoc($querylistarserviciosxcod)){
            $respuesta = $rowlistarserviciosxcod['name'];
        }
        return $respuesta;
     
    }

}
