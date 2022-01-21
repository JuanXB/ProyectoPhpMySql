<?php
  include("db_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>usuario</title>
</head>
<body>
  <div class="contenedor">
  <header>
      <nav class="menu">
        <ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="nosotros.php">Sobre nosotros</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="#">Usuarios</a></li>
        </ul>
      </nav>
    </header>
    <div class="tabla">
      <table>
        <td>Id usuario</td>
        <td>Nombre</td>
        <td>Usuario</td>
        <td>Contraseña</td>
        <td>Correo</td>

        <?php
          $consulta ="SELECT * FROM usuario";
          $validacion = mysqli_query($conexion, $consulta);

          while ($resultado = mysqli_fetch_array($validacion)) {
        ?>
          <td><?php echo $resultado['id_usuario'] ?></td>
          <td><?php echo $resultado['nombre'] ?></td>
          <td><?php echo $resultado['usuario'] ?></td>
          <td><?php echo $resultado['contrasena'] ?></td>
          <td><?php echo $resultado['email'] ?></td>
          
        <?php
          //Se cierra el ciclo while que muestra los datos de la tabla usuario
          } 
        ?>
      </table>
    </div>
  </div>
</body>
</html>