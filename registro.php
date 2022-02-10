<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/registro.css">
  <title>Registro</title>
</head>
<body>
  <div class="contenedor">
    <header>
      <h1>Únete a nosotros!!!</h1>
    </header>
    <div class="formulario">
      <form action="validacion_registro.php" method="post">
        <h2>Registro</h2>
        <label for="">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre y Apellido"require>
        <label for="">Nombre de usuario</label>
        <input type="text" name="usuario" placeholder="Nombre de  usuario" require>
        <label for="">Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" require>
        <label for="">Correo electrónico</label>
        <input type="email" name="email" placeholder="Correo electrónico" require>
        <button class="registrarse">Registrarse</button>
      </form>
      <p class="login">
        <h3>¿Ya tienes una cuenta? Logueate aquí</h3>
        <button class="boton_log" onclick="location.href='../ProyectoPhpMySql/index.php'">Login</button>
      </p>
    </div>
  </div>
</body>
</html>