<?php
//session_start();
session_destroy();
//se confirma el agregado y se redirecciona la pagina
echo '<script> alert("Haz cerrado Sesion") </script>';
echo '<script> window.location = "index.php"; </script>';
?>