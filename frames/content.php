<?php
//Control de Rutas

/*Si la sesión de especialidad $_SESSION['idespecialidad']  esta activo , proveniente de la página
 especialidad.php ( Esta página registra el ingreso por primera vez de un usuario , el usuario escoge algún
 servicio y este servicio tiene que mantenerse despues que el usuario se ha registrado)

*/
if(!empty($_SESSION['idespecialidad'])){
  include("generarsolicitud.php");

}else{

  include("principal.php");

}

?>
