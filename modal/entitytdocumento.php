<?php
class entitytdoc{
    function listdocumento(){
        require("../utils/config/conex.php");
        $querylist = mysqli_query($enlacego,"select * from tdocumento");
        $listarray = array();
        while($rowarray = mysqli_fetch_assoc($querylist)){
            $listarray[] = $rowarray;
        }
        return $listarray;
    }
}
?>