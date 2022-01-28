<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Login</title>
</head>
<body>
  <div class="contenedor">
    <header>
      <h1>Bienvenidos!!!</h1>
    </header>

    <div class="cont_form">
      <form action="validacion.php" method="post">
        <h2>Logueate</h2>
        <input type="text" name="usuario" placeholder="Nombre de usuario">
        <input type="password" name="password" placeholder="Ingrese contraseña">
        <button>Ingresar</button>
      </form>  
      <p class="registrate">¿No tienes una cuenta?</p>
      <p class="vinculo"><a href="registro.php">Registrate</a></p>  
    </div>
  
  </div>
</body>
</html>