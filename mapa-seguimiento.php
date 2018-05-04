<!DOCTYPE html>
<html lang="en">
<head>
  <title>PaqueMEX - Mapa de seguimiento</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
   
  <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"
  type="text/javascript"></script>
  <style>
    #map {
      min-height: 400px;
      width: 100%;
    }
  </style>
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
        <a class="link-color" href="indexcliente.php">Mi menú</a>
      </li> 
      <li class="nav-item">
        <a class="link-color" href="salir.php">Cerrar sesión</a>
      </li> 
      <div class="icono-usuario" onclick="location.href='miinformacion.php';"> </div>
    </ul>
    </ul>
  </div>
</nav>

<div class="container margenTop porciento90">
  <h1>Rastreo de envío</h1>
  <h6>Se muestra la ubicación actual de tu envío</h6>
</div>

<div class="container margen-Top porciento90"> 
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 19.5312400, lng: -96.9158900};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    
</div>

<div class="container margenTop porciento90">
</div>

</body>
</html>