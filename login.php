<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <div class="contenedor">
    <header>
      <h1>Bienvenidos!!!</h1>
    </header>

    <form action="validacion.php" method="post">
      <h2>Logueate</h2>
      <label for="">Usuario</label>
      <input type="text" name="usuario">
      <label for="">Contraseña</label>
      <input type="password" name="password">
      <button>Ingresar</button>
    </form>
    <p class="registrate">¿No tienes una cuenta? Registrate!</p>
    <p class="vinculo"><a href="registro.php">Registrate</a></p>  
  </div>
</body>
</html>