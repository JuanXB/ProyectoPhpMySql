<?php
  /*Llamamos a la conexion de base de datos */
  include ("db_connect.php");

  // Declaramos las variables que contendran los datos ingresados en el formulario.
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['password'];

  // Iniciar sesion
  session_start();
  $_SESSION['usuario'] = $usuario;

  // Realizamos una peticion
  $consulta = "SELECT * FROM usuario WHERE usuario = '$usuario' and contrasena = '$contraseña'";

  // Se realiza la consulta
  $sql = mysqli_query($conexion,, $consulta);
  $row = mysqli_fetch_array($sql);

  // Validación de datos
  if (mysqli_num_rows($sql) != 1) {
    echo "<h1>Usuario y contraseña incorrectos</h1>";
  }
  else {
    header('location:home.php');
  }

?>