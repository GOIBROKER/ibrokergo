  <!-- Estilo de botones -->


  <style>
    .btn-group button {
      background-color: #4CAF50;
      /* Green background */
      border: 1px solid green;
      /* Green border */
      color: white;
      /* White text */
      padding: 10px 24px;
      /* Some padding */
      cursor: pointer;
      /* Pointer/hand icon */
      float: left;
      /* Float the buttons side by side */
    }

    .btn-group button:not(:last-child) {
      border-right: none;
      /* Prevent double borders */
    }

    /* Clear floats (clearfix hack) */
    .btn-group:after {
      content: "";
      clear: both;
      display: table;
    }

    /* Add a background color on hover */
    .btn-group button:hover {
      background-color: #3e8e41;
    }
  </style>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mi panel
        <small>Version 1.0.1</small><a href="../bienvenido/index.php"   type="button" class="btn btn-warning">Regresar al Inicio</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Mi Panel</li>
      </ol>
    </section>

   
    <section class="content">
      
      <div class="row">
        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><div id='2'>Nro</div></span>
              <span class="info-box-number">3<small>Items</small></span>
            </div>
  
          </div>

        </div> -->
        
        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Recomendaciones</span>
              <span class="info-box-number">41,410</span>
            </div>
          
          </div>
        
        </div>
      -->

      
        <div class="clearfix visible-sm-block"></div>

        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Items Cerradas</span>
              <span class="info-box-number">760</span>
            </div>
     
          </div>
    
        </div> -->
 
        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Cant de Clientes</span>
              <span class="info-box-number">5</span>
            </div>
         
          </div>
   
        </div> -->
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Mis Solicitudes</h3>
              <div class="btn-group">
                <?php
                require("../controllers/flagsystem.php");
                $flags = new flags();
                if (!empty($_SESSION['tipouser'])) {



                  if ($_SESSION['tipouser'] == $flags->flaguserespe) {
                    echo "<button onclick='loadtickets()'>He generado trabajo</button>";
                    echo "<button onclick='loadticketsasginados()'>Me han generado trabajo</button>";
                    echo "<button onclick='finalizartrabajo()'>Finaliza tu Trabajo</button>";
                  } else if ($_SESSION['tipouser'] == $flags->flaguserclie) {
                    echo "<button onclick='loadtickets()'>He generado trabajo</button>";
                  }
                }
                ?>

              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box">
                <div class="box-header with-border">


                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                      <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" id="contenttickets">





                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  Gracias - brokergo esta para tus servicios°
                </div>
                <!-- /.box-footer-->
              </div>

            </div>
            <!-- ./box-body -->
            <div class="box-footer">

            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <script>
        $(document).ready(function() {

          loadtickets();
        })
      </script>
      <!-- Modal Quality row -->
      <!-- Modal -->
      <!-- Modal -->
      <div class="modal fade" id="idregister" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <div class="modal-body">
              <div id="datalleno">

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Main row -->

      <!-- Modal concluir servicio especialista -->
      <!-- Modal -->
      <div class="modal fade" id="idconcluirserv" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <div class="modal-body">
              <div id="dataconcluirserv">

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

            </div>
          </div>
        </div>
      </div>

    
      <!-- Main rows -->
      <script src="../utils/js/loadmypanel.js"></script>