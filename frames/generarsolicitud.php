
<!-- Content Wrapper. Contains page content -->
<?php require_once("../modal/entityprecios.php");

?>

</div>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Publicar un Trabajo
      <small>Muchos Especialistas GO , esperando tu publicación.</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Contratar</a></li>
      <li><a href="#">Publicar Trabajo</a></li>
      <li class="active">GO!</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Elegistes Reparación o Asesoramiento de :</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title" id="dvicabecera">

            </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="box-group" id="accordion">
              <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
              <div class="panel box box-primary">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Dame el Detalle :
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="box-body">

                    <div class="form-group">

                      <label>Brinda un Titulo a tu Inconveniente</label>
                      <div id="informedpublictitulo"></div>
                      <input class="form-control input-lg" id="txttitulo" type="text" placeholder="Ingresa un título" onkeyup="valtitulopublic()">
                    </div>
                    <div class="form-group">

                      <label>Dar el detalle a nuestro Especialista GO</label>
                      <div id="informedpublic"></div>
                      <textarea id="txtdescripcion2" maxlength="350" onkeyup="valdescripcionpublic()" class="form-control" rows="7" placeholder="Brida tu detalle"></textarea>
                    </div>


                  </div>
                </div>
              </div>
              <div class="panel box box-danger">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Brindanos un precio Aproximado
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="box-body">
                    Si tienes un precio referencial favor de establecerlo o no lo indiques .

                    <div class="form-group">
                      <label>Indicar Rango</label>
                      <select id="cmbrangoprecio" class="form-control">

                        <?php
                        $entityprecios = new preciosaprox();
                        foreach ($entityprecios->mostrarprecios() as $foreachprecios) {
                          echo "<option value='" . $foreachprecios['idprecio'] . "'>" . $foreachprecios['rango'] . "</option>";
                        }
                        ?>

                      </select>

                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                 
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>


      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div id="infoerrorsolicitud"></div>
        <button type="button" onclick="generarsolicitud()" class="btn btn-warning btn-lg btn-block">Genera tu solicitud - AHORA!</button>

      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
  <!-- /.content de Registrar Usuario-->
  <div class="modal fade bd-example-modal-lg" id="modalnotexistdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h4 class="modal-title" id="exampleModalLabel">Para publicar, debes de llenar estos datos :</h4> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="callout callout-warning">
            <h4>Aviso!</h4>

            <p>Para continuar debes registrar tus datos , solo se solicitara por única vez</p>
          </div>

          <div id="informationgopublic"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">No proseguir</button>
          <button type="button" class="btn btn-danger" onclick='registrardata()'>Grabar Cambios</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->


  <!-- /.content -->
  <!-- /.content de Confirmar content-->
  <div class="modal fade bd-example-modal-lg" id="modalconfirmardata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h4 class="modal-title" id="exampleModalLabel">Para publicar, debes de llenar estos datos :</h4> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick='formclose()'>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">



          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="../librerias/dist/img/avatar.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Confirmar publicación</h3>
              <h5 class="widget-user-desc">
                <?php
                setlocale(LC_TIME, "spanish");
                date_default_timezone_set("America/Lima");
                $hoy = strftime("%A %d de %B del %Y");
                echo utf8_decode($hoy);



                ?>

              </h5>
            </div>
            <div class="box-footer no-padding">
              <div id="visualizarinfotrabajo"></div>
            </div>
          </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" onclick='formclose()'>NO</button>
          <button type="button" class="btn btn-danger" onclick='registerpublicacion()'>GO - VAMOS!</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->


<!-- /.content-wrapper -->
<script src="../utils/js/gsolicitud.js"></script>

