<div class="login">
  <br><br><br>
  <div class="card card-info">
      <h1 class="card-title" align="center">Control de Tutorias</h1>
    <form class="form-horizontal" method="post">
      <br><br>
      <div class="card-body">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" name="usuarioIngreso" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" class="form-control" name="passwordIngreso" placeholder="Password">
          </div>
        </div>
      </div>
      <div class="card-footer" align="center">
        <button type="submit" class="btn btn-success">Ingresar</button>
      </div>
      <br>
    </form>
  </div>
</div>
<?php

#se llama al controlador para ingresar al usuario

$ingreso = new MvcController();
$ingreso -> ingresoUsuarioController();
?>