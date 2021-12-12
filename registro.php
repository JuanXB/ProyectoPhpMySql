<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
</head>
<body>
  <div class="contenedor">
    <header>
      <h1>Únete a nosotros!!!</h1>
    </header>
    <div class="formulario">
    <form action="validacin_registro" method="post">
      <h2>Registro</h2>
      <label for="">Usuario</label>
      <input type="text" name="usuario" require>
      <label for="">Contraseña</label>
      <input type="text" name="password" require>
      <label for="">Correo electrónico</label>
      <input type="email" name="email" require>
      <button>Registrarse</button>
    </form>
    <p class="login">
      <h3>¿Ya tienes una cuenta? Logueate aquí</h3>
      <a href="/login.php"></a>
    </p>
    </div>
  </div>
</body>
</html>