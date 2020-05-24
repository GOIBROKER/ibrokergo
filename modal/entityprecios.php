<?php

class preciosaprox{

    function mostrarprecios(){
        require("../utils/config/conex.php");
        $querymostrarprecios = mysqli_query($enlacego,"Select * from precios");
        $arraymostrar = array();
        while($rowprecios = mysqli_fetch_assoc($querymostrarprecios)){
            $arraymostrar[] = $rowprecios;
        }
        return $arraymostrar;

    }
    function idprecios($idprecio){
        require("../utils/config/conex.php");
        $querymostrarprecios2 = mysqli_query($enlacego,"Select * from precios where idprecio='$idprecio'");
        $arraymostrar2 = array();
        while($rowprecios2 = mysqli_fetch_assoc($querymostrarprecios2)){
            $arraymostrar2[] = $rowprecios2;
        }
        return $arraymostrar2;

    }


}

?>