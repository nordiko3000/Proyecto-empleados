<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/pago.css">
    <title>Document</title>
</head>
<body>
    <body>
        <form action="calcular_salario.php" method="post">
            <h2>Calcular salario de empleado</h2>
            <label for="hora_entrada">Hora de entrada:</label>
            <input type="time" id="hora_entrada" name="hora_entrada" required>
            
            <label for="hora_salida">Hora de salida:</label>
            <input type="time" id="hora_salida" name="hora_salida" required>
            
            <label for="pago_hora">Pago por hora:</label>
            <input type="number" id="pago_hora" name="pago_hora" step="0.01" min="0" required>
            
            <label for="horas_extra">Horas extras:</label>
            <input type="number" id="horas_extra" name="horas_extra" step="0.01" min="0" required>
            
            <label for="bonificaciones">Bonificaciones:</label>
            <input type="number" id="bonificaciones" name="bonificaciones" step="0.01" min="0">
            
            <label for="deducciones">Deducciones:</label>
            <input type="number" id="deducciones" name="deducciones" step="0.01" min="0">
            
            <input type="submit" value="Calcular salario">
        </form>
    </body>
    </html>
</body>
</html>
