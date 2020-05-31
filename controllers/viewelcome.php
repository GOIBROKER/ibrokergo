<?php
//Clases globales
require_once("../modal/serviciosmodal.php");
//

//segunda opcion de especialidad
if(!empty($_POST['requestactivate'])){

$listarserviciosmodal = new serviciosmodal();

echo "<p class='text-info' style='margin-bottom:14px'><h4>Escoge el Tipo de Servicio.</h4></p>";
echo "<select class='browser-default custom-select' id='selectioninformatico'>"; 
echo "<option value=''>Seleccion aqui - GO</option>";

//Cargar en el combo la lista de servicios del campo name
foreach($listarserviciosmodal->listarservicios() as $foreachlistarservicios){
    echo "<option value='".$foreachlistarservicios['idtipservicio']."'>".$foreachlistarservicios['name']."</option>";
}
echo "</select>"; 
echo "<img src='frontend/assets/img/logobroker.png' class='rounded mx-auto d-block'>"; 
echo "<button type='button' onclick='secondoption()' class='btn btn-danger btn-lg'>Continuar</button>";

}
//jj
if(!empty($_POST['requestactivatesecond'])){
session_start();
// Tomamos el valor del combobox
$_SESSION['idespecialidad'] = $_POST['requestoptionservice'];

echo "<p class='text-danger'>Registrate para Continuar</p>";
echo "<div class='form-group'>";
echo "<div class='col-lg-10'>";
echo "<input type='text' class='form-control' id='txtnombrescompletos' placeholder='Nombres Completos'>";
echo "<input type='email' class='form-control' id='txtemail' placeholder='Email'>";
echo "</div>";
echo "</div>";
echo "<div class='form-group'>";
echo "<div class='col-lg-10'>";
echo "<input type='password' class='form-control' id='txtpass1' placeholder='Contraseña'>";
echo "</div>";
echo "<div class='col-lg-10'>";
echo "<input type='password' class='form-control' id='txtpass2'  placeholder='Repetir Contraseña'>";
echo "</div>";
echo "<div id='alertval'></div>";
echo "</div>";
echo "<div class='form-group'>";
echo "<div class='col-lg-offset-2 col-lg-10'>";
echo "<div class='checkbox'>";
echo "<label>";
echo "<p class='text-secondary'> <input type='checkbox' name='aceptar' id='aceptar'> Acepto Términos y Condiciones - Leer Condiciones";
echo "</label>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "<button type='button' onclick='firtsoption()' class='btn btn-danger btn-lg'>Retroceder</button>";
echo "<button type='button' id='btnregistrarse' onclick='registrar(1)' class='btn btn-primary btn-lg'>Registrarse</button>";
}
?>