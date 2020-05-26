<?php
session_start();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tu Perfil
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">User profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="../librerias/dist/img/user4-128x128.jpg" alt="User profile picture">

            <h3 class="profile-username text-center"><?php echo $_SESSION['nameandlast']; ?></h3>

            <p class="text-muted text-center"><?php echo $_SESSION['aliastipouser']; ?></p>

            <!-- <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Trabajos Realizados</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul> -->

            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal"><b>Editar Foto</b></a>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
          <!-- <div class="box-header with-border">
            <h3 class="box-title">Sobre mi</h3>
          </div> -->
          <!-- /.box-header -->
          <div class="box-body">
            <!-- <strong><i class="fa fa-book margin-r-5"></i> Educación</strong>

            <p class="text-muted">
              Estudie ensamblaje de computadoras en Tecsup.
            </p>

            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Vivo en.:</strong>

            <p class="text-muted">Lima, San Luis</p>

            <hr>

            <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

            <p>
              <span class="label label-danger">Ensamblaje de PC</span>
              <span class="label label-success">Informática</span>
              <span class="label label-info">Redes de PC</span>
              <span class="label label-warning">PHP</span>
              <span class="label label-primary">Node.js</span>
            </p> -->

            <!-- <hr> -->

            <strong><i class="fa fa-file-text-o margin-r-5"></i> Gracias.:</strong>

            <p>Por usar brokergo ;) .</p>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <!-- <li class="active"><a href="#activity" data-toggle="tab">Mi Espacio</a></li> -->
            <!-- <li><a href="#timeline" data-toggle="tab">Timeline</a></li> -->
            <li><a href="#settings" data-toggle="tab">Datos Personales</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <!-- Post -->
              <!-- <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../librerias/dist/img/user1-128x128.jpg" alt="user image">
                  <span class="username">
                    <a href="#">Administrador GO.</a>
                    <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                  </span>
                  <span class="description">Colocar Fecha de Aviso</span>
                </div> -->
                <!-- /.user-block -->
                <!-- <p>
                  Hola Especialista o Cliente Go , te doy la bienvenida, recuerda que este espacio es solo para ti.
                </p>
                <ul class="list-inline"> -->
                  <!-- <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul> -->

                  <!-- <input class="form-control input-sm" type="text" placeholder="Type a comment"> -->
              <!-- </div> -->
              <!-- /.post -->

              <!-- Post -->
              <!-- <div class="post clearfix">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../librerias/dist/img/user7-128x128.jpg" alt="User Image">
                  <span class="username">
                    <a href="#"></a>
                    <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                  </span>
                  <span class="description">Envia una recomendación</span>
                </div> -->
                <!-- /.user-block -->
                <!-- <p>
                  Puedes mandar una recomendación al administrador del sitio desde aqui.
                </p>

                <form class="form-horizontal">
                  <div class="form-group margin-bottom-none">
                    <div class="col-sm-9">
                      <input class="form-control input-sm" placeholder="Escribe tu mensaje">
                    </div>
                    <div class="col-sm-3">
                      <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Enviar</button>
                    </div>
                  </div>
                </form>
              </div> -->
              <!-- /.post -->

              <!-- Post -->
              <!-- <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../librerias/dist/img/user6-128x128.jpg" alt="User Image">
                  <span class="username">
                    <a href="#">Fotos de mi taller</a>
                    <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                  </span>
                  <span class="description">Posted 5 photos - 5 days ago</span>
                </div> -->
                <!-- /.user-block -->
                <!-- <div class="row margin-bottom">
                  <div class="col-sm-6">
                    <img class="img-responsive" src="../librerias/dist/img/photo1.png" alt="Photo">
                  </div> -->
                  <!-- /.col -->
                  <!-- <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-6">
                        <img class="img-responsive" src="../librerias/dist/img/photo2.png" alt="Photo">
                        <br>
                        <img class="img-responsive" src="../librerias/dist/img/photo3.jpg" alt="Photo">
                      </div> -->
                      <!-- /.col -->
                      <!-- <div class="col-sm-6">
                        <img class="img-responsive" src="../librerias/dist/img/photo4.jpg" alt="Photo">
                        <br>
                        <img class="img-responsive" src="../librerias/dist/img/photo1.png" alt="Photo">
                      </div> -->
                      <!-- /.col -->
                    <!-- </div> -->
                    <!-- /.row -->
                  <!-- </div> -->
                  <!-- /.col -->
               <!-- </div>  -->
                <!-- /.row -->

                <!-- <ul class="list-inline">
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                  </li>
                  <li class="pull-right">
                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                      (5)</a></li>
                </ul> -->

                <!-- <input class="form-control input-sm" type="text" placeholder="Type a comment"> -->
              <!-- </div> -->
              <!-- /.post -->
            <!-- </div> -->
            <!-- /.tab-pane -->
            <!-- <div class="tab-pane" id="timeline"> -->
              <!-- The timeline -->
              <!-- <ul class="timeline timeline-inverse"> -->
                <!-- timeline time label -->
                <!-- <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
                </li> -->
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <!-- <li>
                  <i class="fa fa-envelope bg-blue"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                    <div class="timeline-body">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                      quora plaxo ideeli hulu weebly balihoo...
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-primary btn-xs">Read more</a>
                      <a class="btn btn-danger btn-xs">Delete</a>
                    </div>
                  </div>
                </li> -->
                <!-- END timeline item -->
                <!-- timeline item -->
                <!-- <li>
                  <i class="fa fa-user bg-aqua"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                    </h3>
                  </div>
                </li> -->
                <!-- END timeline item -->
                <!-- timeline item -->
                <!-- <li>
                  <i class="fa fa-comments bg-yellow"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                    <div class="timeline-body">
                      Take me to your leader!
                      Switzerland is small and neutral!
                      We are more like Germany, ambitious and misunderstood!
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                    </div>
                  </div>
                </li> -->
                <!-- END timeline item -->
                <!-- timeline time label -->
                <!-- <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
                </li> -->
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <!-- <li>
                  <i class="fa fa-camera bg-purple"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                    <div class="timeline-body">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                    </div>
                  </div>
                </li> -->
                <!-- END timeline item -->
                <!-- <li>
                  <i class="fa fa-clock-o bg-gray"></i>
                </li>
              </ul>
            </div> -->


            <div class="tab-pane" id="settings">
          
              <div id="datospersonales">


              </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->