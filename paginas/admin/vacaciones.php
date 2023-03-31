<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/pago.css">
  <script src="https://kit.fontawesome.com/bbd4ac78c5.js" crossorigin="anonymous"></script>
	<script src="../../JS/user.js"></script>
    <title>Document</title>
</head>
<header>
    <div class="icon__menu">
      <i class="fas fa-bars" id="btn_open"></i>
    </div>
  </header>

  <div class="menu__side" id="menu_side">

    <div class="name__page">
      <img src="../imagenes/fabrilink.png" class=""></i>
      <h4>FabriLink</h4>
    </div>

    <div class="options__menu">

      <a href="#" class="selected">
        <div class="option">
          <i class="fas fa-home" title="Inicio"></i>
          <h4>Inicio</h4>
        </div>
      </a>

      <a href="#">
        <div class="option">
          <i class="fa-sharp fa-solid fa-file" title="datos"></i></i>
          <h4>Datos</h4>
        </div>
      </a>

      <a href="#">
        <div class="option">
          <i class="fa-sharp fa-solid fa-hand-holding-dollar" title="Pagos"></i>
          <h4>Pagos</h4>
        </div>
      </a>

      <a href="#">
        <div class="option">
          <i class="fa-sharp fa-solid fa-calendar-days" title="Fechas"></i>
          <h4>Fechas</h4>
        </div>
      </a>

      <a href="#">
        <div class="option">
          <i class="fa-sharp fa-solid fa-bell" title="Notificaciones"></i>
          <h4>Notificaciones</h4>
        </div>
      </a>

      <a href="#">
        <div class="option">
          <i class="fa-sharp fa-solid fa-gear" title="opciones"> </i>
          <h4>Configuracion</h4>
        </div>
      </a>

    </div>

  </div>
  </header>

<body>
	<h1>Solicitud de vacaciones, días libres y aguinaldo</h1>
	<form method="POST" action="procesar_formulario.php">
		<label for="nombre">Nombre completo:</label>
		<input type="text" name="nombre" id="nombre" required><br><br>
		
		<label for="tipo_solicitud">Tipo de solicitud:</label>
		<select name="tipo_solicitud" id="tipo_solicitud" required>
			<option value="">Seleccionar...</option>
			<option value="vacaciones">Vacaciones</option>
			<option value="dias_libres">Días libres</option>
			<option value="aguinaldo">Aguinaldo</option>
			<option value="otro">Otro</option>
		</select><br><br>
		
		<label for="fecha_inicio">Fecha de inicio:</label>
		<input type="date" name="fecha_inicio" id="fecha_inicio" required><br><br>
		
		<label for="fecha_fin">Fecha de fin:</label>
		<input type="date" name="fecha_fin" id="fecha_fin" required><br><br>
		
		<label for="comentarios">Comentarios:</label>
		<textarea name="comentarios" id="comentarios"></textarea><br><br>
		
		<input type="submit" value="Enviar solicitud">
	</form>
</body>
</html>


</html>