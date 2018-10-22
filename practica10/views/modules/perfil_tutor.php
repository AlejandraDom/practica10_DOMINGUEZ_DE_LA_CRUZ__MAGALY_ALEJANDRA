 <?php 

 	if(!isset($_SESSION['validar'])){

		echo '<script> alert("No haz iniciado sesion") </script>';
		echo '<script> window.location = "index.php"; </script>';
 		//header('Location:dashboard.php');
 	}
?>

<!-- START PAGE CONTENT -->
<div class="container" style="width: 50%;">
	<div class="row">
	    <div class="col-sm-12">
	        <div class="table-responsive m-b-20">
	            <h1>PERFIL: <?php echo $_SESSION['usuario']['nombre']; ?></h1>
	            <!--Se imprimen los datos del perfil del maestro con la variable de session-->
	            <table id="datatable" class="table table-striped table-bordered">
	                <tr><td style="text-align: center;"><strong>NOMBRE:</strong> <?php echo $_SESSION['usuario']['nombre']; ?></td></tr>
	                <?php 
		          if($_SESSION['usuario']['nombre'] != 'ADMINISTRADOR'){
		          ?>
	                <tr><td style="text-align: center;"><strong>CARRERA:</strong> <?php echo $_SESSION['usuario']['carrera']; ?></td></tr>
	            <?php } ?>
	                <tr><td style="text-align: center;"><strong>EMAIL:</strong> <?php echo $_SESSION['usuario']['email']; ?></td></tr>
	                <tr><td style="text-align: center;"><strong>PASSWORD:</strong> <?php echo $_SESSION['usuario']['password']; ?></td></tr>
	            </table>
	        </div>
	    </div>
	</div>
</div>





