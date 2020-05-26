<?php

class tblerrorserv {
    function loadserv(){
        require("../utils/config/conex.php");
        $arrayserv = array();
        $queryload = mysqli_query($enlacego,"select * from tblerrorserv");
        while($rowd = mysqli_fetch_assoc($queryload)){
            $arrayserv[] = $rowd;
        }
        if($queryload == "false"){
            echo "0";
        }
        return $arrayserv;
    }
}
?>