<?php 


class entitynewservice{

// Estado de solicitud 1 = Abierto , 2 = "Cerrado" , 3 = "No concretado" - Se insertara en duro
    function registrarservicio($iduser,$idserv,$tmaserv,$detalleserv,$idpaprox,$idtipserv,$fecharegistro,$estadoserv,$idespeasignado){
        require("../utils/config/conex.php");
        $estadosol='1';
        $insertdata = mysqli_query($enlacego,"INSERT INTO newservice VALUES (NULL, '$iduser', '$idserv', '$tmaserv', '$detalleserv', '$idpaprox', '$idtipserv', '$fecharegistro', NULL, NULL, '$estadosol','$idespeasignado','$estadoserv')");
        mysqli_close($enlacego);

    //    if($insertdata == false){
    //        echo "error en insercción";
    //    }


    }

    function buscarservxcodcliente($codcli){
        require("../utils/config/conex.php");
        // Busca el ultimo registro del usuario realizado por el front de tipo contratación directa para realizar el envio de mensaje por whatsapp
        $querysearch = mysqli_query($enlacego,"SELECT * FROM newservice WHERE iduser ='$codcli' AND tcontratacion='D' ORDER BY idhistorico DESC LIMIT 1");
        $arraybus = array();
        while($rowmen = mysqli_fetch_assoc($querysearch)){
            $arraybus[]=$rowmen;
        }
        return $arraybus;
    }
    // Buscar tickets generados por el cliente y que esten abiertos (1:Abierto,2:Cerrado,3 No concluido) y de tipo Directo =D
    function mostrarticket($iduser,$estadosol,$tcontratacion){
        require("../utils/config/conex.php");
        $querybusq = mysqli_query($enlacego,"select * from newservice where iduser='$iduser' and estadosol='$estadosol' and tcontratacion='$tcontratacion' ORDER BY idhistorico DESC");
        $arraybusq = array();
        while($rowbusq = mysqli_fetch_assoc($querybusq)){
            $arraybusq[] = $rowbusq;
        }
        return $arraybusq;
        mysqli_close($enlacego);
    }

     // Buscar tickets que fueron asignado a mi persona y de tipo abierto (1:Abierto,2:Cerrado,3 No concluido) y de tipo Directo =D
     function mticketasignados($idespeclient,$estadosol,$tcontratacion){
        require("../utils/config/conex.php");
        $querybusq2 = mysqli_query($enlacego,"select * from newservice where idespeclient='$idespeclient' and estadosol='$estadosol' and tcontratacion='$tcontratacion' ORDER BY idhistorico DESC");
        $arraybusq2 = array();
        while($rowbusq2 = mysqli_fetch_assoc($querybusq2)){
            $arraybusq2[] = $rowbusq2;
        }
        return $arraybusq2;
        mysqli_close($enlacego);
    }

}
?>

