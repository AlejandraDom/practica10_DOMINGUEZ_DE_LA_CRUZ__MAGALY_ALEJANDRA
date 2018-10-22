<?php
#se inicia secion una vez entrando al navegador
  session_start();
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
<!-- Left navbar links -->
	<ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?action=perfil_tutor" class="nav-link">Perfil</a>
      </li>
  </ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
	  <li class="nav-item d-none d-sm-inline-block">
	    <a href="index.php?action=salir" class="nav-link">Cerrar Sesion</a>
	  </li>
	</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
	<a>
	  <span class="brand-text font-weight-light"></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
	  <!-- Sidebar user panel (optional) -->
<div class="pull-left info">
	  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
	    <div class="image">
        <img src="views/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
        <img src="user4-128x128.png" alt="" class="img-size-50 mr-3 img-circle">     
	    </div>
	    <div class="info" style="text-align: center;">
	      <a href="" class="d-block"><?php echo $_SESSION['usuario']['nombre']; ?></a>
	    </div>
	  </div>

	  <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <!-- Left side column. contains the logo and sidebar -->
          <?php 
          if($_SESSION['usuario']['nombre'] == 'ADMINISTRADOR'){
          ?>
          
          <li class="nav-item has-treeview">
            <a href="index.php?action=sesion_tutorias" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Tutorias
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="index.php?action=alumnos" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Alumnos
              </p>
            </a>            
          </li>

          <li class="nav-item has-treeview">
            <a href="index.php?action=maestros" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Maestros
              </p>
            </a>            
          </li>
          <li class="nav-item has-treeview">
            <a href="index.php?action=carreras" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Carreras
              </p>
            </a>            
          </li>

          <?php } else{?>

          <li class="nav-item has-treeview">
            <a href="index.php?action=alumnos" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Tutorados
              </p>
            </a>            
          </li>
          <?php } ?>
        </ul>
      </nav>
	  <!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
<div class="content-wrapper" align="center">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>