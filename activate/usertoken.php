<?php
require_once("../modal/entityhashuser.php");
$userhash = new userhash();

$userid = $_GET['iduser'];
$passurl = $_GET['token'];


echo $userhash->validarhash($userid,$passurl);


?>