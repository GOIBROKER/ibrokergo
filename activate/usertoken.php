<?php

$userid = $_GET['iduser'];
$passurl = $_GET['token'];

echo $userid;
echo "</br>";
echo $passurl;

if($userid == "123" && $passurl == $valencryotacion){
    echo "Ingreso correcto";
}else{
    echo "error";
}



 

?>