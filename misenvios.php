<!DOCTYPE html>
<html lang="en">
<head>
  <title>PaqueMEX - Mis envíos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
    });
  </script>
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
  </div>
</nav>

<br />
<div class="container margenTop porciento90">
  <h1>Mis envíos</h1>
  <h6>Agrega o modifica tus envíos</h6>
  
  <div class="agregarenvio" data-toggle="modal" data-target="#modal2">+</div>
</div>


<div class="container margenTop porciento80">
<table class="table">
    <thead>
      <tr>
        <th>ID Rastrero</th>
        <th>Destinatario</th>
        <th>Código postal</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Estado</th>
        <th>Teléfono</th>
        <th>Peso</th>
        <th>Status</th>
        <th>Mapa</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>100111</td>
        <td>John Deo</td>
        <td>91000</td>
        <td>Calle 1 Colonia 2</td>
        <td>Xalapa</td>
        <td>Veracruz</td>
        <td>2281000000</td>
        <td>340 gr</td>
        <td>Confirmado</td>
        <td><button type="button" class="btn btn-info" onclick="location.href='mapa-seguimiento.php';">Mapa</button></td>
        <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal1">Editar</button></td>
      </tr>
    </tbody>
  </table> 
</div>

<!-- Modal -->
<div id="modal1" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3>Editar envío</h3>
        <h6>Datos de tu envío</h6>
        <hr />
        <br />
        <form method="post" action="#" id="formulario">
          <div class="form-group row">
            <label for="destinatario" class="col-sm-2 col-form-label">ID Rastreo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="destinatario" value="100111" readonly="readonly">
            </div>
          </div>
          <div class="form-group row">
            <label for="destinatario" class="col-sm-2 col-form-label">Destinatario</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="destinatario" value="John Deo" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="Código postal" class="col-sm-2 col-form-label">Código postal</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="cp" value="91000" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="direccion" value="Calle 1 Colonia 2" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="Ciudad" class="col-sm-2 col-form-label">Ciudad</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ciudad" value="Xalapa" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="Estado" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="estado" value="Veracruz" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="telefono" value="2281000000" required="required">
            </div>
          </div>

           <div class="form-group row">
            <label for="peso" class="col-sm-2 col-form-label">Peso</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="peso" value="340 gr" required="required" >
            </div>
          </div>

          <div class="form-group row">
            <label for="peso" class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="precio" value="$150" readonly="readonly">
            </div>
          </div>

          <div class="form-group row">
            <label for="peso" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
          <td>
          <select>
            <option value="">Status</option>
            <option value="v1">Confirmado</option>
            <option value="v2">Cancelado</option>
          </select>
        </td>
            </div>
          </div>
            
          <button type="submit" class="btn btn-success" name="guardar">Guardar datos</button>
        </form>
      </div>
    </div>

  </div>
</div>

<!-- MODAL DE AGREGAR NUEVO ENVÍO -->

<!-- Modal -->
<div id="modal2" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3>Agregar un nuevo envío</h3>
        <h6>Insertar los datos de tu nuevo envío</h6>
        <hr />
        <br />
        <form method="post" action="#" id="formulario">

          <div class="form-group row">
            <label for="destinatario" class="col-sm-2 col-form-label">ID Rastreo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="destinatario" value="100111" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="destinatario" class="col-sm-2 col-form-label">Destinatario</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="destinatario" value="" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="Código postal" class="col-sm-2 col-form-label">Código postal</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="cp" value="" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="direccion" value="" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="Ciudad" class="col-sm-2 col-form-label">Ciudad</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ciudad" value="" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="Estado" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="estado" value="" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="telefono" value="" required="required">
            </div>
          </div>

          <button type="submit" class="btn btn-success" name="guardar">Guardar datos</button>
        </form>
      </div>
    </div>

  </div>
</div>


</body>
</html>