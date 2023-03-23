<!DOCTYPE html>
<html>
<head>
	<title>Tabla de pagos</title>
	<link rel="stylesheet" href="../css/pagos.css">
	<script>"../../JS/user.js"</script>
	<link rel="stylesheet" href="../../css/">


</head>
<body>
	<h1>Tabla de pagos</h1>

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

	
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Fecha de ingreso</th>
				<th>Bono</th>
				<th>Vacaciones</th>
				<th>Aguinaldo</th>
				<th>Total mensual</th>
				<th>Total anual</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>luis martinez</td>
				<td>15/01/2018</td>
				<td>$500</td>
				<td>35 días</td>
				<td>$600</td>
				<td>$3,200</td>
				<td>$38,400</td>
			</tr>
			<tr>
				<td>Roberto casas</td>
				<td>1/03/2019</td>
				<td>$750</td>
				<td>20 días</td>
				<td>$900</td>
				<td>$5,700</td>
				<td>$68,400</td>
			</tr>
			<tr>
				<td>Gabriel</td>
				<td>20/06/2020</td>
				<td>$400</td>
				<td>18 días</td>
				<td>$480</td>
				<td>$2,880</td>
				<td>$34,560</td>
			</tr>
		</tbody>
	</table>

</body>
</html>
