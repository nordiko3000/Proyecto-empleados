<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/formularios.css">
</head>
<body>
   
	<form method="POST" action="../php/login_bd.php" >
		
		<input type="text" id="usuario" required name="usuario"  placeholder="Introduzca su usuario">
		
		<input type="password" id="contraseña" name="contraseña" required placeholder="Introduzca su contraseña" >

        <label>Entrar como administrador</label>
        <input type="checkbox" name="admin" value="1">
		<input type="submit" value="Iniciar sesión">


	</form>
</body>
</html>