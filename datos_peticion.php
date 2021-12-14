<?php  
  require("db_connection.php");

  $nombre = $_POST['nombre'];
  $usuario = $_POST['usuario'];
  $correo = $_POST['correo'];
  $peticion = $_POST['peticion'];

  $consulta = "INSERT INTO contacto ('nombre','usuario', 'correo', 'peticion') 
              VALUES ('$nombre', '$usuario', '$correo', '$peticion')";

  $validacion = mysqli_query($conexion, $consulta);              
?>