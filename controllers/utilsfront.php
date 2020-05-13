<?php
require_once("../modal/entityubicacion.php");
$entityubi = new modalubicacion();
session_start();
// Busqueda de Departamento Utils
if(!empty($_POST['requescmb'])){

  
   echo " <div class='md-form mt-0'>";
   echo " <input class='form-control' type='text' id='txtdep' onkeyup='buscardepbusq(this.value)' placeholder='Buscar en.:Departamento,Provincia,Distrito' aria-label='Search'>";
   echo "<div id='resultdep'>";
   echo "Ejem.: Lima,Lima,San Luis";
   echo "</div>";
   echo " </div>";

}

if(!empty($_POST['responsebusqdep'])){

   $valorsearch = $_POST['responsevalinput'];

   foreach ($entityubi->buscarxcodubicfront($valorsearch) as $fresultubic){
     
   }
   if(!empty($fresultubic['unido'])){
      $_SESSION['ubigeofron'] = $fresultubic['idubigeo'];
      echo "<span class='badge badge-primary'>".$fresultubic['unido']." - Encontrado!</span>";
      
      
   }else{
      $_SESSION['ubigeofron'] ="";
      echo "No existe! - Buscar en todas los departamentos";
   }

   }

   if(!empty($_POST['responsebusqserv'])){
      
   }

  
// Fin de Busqueda de Departamento Utils
?>