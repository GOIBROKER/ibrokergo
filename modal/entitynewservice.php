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

}
?>

