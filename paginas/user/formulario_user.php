<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/formularios.css">
</head>

<form method="POST" action="../../php/formularios.php">

    <label for="hire-date">Fecha de contratación:</label>
    <input type="date" id="hire-date" name="fecha_contrato" required>
    
    <input type="text" id="company-name" name="ocupacion" required placeholder="Ocupacion">
  
    
    <input type="text" id="occupation" name="empresa" required placeholder="Nombre de la empresa">
  
    
  
    
    
  
    
    <input type="tel" id="phone-number" name="telefono" required placeholder="Numero telefonico">
  
    
    <input type="text" id="address" name="direccion" required placeholder="Direccion">
  
    <button type="submit">Enviar</button>
  </form>

</html>