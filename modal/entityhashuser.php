<?php
    
    
class userhash{

    function registerhash($email,$passhash,$fecha){
        
        require("../utils/config/conex.php");
        $queryinsert = mysqli_query($enlacego,"INSERT INTO hashuser VALUES(NULL,'$email','$passhash',2,'$fecha')");
    
        // $queryregister = mysqli_query($enlacego,"INSERT INTO hashuser VALUES(NULL,'$email','$passhash',2,'$date')");

    }
}

?>