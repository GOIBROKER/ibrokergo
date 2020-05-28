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
              <h3 class="h4 text-center mb-4">Filtrar por.:</h3>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <!-- <label for="exampleFormControlSelect1">Departamento</label> -->
                <select class="form-control" id="tuser">
                  <option value="">1.- ¿Buscas un .: ?</option>
                  <option value='1'>Especialista</option>
                  <option value='2'>Trabajo</option>
                </select>
              </div>

            </div>
            <div class="col-sm">
              <div class="form-group">
                <!-- <label for="exampleFormControlSelect1">Departamento</label> -->

                <div id="resutcomboserv">
                </div>


              </div>

            </div>
            <div class="col-sm">
              <div class="form-group">
                <!-- <label for="exampleFormControlSelect1">¿En que Ubicación?</label> -->
                <div id="resutcombo">

                </div>
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
                      <input class="form-control form-control-lg form-control-borderless" id="txtsearchbar" type="search" placeholder="Especialidad o nombre de especialista">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                      <button class="btn btn-lg btn-success" onclick="searchfront()">Buscar!</button>
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
                <!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active"> -->

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
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up">
          <a href="frontend/assets/img/gallery/gallery-1.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-1.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-2.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-2.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-3.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-3.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-4.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-4.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-5.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-5.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-6.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-6.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-7.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-7.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-8.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-8.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-9.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-9.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-10.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-10.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-11.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-11.png" alt=""></a>
          <a href="frontend/assets/img/gallery/gallery-12.png" class="venobox" data-gall="gallery-carousel"><img src="frontend/assets/img/gallery/gallery-12.png" alt=""></a>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="frontend/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="frontend/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
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
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
     
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info" data-aos="fade-up">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>contact@example.com<br>info@example.com</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="frontend/forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Buscar!</button>
      </div>
    </div>
  </div>
</div>



<script src="../utils/js/loadcomponentsfront.js"></script>
<script src="../utils/js/verifysesiones.js"></script>
<script src="../utils/js/utils.js"></script>
<script>
  $(document).ready(function() {

    // Handler for .ready() called.
    loadbuttons();
    loadinitialespec();
    buscarserv();
    borrarsesiones();
    buscardep();
    // cuando se recargue la página se van a borrar las sesiones para evitar errores de busqueda.
    //Carga Inicial de combo
  });
</script>

<script src="../utils/js/initialsesionintra.js"></script>
<script src="../utils/js/frontbusqueda.js"></script>
<script src="../utils/js/seachfront.js"></script>
<script src="../utils/js/validatesessionfront.js"></script>
<script src="../utils/js/registerservicefront.js"></script>
<script src="../utils/js/datospersonales.js"></script>




<script>

  function apmodalbus(){
    $("#idbuscartrabajo").modal("show");
  }
</script>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/assets/vendor/jquery/jquery.min.js"></script>
  <script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="frontend/assets/vendor/php-email-form/validate.js"></script>
  <script src="frontend/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="frontend/assets/vendor/venobox/venobox.min.js"></script>
  <script src="frontend/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/assets/js/main.js"></script>

</body>

</html>