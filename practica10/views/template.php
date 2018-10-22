<!--Es la plantilla que vera el usuario al ejecutar la aplicación -->
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Practica 10</title>

	<?php include_once('links/link1.php'); ?>
	<style type="text/css">
		.login{
			padding: 50px;max-width: 450px; width: 50%; position: relative;margin: 0 auto;
		}
	</style>
</head>

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------| -->

<body class="hold-transition login-page">
	<div class="wrapper">

	<?php
		if(isset($_GET['action'])){
			if($_GET['action'] != 'fallo'){
				include "modules/navegacion.php";	
			}	
		}
		$mvc = new MvcController();
		$mvc -> enlacesPaginasController();		
	?>
	</div>
</body>
<?php include_once('links/link2.php'); ?>
</html>