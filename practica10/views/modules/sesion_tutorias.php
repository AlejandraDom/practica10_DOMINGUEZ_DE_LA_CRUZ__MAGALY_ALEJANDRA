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
	      		<h3 class="card-title">Tutorias</h3>
	      	</div>
	        
	      </div>
	      <!-- /.card-header -->
	      <div class="card-body">
	        <table id="example1" class="table table-bordered table-striped">
	          <thead>
                <tr>
					<th>Id</th>
					<th>Alumno</th>
					<th>Tutor</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Tipo</th>
					<th>Tutoria</th>
				</tr>
                </thead>
                <tbody>
                <?php

				$vistaUsuario = new MvcController();
				$vistaUsuario -> vistaTutoriasController();
				?>
                </tbody>
	        </table>
	      </div>
	    </div>
    </div>
  </section>




