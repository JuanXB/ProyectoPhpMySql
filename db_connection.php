<?php
  $conexion = mysqli_connect('127.0.0.1', 'root', '', 'login');

  if ($conexion) {
    /* Se redirige a la pagina login */
    header("location: login.php");
  }
  else {
    echo "No se puedo conectar a la base de datos". mysqli_error();
  }
 ?>