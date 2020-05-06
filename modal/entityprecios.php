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


}

?>