<!DOCTYPE html>
<html lang="en">
<head>
  <title>Paquetería - Mapa de seguimiento</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&language=es"></script>
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
        <a class="paqueteria-link" href="/paqueteria/">PAQUETERÍA</a>
      </li>
    </ul>
    <u class="navbar-nav">
      <li class="nav-item">
        <a class="link-color" href="index.php"> < Volver</a>
      </li>
      <li class="nav-item">
        <a class="link-color" href="salir.php">Cerrar sesión</a>
      </li> 
      <div class="icono-usuario desactivado"> </div>
    </ul>
  </div>
</nav>
</nav>

<div class="container margenTop porciento90">
  <h1>Mi información</h1>
  <h6>Estos son tus datos personales</h6>
</div>

<div class="container margen-Top porciento60"> 
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -99.363, lng: 99.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
</div>

</body>
</html>