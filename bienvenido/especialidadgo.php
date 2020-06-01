<!DOCTYPE html>
<html lang="en">
<?php require_once("../controllers/validatesesion.php")?>

<?php
//Crear sesión para registrar
echo $_SESSION['temptipuser1'] = 1;

?>

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

      <center>
        <div class="row">
          <div class="col-sm">
            <div class="col-sm-8">
              <div class="card">
                <img class="card-img-top" src="frontend/assets/img/gsolicitud.jpg" alt="Card image cap">
                <div class="card-body">
                  <div id="gopc">
                   
                    <button type="button" class="btn btn-warning btn-lg btn-block" onclick="firtsoption()">Generar Solicitud!</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </center>

    </div>


  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>Appland</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <!-- Modal -->
  <div class="modal fade" id="idbuscartrabajo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Filtro de Busqueda</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">

                <label for="inputState">Buscas un?</label>
                <select id="inputState" class="form-control">
                  <option selected>Especialista...</option>
                  <option selected>Trabajo...</option>

                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">De ?</label>
                <select id="inputState" class="form-control">
                  <option selected>Informatica...</option>
                  <option selected>Trabajo...</option>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Ubicación : Departamento,Provincia,Distrito</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Lima,Lima,San Luis">
            </div>



          </form>
        </div>
        <div class="modal-footer">
          <a type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</a>
          <a type="button" class="btn btn-primary">Buscar!</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                Iniciar Sesión</a>
            </li>

          </ul>

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

              <!--Body-->
              <div class="modal-body mb-1">
                <div class="md-form form-sm">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="text" id="txtemail" class="form-control">
                  <label for="txtemail">Ingresa tu Email</label>
                </div>

                <div class="md-form form-sm">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="txtpassword" class="form-control">
                  <label for="txtpassword">Ingresa tu contraseña</label>
                  <div id="alertsesion">

                  </div>
                </div>
                <div class="text-center mt-2">
                  <button class="btn btn-info" onclick="iniciarsesion()">Ingresar <i class="fas fa-sign-in-alt ml-1"></i></button>
                </div>

              </div>
              <!--Footer-->
              <div class="modal-footer">
                <div class="options text-center text-md-right mt-1">
                  <p>No estas registrado? <a href="registrate.php" class="blue-text">Registrate</a></p>
                  <p>Olvidastes tu <a href="#" class="blue-text">Contraseña?</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Cerrar</button>
              </div>

            </div>
            <!--/.Panel 7-->


          </div>

        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!--Modal: Login / Register Form-->

  <script src="../utils/js/loadcomponentsfront.js"></script>
  <script src="../utils/js/verifysesiones.js"></script>
  <script src="../utils/js/utils.js"></script>
  <script src="../utils/js/menudesing.js"></script>
  <script>
    $(document).ready(function() {

      // Handler for .ready() called.
      menulogingo();
      loadbuttons();
      loadinitialespec();
      buscarserv();
      borrarsesiones();
      buscardep();
      loadmenub();

    });
  </script>
  <script src="../utils/js/welcomeespecialidad.js"></script>
  <script src="../utils/js/registroclient.js"></script>
  <script src="../utils/js/initialsesion.js"></script>





  <script>
    function apmodalbus() {
      $("#idbuscartrabajo").modal("show");
    }
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