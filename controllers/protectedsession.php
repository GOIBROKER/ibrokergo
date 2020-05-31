<?php
// Esto se esta incluyendo en el menuheader.php
session_start();
if(!empty($_SESSION['nameandlast'])){

}else{
    header("location:../bienvenido/logingo.php");
}
?>