<?php
  include("db_connection.php");

  $nombre = $_POST['nombre'];
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $correo = $_POST['email'];

  $registro = "INSERT INTO usuario(nombre, usuario, contrasena, email)  VALUES ('$nombre', '$usuario', '$password', '$correo')";
  $validacion = mysqli_query($conexion, $registro);

  // Validación de datos
  if (!$validacion) {
    die("query failed");
  }
  else {
    header('location:index.php');
  }
?>