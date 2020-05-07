<?php 


class entitynewservice{

// Estado de solicitud 1 = Abierto , 2 = "Cerrado" , 3 = "No concretado" - Se insertara en duro


    function registrarservicio($iduser,$idserv,$tmaserv,$detalleserv,$idpaprox,$idtipserv,$fecharegistro){
        require("../utils/config/conex.php");
        $estadosol='1';
        $insertdata = mysqli_query($enlacego,"INSERT INTO newservice VALUES (NULL, '$iduser', '$idserv', '$tmaserv', '$detalleserv', '$idpaprox', '$idtipserv', '$fecharegistro', NULL, NULL, '$estadosol')");
        
        mysqli_close($enlacego);
        
    }

}
?>

