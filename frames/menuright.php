  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../librerias/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nameandlast']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i>En Linea.</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Mis Opciones</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Mis Opciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li class="active"><a id="newwork" href="#" ><i class="fa fa-circle-o"></i>Publica un Trabajo</a></li> -->
            <li><a href="" id="newespecialista" ><i class="fa fa-circle-o"></i>Mi Panel</a></li>
            <?php 

            if($_SESSION['tipouser'] == '1' ){
          //  echo "<li class='active'><a id='newwork' href='#' ><i class='fa fa-circle-o'></i>Publicar Trabajo (Subasta)</a></li>";
            }
            ?>
            
            
            <li><a href="index.php" id="" >
              <i class="fa fa-circle-o"></i><?php 
            if($_SESSION['tipouser'] == '2' ){
              echo "Encontrar otros especialistas";
            }else if ($_SESSION['tipouser'] == '1' ){
              echo "Encontrar especialistas";
            }
            ?></a></li>
          </ul>
        </li>
  
          </ul>
        </li> 
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <script src="../utils/js/url.js"></script>