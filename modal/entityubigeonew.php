<?php
class modalubigeo{
function departamento(){
    require("../utils/config/conex.php");
    $arraydep = array();
    $qrydepartamento = mysqli_query($enlacego,"select * from departamentos");
    while($rowdep = mysqli_fetch_assoc($qrydepartamento)){
        $arraydep[] = $rowdep;
    }

    if($qrydepartamento == false){
         return 0;
    }else{
        return $arraydep;
    }
}

function provincia($cod){
    require("../utils/config/conex.php");
    $arrayprov = array();
    $qryprov =  mysqli_query($enlacego,"select * from provincia where idDepartamento = '$cod' ");
    while($rowprov = mysqli_fetch_assoc($qryprov)){
        $arrayprov[] = $rowprov;
    }
    
    if($qryprov == false){
        return 0;
   }else{
       return $arrayprov;
   }
}
function distrito($codprov){
    require("../utils/config/conex.php");
    $arraydist = array();
    $qrydist = mysqli_query($enlacego,"select * from distrito where idProvincia = '$codprov' ");
    while($rowdist = mysqli_fetch_assoc($qrydist)){
        $arraydist[] = $rowdist;
    }
    if($qrydist == false){
        return 0;
   }else{
       return $arraydist;
   }

}



}
