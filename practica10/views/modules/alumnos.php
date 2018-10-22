 <?php 

 	if(!isset($_SESSION['validar'])){

		echo '<script> alert("No haz iniciado sesion") </script>';
		echo '<script> window.location = "index.php"; </script>';
 		//header('Location:dashboard.php');
 	}

  ?>

  <section class="content">
    <div class="container-fluid">
    	
	    <div class="card">
	      <div class="card-header row">
	      	<div class="col-sm-6" align="left">
	      		<h3 class="card-title">Alumnos</h3>
	      	</div>
	      	<?php 
          if($_SESSION['usuario']['nombre'] == 'ADMINISTRADOR'){
          ?>
	      	<div class="col-sm-6" align="right">      		
	            <a href="index.php?action=alumno_agregar" class="btn btn-success">Agregar Alumno</a>	           
	      	</div>
	      <?php } ?>
	        
	      </div>
	      <div class="card-body">
	        <table id="example1" class="table table-bordered table-striped">
	          <thead>
	            <tr>
					<th>Matricula</th>
					<th>Nombre</th>
					<th>Carrera</th>
					<th>Tutor</th>

					<?php 
					if($_SESSION['usuario']['nombre'] == "ADMINISTRADOR"){
						echo '<th></th><th></th>';
					}
					?>

				</tr>
	            </thead>


	            <tbody>
	            <?php

	            //se llama al controlador de la vista del formulario
				$vistaUsuario = new MvcController();
				$vistaUsuario -> vistaAlumnosController();
				?>
	            </tbody>
	        </table>
	      </div>
	    </div>
    </div>
  </section>
