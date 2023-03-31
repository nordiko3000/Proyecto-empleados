



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/bbd4ac78c5.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../css/pago.css">
  <script src="../../JS/pago.js"></script>
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
    <img src="../../imagenes/fabrilink.png" class=""></i>
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

<body>

  <form method="post" >
    <label>Nombre de empleado o clave unica  :</label>
    <input type="text" name="search" />
    <input type="submit" value="Buscar" class="resultado_busqueda" />
  </form>


  <form  method="POST" id="formulario" action="../../php/pago.php">
    <h2 class="h">Asignar Salario</h2>
    <label for="hora_entrada">Hora de entrada:</label>
    <input type="time" id="hora_entrada" name="hora_entrada" required>

    <label for="hora_salida">Hora de salida:</label>
    <input type="time" id="hora_salida" name="hora_salida" required>

    <label for="hora_salida">Dia que se paga</label>

    <select name="tipo_solicitud" id="tipo_solicitud" required>
			<option value="">Seleccionar...</option>
			<option value="vacaciones">Lunes</option>
			<option value="dias_libres">Martes</option>
			<option value="aguinaldo">Miercoles</option>
			<option value="otro">Jueves</option>
      <option value="otro">Viernes</option>
      <option value="otro">Sabado</option>
      <option value="otro">Domingo</option>
		</select><br><br>

    <label for="pago_hora">Pago por hora:</label>
    <input type="number" id="pago_hora" name="pago_hora" step="0.01" min="0" required>

    <label for="horas_extra">Horas extras:</label>
    <input type="number" id="horas_extra" name="horas_extra" step="0.01" min="0" required>

    <label for="bonificaciones">Bonificaciones:</label>
    <input type="number" id="bonificacion" name="bonificaciones" step="0.01" min="0">

    <label for="deducciones">Deducciones:</label>
    <input type="number" id="deduccion" name="deducciones" step="0.01" min="0">

    <input type="submit" value="Asignar salario">
    <input type="number" id="salario_semanal" name="salario_semanal">
    <input type="number" id="salario_anual" name="salario_anual">
  </form>
</body>

</html>
</body>

</html>