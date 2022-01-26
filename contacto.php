<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/contacto.css">
  <title>Contacto</title>
</head>
<body>
  <div class="contenedor">
  <header>
      <nav class="menu">
        <ul>
          <li><a href="home.php">Inicio</a>|</li>
          <li><a href="nosotros.php">Sobre nosotros</a>|</li>
          <li><a href="#">Contacto</a>|</li>
          <li><a href="usuarios.php">Usuarios</a></li>
        </ul>
      </nav>
    </header>
    <form action="datos_peticion.php" method="post">
      <h2>Contactanos</h2>
      <label for="" name="nombre">Ingresa tu nombre</label>
      <input type="text" name="usuario"  placeholder="Nombre"  require>

      <label for="" name="usuario">Ingresa tu usuario</label>
      <input type="text" name="usuario"  placeholder="Usuario"  require>

      <label for="" name="correo" >Ingresa tu correo</label>
      <input type="text" name="correo" placeholder="Correo electrónico" require>

      <textarea name="peticion" id="" cols="30" rows="10" placeholder="Ingrese su petición..."></textarea>
      <button>Enviar</button>
    </form>
  </div>
</body>
</html>