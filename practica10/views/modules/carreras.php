<?php 

 	if(!isset($_SESSION['validar'])){
		echo '<script> alert("No haz iniciado sesion") </script>';
		echo '<script> window.location = "index.php"; </script>';
 	}
  ?>

  <section class="content">
    <div class="container-fluid">
 
	    <div class="card">
	      <div class="card-header row">
	      	<div class="col-sm-6" align="left">
	      		<h3 class="card-title">CARRERAS</h3>
	      	</div>
	      	<?php 
          if($_SESSION['usuario']['nombre'] == 'ADMINISTRADOR'){
          ?>
	      	<div class="col-sm-6" align="right">      		
	            <a href="index.php?action=carrera_agregar" class="btn btn-success">Nueva Carrera</a>	           
	      	</div>
	      <?php } ?>
	        
	      </div>
	      <!-- /.card-header -->
	      <div class="card-body">
	        <table id="example1" class="table table-bordered table-striped">
	          <thead>
                <tr>
					<th>Id</th>
					<th>Nombre</th>
					<th></th>
					<th></th>
				</tr>
                </thead>
                <tbody>
                <?php
                //se llama al controlador de la vista del formulario
				$vistaUsuario = new MvcController();
				$vistaUsuario -> vistaCarrerasController();

				?>
                </tbody>
	        </table>
	      </div>
	    </div>
    </div>
  </section>