<!DOCTYPE html>
<html lang="en">
<head>
  <title>PaqueMEX - Cliente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container porciento95">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="paqueteria-link" href="/paquemex/">PAQUEMEX</a>
      </li>
    </ul>
    <u class="navbar-nav">
      <li class="nav-item">
        <a class="link-color" href="salir.php">Cerrar sesión</a>
      </li> 
      <div class="icono-usuario" onclick="location.href='miinformacion.php';"> </div>
    </ul>
    </ul>
  </div>
</nav>

 <div id= formulario class="form">
<menu class="tab-group">
<button type="submit" class="button_1 button-block"><a href="miinformacion.php"> Mi información</a></button>
<button type="submit" class="button_1 button-block"><a href="misenvios.php"> Facturación </a></button>
<button type="submit" class="button_1 button-block"><a href="misenvios.php"> Seguimiento envio</a></button>
<button type="submit" class="button_1 button-block"><a href="misenvios.php"> Envios pendientes</a></button>
</menu>
</div>

</body>
</html>