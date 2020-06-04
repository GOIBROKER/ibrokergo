
<?php
$mysql_host= 'localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db= 'goperu';
$enlacego = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
$enlacego->set_charset("utf8");
if(mysqli_connect_errno()){
echo "Error en la conexion" . mysqli_connect_error();
}


// $mysql_host= 'localhost';
// $mysql_user='rootgo';
// $mysql_pass='$Whalter2010';
// $mysql_db= 'dbbrokergo';
// $enlacego = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
// $enlacego->set_charset("utf8");
// if(mysqli_connect_errno()){
// echo "Error en la conexion" . mysqli_connect_error();
// }
?>