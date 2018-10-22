 <?php 

 	if(!isset($_SESSION['validar'])){

		echo '<script> alert("No haz iniciado sesion") </script>';
		echo '<script> window.location = "index.php"; </script>';
 		//header('Location:dashboard.php');
 	}

  ?>
  <section class="content">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-sm-8">
			  	<div class="card card-info">	
		          <div class="card-header">
		            <h3 class="card-title">Editar Alumno</h3>
		          </div>
		          <form class="form-horizontal" style="text-align: center;" method="post">
		            <?php 
		            	$editarUsuario = new MvcController();
						$editarUsuario -> editarAlumnosController();
						$editarUsuario -> actualizarAlumnoController();
		            ?>
		          </form>
		        </div>
		    </div>
		</div>
    </div>
  </section>
