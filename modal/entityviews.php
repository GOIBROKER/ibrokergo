<?php

class viewscalculate{
// Sacar la cantidad de clientes que le recomiendan
/* Solo se cumplirar si:
1.- La solicitud fue cerrada con exito tanto por el Cliente y especialista : estado 2
2.- Si no existe ningun error Tipo 99 ( Error por defecto , es cuando no existio error)

*/
// Sacar total de clientes
function calculaestrellas($idespecialista,$flagxdefecto,$solcerrada){
    require("../utils/config/conex.php");
    // Estraer total de clientes de un especialista ( Tipo 2)
    $querynum = mysqli_query($enlacego,"SELECT iduser FROM newservice WHERE idespeclient = '$idespecialista' AND idtiperror = '$flagxdefecto' AND estadosol='$solcerrada' GROUP BY iduser");
    
    $totalcliensatis = mysqli_num_rows($querynum);
    if($totalcliensatis == 0){
        $mensaje = "<h6><span class='badge badge-warning'>Aún no tiene recomendación</span></h6>";
    }else if($totalcliensatis > 0){

        $mensaje = "<h6><span class='badge badge-danger'>".$totalcliensatis." usuarios lo recomiendan</span></h6>";
    }
    return $mensaje;
}


    function calculastar($idespecialista, $flagxdefecto, $solcerrada,$campoamedir)
    {
        require("../utils/config/conex.php");

        $starvacio ="<i class='far fa-star'></i>";// Vacio
        $starlleno ="<i class='fas fa-star'></i>";//lleno
        $starmedio ="<i class='fas fa-star-half-alt'></i>";//Medio Lleno
        // Estraer total de clientes
        $querynum2 = mysqli_query($enlacego, "SELECT iduser FROM newservice WHERE idespeclient = '$idespecialista' AND idtiperror = '$flagxdefecto' AND estadosol='$solcerrada'");
        $totclien = mysqli_num_rows($querynum2);
        // Estraer el total de points de servicio
        $querysum = mysqli_query($enlacego, "SELECT SUM($campoamedir) as sumapserv FROM newservice WHERE idespeclient = '$idespecialista' AND idtiperror = '$flagxdefecto' AND estadosol='$solcerrada'");
        while ($rowd = mysqli_fetch_assoc($querysum)) {
            $total = $rowd['sumapserv'];
        }
        if($total<=0 || empty($total)){
            $totpoint = 0;
        }else if($total>0){
            $totpoint = round($total / $totclien,2);
            // Redondear 
        }
        
        if($totpoint == 0){
            $mens = $starvacio.$starvacio.$starvacio.$starvacio.$starvacio;
        }else if($totpoint >= 0.5 && $totpoint < 1){
            $mens = $starmedio.$starvacio.$starvacio.$starvacio.$starvacio;
        }else if($totpoint == 1 || $totpoint < 1.5){
            $mens = $starlleno.$starvacio.$starvacio.$starvacio.$starvacio;
        }else if($totpoint == 1.5 || $totpoint < 2){
            $mens = $starlleno.$starmedio.$starvacio.$starvacio.$starvacio;
        }else if($totpoint == 2 || $totpoint < 2.5){
            $mens = $starlleno.$starlleno.$starvacio.$starvacio.$starvacio;

        }else if($totpoint == 2.5 || $totpoint < 3){
            $mens = $starlleno.$starlleno.$starmedio.$starvacio.$starvacio;

        }else if($totpoint == 3 || $totpoint < 3.5){
            $mens = $starlleno.$starlleno.$starlleno.$starvacio.$starvacio;
        }else if($totpoint == 3.5 || $totpoint < 4){
            $mens = $starlleno.$starlleno.$starlleno.$starmedio.$starvacio;
        }else if($totpoint == 4 || $totpoint < 4.5){
            $mens = $starlleno.$starlleno.$starlleno.$starlleno.$starvacio;
        }else if($totpoint == 4.5 || $totpoint < 5){
            $mens = $starlleno.$starlleno.$starlleno.$starlleno.$starmedio;
        }else if($totpoint == 5){
            $mens = $starlleno.$starlleno.$starlleno.$starlleno.$starlleno;
        }else{
            $mens = "Sin calificación aparente";
        }


        return $mens;
    }
}


?>