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
    <form method="post" action="../php/login_bd.php">
        
        <input type="text" name="username" id="username" placeholder="user">
        <br>
        
        <input type="password" name="password" id="password" placeholder="contraseña">
        <br>
        <input type="checkbox" name="remember" id="remember" value="1">
        <label for="remember">Recordar usuario</label>
        <br>
        <input type="submit" value="Ingresar">
    </form>
    
</body>
</html>