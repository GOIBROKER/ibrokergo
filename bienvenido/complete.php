<!DOCTYPE html>
<html lang="en">




<?php
require_once("../frames/headndesing.php");
?>

<body>

  <!-- ======= Header ======= -->
  <?php
  require_once("../frames/menundesing.php");
  ?>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">


    <div class="container">

     <?php
session_start();


require_once("../modal/serviciosmodal.php");
require_once("../modal/entitytdocumento.php");
require_once("../utils/utils.php");
require_once("../modal/entityusers.php");
require_once("../modal/entitynewservice.php");
require_once("../modal/entityubigeonew.php");
$entitytdoc = new entitytdoc();
$serviciosmodal = new serviciosmodal();
$utils = new utilsphp();
if(empty($_SESSION['email'])){
  header("location:index.php");
}else if($utils->vregisteruser($_SESSION['email']) === 1){
  header("location:index.php");

}

echo "<div class='card mb-3'>";
echo "<img class='card-img-top' src='frontend/assets/img/banner.png' alt='Card image cap'>";
echo "<div class='card-body'>";
echo "<h5 class='card-title'>Registrate y contacta!</h5>";
echo "<div class='alert alert-warning' role='alert'>";
echo "<h5 class='alert-heading'>Hola!, esto solo se pedirá por unica vez.</h5>";
echo "</div>";
echo "<div class='form-row'>";
echo "<div class='form-group col-md-6'>";
echo "<label for='txtlastname'>Nombres y Apellidos</label>";
echo "<input type='text' class='form-control' id='txtlastname' placeholder='Completa'>";
echo "</div>";
echo "<div class='form-group col-md-6'>";
echo "<label for='nrowhatsapp'>Nro Whatsapp</label>";
echo "<input type='text' class='form-control' id='nrowhatsapp' placeholder='Nro de celular'>";
echo "</div>";
echo "</div>";
echo "<div class='form-row'>";
echo "<div class='form-group col-md-6'>";
echo "<label for='slstdocumento'>Tipo de Documento :</label>";

echo "<select id='slstdocumento' class='form-control'>";
echo "<option value ='' selected>Tipo de Documento...</option>";
foreach($entitytdoc->listdocumento() as $ftipodocu){
  echo "<option value='".$ftipodocu['id']."' selected>".$ftipodocu['alias']."</option>";
}
echo "</select>";


echo "</div>";
echo "<div class='form-group col-md-6'>";
echo "<label for='txtnrodocumento'>Nro:.</label>";
echo "<input type='text' class='form-control' id='txtnrodocumento' placeholder='Nro de Documento'>";
echo "</div>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='txtdirecciond'>Dirección (No se mostrará en la Web)</label>";
echo "<input type='text' class='form-control' id='txtdirecciond' placeholder='Urb/Jr Nro'>";
echo "</div>";
echo "<div class='form-row'>";
echo "<div class='form-group col-md-4'>";
echo "<select id='iddepartamento' class='form-control'>";
echo "<option value='' selected>Escoge Departamento...</option>";
echo "<option>...</option>";
echo "</select>";
echo "</div>";
echo "<div class='form-group col-md-4'>";
echo "<select id='idprovincia' class='form-control'>";
echo "<option value='' selected>Escoge Provincia...</option>";
echo "<option>...</option>";
echo "</select>";
echo "</div>";
echo "<div class='form-group col-md-4'>";
echo "<select id='iddistrito' class='form-control'>";
echo "<option value='' selected>Escoge distrito...</option>";
echo "<option>...</option>";
echo "</select>";
echo "</div>";
echo "</div>";
if ($_SESSION['tipouser'] == '2') {
echo "<div class='form-group'>";
echo "<label for='slstipodoc'>¿Cual es tu especialidad?</label>";
echo "<select id='slstipodoc' class='form-control'>";
echo "<option value='' selected>Escoge tu especialidad...</option>";
foreach ($serviciosmodal->listarservicios() as $fservice) {
  echo "<option value='" . $fservice['idtipservicio'] . "' selected>" . $fservice['name'] . "</option>";
}
echo "</select>";
echo "</div>";


echo "<div class='form-group'>";
echo "<label for='txtareades'>Describe tu Servicio y Haz que lo demás lo vean</label>";
echo "<textarea class='form-control' id='txtareades' rows='3'></textarea>";
echo "</div>";
}

echo "<div id='msmerrorge'></div>";
echo "<button type='button' class='btn btn-primary' onclick='registercont()'>Terminar Registro!</button>";
echo "<p class='card-text'><small class='text-muted'>Gracias por usar BROKERGO!</small></p>";
echo "</div>";
echo "</div>";
echo "</div>";
?>


  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("../frames/footerindex.php");?><!-- End Footer -->


  <script src="../utils/js/validatesessionfront.js"></script>
  <script src="../utils/js/ubigeo.js"></script>
  <script src="../utils/js/loadcomponentsfront.js"></script>
  <script src="../utils/js/verifysesiones.js"></script>
  <script src="../utils/js/utils.js"></script>
  <script src="../utils/js/menudesing.js"></script>

  <script>
    $(document).ready(function() {
      menucompletes();
            //load ubigeo
      loaddepartamento();
      departamentochange();
      provinciachange();
    });
  </script>




  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/assets/vendor/jquery/jquery.min.js"></script>
  <script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="frontend/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="frontend/assets/vendor/venobox/venobox.min.js"></script>
  <script src="frontend/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/assets/js/main.js"></script>

</body>

</html>