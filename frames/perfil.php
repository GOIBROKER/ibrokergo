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
      <li><a href="#"><i class="fa fa-dashboard"></i> Panel</a></li>
      <li><a href="#">Tu Perfil</a></li>
      <li class="active">Datos Personales</li>
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

         

         
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
  
          <div class="box-body">
         

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
       
            <li><a href="#settings" data-toggle="tab">Datos Personales</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
            


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

