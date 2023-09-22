<?php
$conexion = mysqli_connect("localhost", "root", " ", "usuarios");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Verificar si el usuario ya existe en la base de datos
    $consulta_existencia = "SELECT * FROM prueba WHERE usuario = '$usuario'";
    $resultado_existencia = mysqli_query($conexion, $consulta_existencia);

    if (mysqli_num_rows($resultado_existencia) == 0) {
        // El usuario no existe, podemos proceder con el registro
        $consulta_registro = "INSERT INTO prueba (usuario, password) VALUES ('$usuario', '$password')";
        $resultado_registro = mysqli_query($conexion, $consulta_registro);

        if ($resultado_registro) {
            // Registro exitoso, redirige a la página de inicio de sesión
            header("location:index.php");
        } else {
            echo "Error al registrar el usuario.";
        }
    } else {
        echo "El usuario ya existe en la base de datos.";
    }
}

mysqli_close($conexion);
?>
