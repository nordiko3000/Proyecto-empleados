<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formularios.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="../php/login_bd.php">
        
        <input type="text"  id="username" name="usuario_login" placeholder="Ingrese su usuario" required>
        
        
        <input type="password"  id="password" name="contrasena_login" placeholder="ingrese su contraseña" required>
        
        <input type="checkbox"  id="remember" name="admin" >
        <label for="remember">Ingresar somo administrador</label>
      
        <input type="submit" >
    </form>
    
</body>
</html>