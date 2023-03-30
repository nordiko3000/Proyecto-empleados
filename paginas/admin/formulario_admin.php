<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/formularios.css">
    <title>Document</title>
</head>
<form method="POST" action="../../php/formulario_admin.php" >
    <label for="hire-date">Fecha de fundacion:</label>
    <input type="date" id="hire-date" name="fecha_fundacion" required>
    
    <input type="text" id="company-name" name="nombre_empresa" required placeholder="Nombre empresa">
  
    
    <input type="text" id="occupation" name="servicio" required placeholder="servicios">


    <input type="text" id="address" name="facebook" required placeholder="Facebook">
    
    <input type="text" id="address" name="direccion" required placeholder="Direccion">
    <input type="tel" id="phone-number" name="telefono" required placeholder="Numero telefonico">
    <input type="text" id="address" name="sector" required placeholder="Sector">
  
  
    <button type="submit">Enviar</button>
</form>
</html>