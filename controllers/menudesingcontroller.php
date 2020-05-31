<?php
session_start();
if(!empty($_POST['postmenui'])){

    if(!empty($_SESSION['email'])){
        echo 1;
    }else{
        echo 0;
    }
}
?>