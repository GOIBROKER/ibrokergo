<?php require_once ('../frames/header.php')?>

  <!-- section featured -->
  <section id="featured">

    <!-- sequence slider -->
    <?php require_once ('../frames/slider.php')?>    
   
    <!-- end sequence slider -->
  </section>
  <!-- end featured -->

  <!-- Section about -->
  <?php require_once ('../frames/about.php')?>    
  <!-- end section about -->

  <!-- section services -->
  <section id="services" class="section parallax">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>Gestión a tus manos</span></h3>
          </div>
        </div>
        <div class="span12">
          <div class="section-intro">
            <p>
              Te brindamos una plataforma de gestion TI.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="well box aligncenter">
            <i class="icon-circled active icon-48 icon-group"></i>
            <h3>Comunidad</h3>
            <p>
              Especialistas GO esperando para darte apoyo.
            </p>
            <a href="#" class="btn btn-color">Learn more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well box aligncenter">
            <i class="icon-circled icon-48 icon-thumbs-up"></i>
            <h3>Especialista GO.</h3>
          Hacemos que tu experiencia en el servicio sea de tu agrado. 
          
            </p>
            <a href="#" class="btn btn-color">Learn more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well box aligncenter">
            <i class="icon-circled icon-48 icon-beaker"></i>
            <h3>Innovación</h3>
            <p>
              Creamos una fórmula para que tus ideas se hagan realidad.
            </p>
            <a href="#" class="btn btn-color">Learn more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well box aligncenter">
            <i class="icon-circled icon-48 icon-twitter"></i>
            <h3>Social media</h3>
            <p>
              Visita nuestra Redes Sociales
            </p>
            <a href="#" class="btn btn-color">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section services -->

  <!-- section works -->
  <?php require_once ('../frames/works.php')?>  
  <!-- section works -->

  <!-- section contact -->
  <section id="contact" class="section">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>Contactenos</span></h3>
          </div>
        </div>
        <div class="span12">
          <div class="section-intro">
            <p>
Empresa Peruana que surge de las cenizas de bits para brindarte apoyo         
   </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span6">
          <h4><i class="icon-circled icon-32 icon-envelope"></i> Contact form</h4>

          <!-- start contact form -->
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <ul class="contact-list">
              <li class="form-group">
                <input type="text" name="name" class="form_input" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
                <li class="form-group">
                  <input type="email" class="form_input" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validation"></div>
                </li>
                <li class="form-group">
                  <input type="text" class="form_input" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                  <div class="validation"></div>
                </li>

                <li class="form-group">
                  <textarea class="form_textarea" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </li>
                <li class="last">
                  <button class="btn btn-large btn-theme" type="submit" id="send">Send a message</button>
                </li>
            </ul>
          </form>
          <!-- end contact form -->

        </div>
        <div class="span6">
          <h4><i class="icon-circled icon-32 icon-user"></i> Get in touch with us</h4>
          <p>
            Feel free to ask if you have any question regarding our services or if you just want to say Hello, we would love to hear from you.
          </p>
          <div class="dotted_line">
          </div>
          <p>
            <span><i class="icon-phone"></i> <strong>Phone:</strong> +6221 213 22 21 or +6221 213 22 22</span>
          </p>
          <p>
            <span><i class="icon-comment"></i> <strong>Skype:</strong> hello.selectro</span>
          </p>
          <p>
            <span><i class="icon-envelope-alt"></i> <strong>Email:</strong> info@yourdomain.com</span>
          </p>
          <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section contact -->


  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div class="logo">
                <a class="brand" href="index.html">
								<img src="welcome/img/logo.png" alt="">
							</a>
              </div>
              <p>Go Perú , una software perteneciente al Grupo SPACEIT.S.A.C</p>
              <div class="social-links">
                <ul class="social-links">
                  <li><a href="#" title="Twitter"><i class="icon-circled icon-64 icon-twitter"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="icon-circled icon-64 icon-facebook"></i></a></li>
                  <li><a href="#" title="Google plus"><i class="icon-circled icon-64 icon-google-plus"></i></a></li>
                  <li><a href="#" title="Linkedin"><i class="icon-circled icon-64 icon-linkedin"></i></a></li>
                  <li><a href="#" title="Pinterest"><i class="icon-circled icon-64 icon-pinterest"></i></a></li>
                </ul>

              </div>

              <p>
                &copy; Spaceit - Derechos Reservados
              </p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Selecao
                -->
                SpaceIt<a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Javascript Library Files -->
  <script src="welcome/js/jquery.min.js"></script>
  <script src="welcome/js/jquery.easing.js"></script>
  <script src="welcome/js/bootstrap.js"></script>
  <script src="welcome/js/jquery.lettering.js"></script>
  <script src="welcome/js/parallax/jquery.parallax-1.1.3.js"></script>
  <script src="welcome/js/nagging-menu.js"></script>
  <script src="welcome/js/sequence.jquery-min.js"></script>
  <script src="welcome/js/sequencejs-options.sliding-horizontal-parallax.js"></script>
  <script src="welcome/js/portfolio/jquery.quicksand.js"></script>
  <script src="welcome/js/portfolio/setting.js"></script>
  <script src="welcome/js/jquery.scrollTo.js"></script>
  <script src="welcome/js/jquery.nav.js"></script>
  <script src="welcome/js/modernizr.custom.js"></script>
  <script src="welcome/js/prettyPhoto/jquery.prettyPhoto.js"></script>
  <script src="welcome/js/prettyPhoto/setting.js"></script>
  <script src="welcome/js/jquery.flexslider.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="welcome/contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="welcome/js/custom.js"></script>



  
</body>
  <!-- modals de Inicio de Sesion -->





</html>
