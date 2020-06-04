<?php
//
require("../modal/entityubigeonew.php");
$ubigeo = new modalubigeo();

if(!empty($_POST['postbubigeo'])){

    echo "<option value=''>Escoge Departamento...</option>";

    foreach ($ubigeo->departamento() as $fdep){
        echo "<option value='".$fdep['idDepartamento']."'>".$fdep['departamento']."</option>";
    }
 
}

if(!empty($_POST['postactivatevalprov'])){
    echo "<option value='' id='' >Escoge la provincia...</option>";
    foreach ($ubigeo->provincia($_POST['postvalprov']) as $fprov){
        echo "<option value='".$fprov['idProvincia']."'>".$fprov['provincia']."</option>";
    }
}

if(!empty($_POST['postvaldistact'])){
    echo "<option value=''>Escoge el Distrito...</option>";
    foreach ($ubigeo->distrito($_POST['postvaldistri']) as $fdist){
        echo "<option value='".$fdist['idDistrito']."'>".$fdist['distrito']."</option>";
    }
}
?>