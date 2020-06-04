<!DOCTYPE html>
<html lang="en">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
    <?php
    require_once("../frames/sliderndesing.php");
    ?>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section style="background: #eff6ea">
      <h3 class="h3 text-center mb-5">BrokerGo - CONECTAMOS TRABAJO</h3>


      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h3 class="h4 text-center mb-4"><i class='fas fa-book' style='font-size:24px'></i>Filtrar por.:</h3>
          </div>
   
          <div class="col-sm">
            <div class="form-group">
            
              <div id="resutcomboserv">
              </div>


            </div>

          </div>
          <div class="col-sm">
            <div class="form-group">
              <div id="resutcombo">

              </div>
            </div>
          </div>


        </div>
        <div class="row">
          <div class="col-sm">

            <div class="form-group">
              <h3 class="h3 text-center mb-5"><i class='fas fa-map-marker-alt' style='font-size:24px'></i>
                Ubicación.:</h3>
            </div>


          </div>

          <div class="col-sm">
            <div class="form-group">
              <select class="form-control" id="iddepartamento" >
                <option value="">Departamento?</option>
              </select>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <select class="form-control" id="idprovincia">
                <option value="">Provincia?</option>
              </select>
            </div>
          </div>
          <div class="col-sm">
            <div class="form-group">
              <select class="form-control" id="iddistrito">
                <option value="">Distrito?</option>
              </select>
            </div>
          </div>



        </div>

        <div class="row">
          <div class="col-sm">
            <h3 class="h4 text-center mb-4"><svg class="bi bi-emoji-laughing" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
  <path fill-rule="evenodd" d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5z"></path>
  <path d="M7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"></path>
