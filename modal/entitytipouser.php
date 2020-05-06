<?php
class tipouser{

    function buscartipuser($codigotip){
        //buscar Alias
        require("../utils/config/conex.php");
        $queryselect = mysqli_query($enlacego,"select * from tipuser where id='$codigotip'");
        while($rowselect = mysqli_fetch_assoc($queryselect)){
            $alias = $rowselect['Alias'];
        }
        return $alias;
    }
}

?>