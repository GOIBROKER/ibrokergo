<!DOCTYPE html>
<html>
<!-- <style>
form{ width:250px; margin:0 auto; padding:10px; border: 1px solid #d9d9d9;}
form p, form input[type = "submit"]{text-align:center; font-size:20px;}
input[type = "radio"]{ display:none;/*position: absolute;top: -1000em;*/}
label{ color:grey;}
.clasificacion{
direction: rtl;
 unicode-bidi: bidi-override;
}
label:hover,
label:hover ~ label{color:orange;}
input[type = "radio"]:checked ~ label{color:orange;}
</style> -->
<!-- Importando el head -->
<?php require_once("../frames/head.php");

?>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">
    <!-- Importando el Menu del Head -->
    <?php require_once("../frames/menuheader.php"); ?>

    <!-- Importando el Menu de la izquierda -->
    <?php require_once("../frames/menuright.php"); ?>

    <!-- Content Wrapper. Contains page content CONTENIDO EDITAR AQUI -->
    <div id="contentfrm">
      <?php include("../frames/content.php"); ?>
    </div>
    <!-- /.content-wrapper -->





    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.1
      </div>
      <strong>Copyright &copy; 2020-2020 <a href="https://www.brokergo.com.pe">Broker Go</a>.</strong> Derechos Reservadps.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Update Resume
                  <span class="label label-success pull-right">95%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Laravel Integration
                  <span class="label label-warning pull-right">50%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Back End Framework
                  <span class="label label-primary pull-right">68%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Allow mail redirect
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Other sets of options are available
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Expose author name in posts
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Allow the user to show his name in blog posts
              </p>
            </div>
            <!-- /.form-group -->

            <h3 class="control-sidebar-heading">Chat Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Delete chat history
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- Crear Modal para subir fotos -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subir Foto de Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ./wrapper -->

  <!-- Crear Modal para subir fotos -->
  <!-- Modal -->

  <div class="modal fade" id="informeespecialidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subir Foto de Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal de iniciar sesion tipo cliente escogiendo una especialidad por primera vez -->
  <?php
  require_once("../utils/utils.php");
  $utilsespacio = new utilsphp();

  echo "<div class='modal fade bd-example-modal-lg' id='id01' data-backdrop='static' tabindex='-1' role='dialog' aria-labelledby='staticBackdropLabel' aria-hidden='true'>";
  echo "<div class='modal-dialog modal-lg' role='document'>";
  echo "<div class='modal-content'>";
  echo "<div class='modal-header'>";
  echo "<h4 class='modal-title'>Bienvenido a BROKERGO - GUIA DE USO!</h4>";
  echo "<div class='modal-body'>";
  echo "<div id='datawelcome'>";
  echo "<div class='row'>";
  echo "<div class='col-md-6'>";

  if ($_SESSION['tipouser'] == 1) {
    if ($utilsespacio->vregisteruser($_SESSION['email']) === 0) {

      echo "<div class='box box-default'>";
      echo "<div class='box-header with-border'>";
      echo "<i class='fa fa-warning'></i>";
      echo "<h3 class='box-title'>Termina tu registro!</h3>";
      echo "</div>";
      echo "<div class='box-body'>";
      echo "<div class='alert alert-success alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";

      echo "<h4><i class='icon fa fa-ban'></i>Contacta al especialista!</h4>";
      echo "¡Para que contactes al especialista, necesitas completar datos para que se comuniquen!";

      echo "</div>";
      echo "<img class='img-responsive' src='frontend/assets/img/cli1.png' alt='Photo'>";
      echo "<div class='alert alert-info alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      echo "<h4><i class='icon fa fa-info'></i><a href='complete.php'>Click Aqui! <strong> En Go!</strong></a></h4>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    } else {
      echo "<div class='box box-default'>";
      echo "<div class='box-header with-border'>";
      echo "<i class='fa fa-warning'></i>";
      echo "<h3 class='box-title'>Editar Perfil!</h3>";
      echo "</div>";
      echo "<div class='box-body'>";
      echo "<div class='alert alert-success alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";

      echo "<h4><i class='icon fa fa-ban'></i>Hola, Puedes editar tu perfil Aqui!</h4>";
      echo "Si deseas cambiar ubicación , celular o demás datos ,encuentralo aqui!.";

      echo "</div>";
      echo "<img class='img-responsive' src='frontend/assets/img/cli2.png' alt='Photo'>";
      echo "<div class='alert alert-info alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      echo "<h4><i class='icon fa fa-info'></i>Ir a : <strong> Mi Perfil</strong></a></h4>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
  } else if ($_SESSION['tipouser'] == 2) {
    if ($utilsespacio->vregisteruser($_SESSION['email']) === 0) {
      echo "<div class='box box-default'>";
      echo "<div class='box-header with-border'>";
      echo "<i class='fa fa-warning'></i>";
      echo "<h3 class='box-title'>Termina tu registro!</h3>";
      echo "</div>";
      echo "<div class='box-body'>";
      echo "<div class='alert alert-success alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";

      echo "<h4><i class='icon fa fa-ban'></i>Indica tu especialidad!</h4>";
      echo "Termina tu registro para que aparezcas en las busquedas de la web, más adelante podrás editarlo!.";

      echo "</div>";
      echo "<img class='img-responsive' src='frontend/assets/img/es1.png' alt='Photo'>";
      echo "<div class='alert alert-info alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      echo "<h4><i class='icon fa fa-info'></i><a href='complete.php'>Click Aqui! <strong> En Go!</strong></a></h4>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    } else {
      echo "<div class='box box-default'>";
      echo "<div class='box-header with-border'>";
      echo "<i class='fa fa-warning'></i>";
      echo "<h3 class='box-title'>Editar Perfil!</h3>";
      echo "</div>";
      echo "<div class='box-body'>";
      echo "<div class='alert alert-success alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";

      echo "<h4><i class='icon fa fa-ban'></i>Hola, Puedes editar tu perfil Aqui!</h4>";
      echo "Si deseas cambiar tu especialidad , presentación , ubicación o demás datos ,encuentralo aqui!.";

      echo "</div>";
      echo "<img class='img-responsive' src='frontend/assets/img/es2.png' alt='Photo'>";
      echo "<div class='alert alert-info alert-dismissible'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
      echo "<h4><i class='icon fa fa-info'></i>Ir a : <strong> Mi Perfil</strong></a></h4>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
  }


  echo "</div>";
  echo "<div class='col-md-6'>";
  echo "<div class='box box-default'>";
  echo "<div class='box-header with-border'>";
  echo "<i class='fa fa-bullhorn'></i>";
  echo "<h3 class='box-title'>Ver mi Panel</h3>";
  echo "</div>";
  echo "<div class='box-body'>";
  echo "<div class='callout callout-success'>";
  echo "<h4>Ver tus Solicitudes</h4>";
  echo "<p>Encuentra tus solicitudes en Mi Panel (Recuerda cerrar todas tus solicitudes , para que vean tu <strong>puntuación</strong>) .</p>";
  echo "</div>";
  echo "<img class='img-responsive' src='frontend/assets/img/solicitudes.png' alt='Photo'>";
  echo "<div class='alert alert-info alert-dismissible'>";
  echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
  echo "<h4><i class='icon fa fa-info'></i>Ir a .: Mis Opciones - <strong>Mi Panel</strong></h4>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "<div class='modal-footer'>";
  echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar Guía</button>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  ?>

  
    <script>
      function guiauser() {
       
        var activategu ="guiauso";
        $.post("../controllers/guiauso.php",{
          postactivategu:activategu
        },function(responsedata){
          $("#datawelcome").html(responsedata);
        });
        $("#id01").modal("show");
        
      }
    </script>

    <script src="../utils/js/bienvenidse.js"></script>
    <script>
      $(document).ready(function() {
        welcome();

      })
    </script>

    <script>


    </script>
    <!-- jQuery 3 -->
    <script src="../librerias/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../librerias/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../librerias/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="../librerias/bower_components/raphael/raphael.min.js"></script>
    <script src="../librerias/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../librerias/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../librerias/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../librerias/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../librerias/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../librerias/bower_components/moment/min/moment.min.js"></script>
    <script src="../librerias/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../librerias/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../librerias/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../librerias/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../librerias/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../librerias/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../librerias/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../librerias/dist/js/demo.js"></script>
    <script src="../utils/js/url.js"></script>
    <script src="../utils/js/datospersonales.js"></script>
    <script src="../utils/js/utils.js"></script>
    <script src="../utils/js/loadmypanel.js"></script>
</body>

</html>