</svg>
              ¿Conoces al especialista? .:</h4>
          </div>

          <div class="col-sm">
            <div class="form-group">
            <input type="text" class="form-control" id="txtnameespe" aria-describedby="emailHelp" placeholder="Buscalo : Nombres o apellidos / Empresa.">

            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-sm">

            <div class="card border-dark">
              <div class="card-body">
                <div class="card-body row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-search-dollar"></i>
                  </div>
                  <!--end of col-->
                  <div class="col">
                    <input class="form-control form-control-lg form-control-borderless" id="txtsearchbar" type="search" placeholder="Palabras claves : Computadora ,eventos ,etc.">
                  </div>
                  <!--end of col-->
                  <div class="col-auto">
                    <button type="button" onclick="searchfront()" class="btn btn-success">Buscar!</button>
                  </div>
                  <!--end of col-->
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- ======= Details Section ======= -->
      <hr class="my-5">
      <section>

        <h3 class="h4 text-center mb-4">Resultado de Busqueda.:</h3>

        <div class="container">
          <div class="row">
            <div class="col-md-9">

              <div class="list-group" id="resultable">

                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">
                      <p class="text-dark"><strong>Especialista .: Anthony Puente Olano</strong></p>
                    </h6>
                    </br>
                    <small>Lima - San Luis.</small>
                  </div>
                  <p class="mb-1">Me dedico a la Reparación de laptops , impresoras , escanner.</p>
                  <p class="text-warning"><small><strong>Calidad de Atención.:</strong>
                      <i class='far fa-star'></i>
                      <i class='far fa-star'></i>
                      <i class='far fa-star'></i>
                      <i class='fas fa-star'></i>
                      <i class='fas fa-star'></i>
                    </small></p>
                  <strong><small>35 usuarios lo recomiendan</small></strong>
                  </br>
                  <button type="button" class="btn btn-primary">Contactar</button>
                </a>

              </div>

              <div id="buttonbusq"></div>

            </div>



            <div class="col-md-3">


              .Columna para patrocinadores o Publicad Premium


            </div>
          </div>
        </div>




      </section>

      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery">
        <div class="container">

          <div class="section-title">
            <h2>Patrocinadores</h2>
            <p>¿Quieres salir en primera plana? , envianos un correo a contactos@brokergo.com.pe o envianos un whatsapp al 933-289-058</p>
          </div>

          <div class="owl-carousel gallery-carousel" data-aos="fade-up">
            <a href="frontend/assets/img/gallery/gallery-1.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-2.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-3.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-4.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-5.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-6.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-7.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-8.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-9.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-10.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-11.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
            <a href="frontend/assets/img/gallery/gallery-12.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
          </div>

        </div>
      </section><!-- End Gallery Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Especialistas Premium</h2>
            <p>¿Has dado buenas atenciones a tus clientes? , !Brinda buenas atenciones y aparaceras en primera plana como especialista premium!</p>
          </div>

          <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="frontend/assets/img/logobig.png" class="testimonial-img" alt="">
                <h3>Anthony Olano</h3>
                <h4>Ceo en Informática &amp; Fundador</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Brindo todo los servicios relacionados a informática , espero les guste (Contactame al .: 991 - 943 - 044).
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="frontend/assets/img/logobig.png" class="testimonial-img" alt="">
                <h3>Erick Puente</h3>
                <h4>Contabilidad</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Hola , ¿Que tal?.Brindo asesorías contables . Espero les guste mi servicio <strong>(Contactame al .: 947 - 079 - 637).</strong>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <!-- <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="frontend/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="frontend/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="frontend/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->

          </div>

        </div>
      </section><!-- End Testimonials Section -->

      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing">

      </section><!-- End Pricing Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("../frames/footerindex.php");?>


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

              <select id='iddepartamento' class='form-control'>
              </select>

              <select id="idprovincia" class="form-control">
                <option value='' disabled>Escoge la provincia...</option>
              </select>

              <select id="iddistrito" class="form-control">
                <option value=''>Escoge el Distrito...</option>
              </select>

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
                  <p>No estas registrado? <a href="registergo.php" class="blue-text">Registrate</a></p>
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

  <!-- Modal Warning -->
  <div class="modal fade" id="centralModalWarningDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading">Hola! - Tienes que Iniciar Sesión para continuar</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">×</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">

          <div class="row">
            <div class="col-3 text-center">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" alt="Michal Szymanski - founder of Material Design for Bootstrap" class="img-fluid z-depth-1-half rounded-circle">
              <div style="height: 10px"></div>
              <p class="title mb-0">VISITANTE</p>
              <p class="text-muted " style="font-size: 13px">Broker Go</p>
            </div>

            <div class="col-9">
              <p>Estas a punto de contactar al especialista, favor de Iniciar sesión o Registrate!.</p>
              <p class="card-text">
                <strong>Gracias por tu compresión</strong>
              </p>
            </div>
          </div>


        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <a href="logingo.php" class="btn btn-warning waves-effect waves-light">Iniciar Sesión
            <i class="far fa-gem ml-1 text-white"></i>
          </a>
          <a href="registergo.php" class="btn btn-outline-warning waves-effect">Registrate</a>

        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Modal Warning FIN-->


  <!-- Modal de contactar espe -->
  <div class="modal fade" id="modalcontacespe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">Detalle del Especialista</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">×</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div id="informcontac"></div>
        </div>
        <!--Final Modal-->


        <!--Footer-->
        <div class="modal-footer">
          <a type="button" class="btn btn-info waves-effect waves-light" onclick="registerservice()">Solicitar Servicio
            <i class="far fa-gem ml-1"></i>
          </a>
          <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No ,Continuar</a>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Fin de modal -->

  <!-- Inicio de modal -->


  <div class="modal fade" id="modalregiterdata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link active" data-toggle="tab" href="#panel17" role="tab">
                <i class="fas fa-user mr-1"></i> Termina tu Registro</a>
            </li>

          </ul>

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 17-->
            <div class="tab-pane fade in show active" id="panel17" role="tabpanel">

              <!--Body-->
              <div class="modal-body mb-1">
                <div id="moduleregisteruser"></div>
              </div>
              <!--Footer-->
              <div class="modal-footer">

                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
              </div>

            </div>
            <!--/.Panel 7-->

            <!--Panel 18-->

            <!--/.Panel 8-->
          </div>

        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>


  <!-- Fin de modal -->

  <!-- Modal Warning -->
  <div class="modal fade" id="modalwarning2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading">GRACIAS!</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">×</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">

          <div class="row">
            <div class="col-3 text-center">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" alt="Michal Szymanski - founder of Material Design for Bootstrap" class="img-fluid z-depth-1-half rounded-circle">
              <div style="height: 10px"></div>
              <p class="title mb-0">Administrador</p>
              <p class="text-muted " style="font-size: 13px">Broker Go</p>
            </div>

            <div class="col-9">
              <p>Gracias por completar tus datos.</p>
              <p class="card-text">
                <strong>Continua con tu busqueda.</strong>
              </p>
            </div>
          </div>


        </div>


      </div>
      <!--/.Content-->
    </div>
  </div>

  <!--Modal de whatsa!-->

  <!-- Central Modal Medium Success -->
  <div class="modal fade" id="modalwhatsapp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">Registro exitoso</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <i class="fab fa-whatsapp fa-4x mb-3 animated rotateIn"></i>
            <p>Dar en contactar , para <strong>enviar un mensaje al whatsapp del especialista</strong></br><strong>Recuerda que debes de tener activado tu whatsapp Web si estuvieras en una Computadora de Escritorio.</strong></br>Si deseas hacerlo más tarde puedes encontrar tus solicitudes pendientes en tu Panel</p>
          </div>
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <a type="button" onclick="contactarwha()" class="btn btn-success">Contactar<i class="far fa-gem ml-1 text-white"></i></a>
          <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, Gracias</a>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Central Modal Medium Success-->



  <script src="../utils/js/loadcomponentsfront.js"></script>
  <script src="../utils/js/verifysesiones.js"></script>
  <script src="../utils/js/utils.js"></script>
  <script src="../utils/js/menudesing.js"></script>
  <script>
    $(document).ready(function() {

      menuindex();
      loadbuttons();
      loadinitialespec();
      buscarserv();
      borrarsesiones();
      buscardep();
      // loadmenub();
      //load ubigeo
      loaddepartamento();
      departamentochange();
      provinciachange();

    });
  </script>

  <script src="../utils/js/initialsesionintra.js"></script>
  <script src="../utils/js/frontbusqueda.js"></script>
  <script src="../utils/js/seachfront.js"></script>
  <script src="../utils/js/validatesessionfront.js"></script>
  <script src="../utils/js/registerservicefront.js"></script>
  <script src="../utils/js/datospersonales.js"></script>
  <script src="../utils/js/ubigeo.js"></script>



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