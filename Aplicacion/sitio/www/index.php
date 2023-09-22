<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="auth.php" method="post">
        <h1>Sistema de Login</h1>
        <p>Usuario <input type="text" placeholder="Ingrese su nombre" name="usuario"></p>
        <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="password"></p>
        <input type="submit" value="Ingresar">
        <p>¿No tienes una cuenta? <a href="registro.php">Crear una cuenta</a></p>

    </form>
    
    <!-- Botón para ir a la página de registro -->
</body>
</html>
