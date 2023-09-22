<?php
$conexion=mysqli_connect("localhost", "root", " ", "usuarios");

$usuario=$_POST['usuario'];
$password=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$consulta="SELECT*FROM prueba where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("Location: http://www.cdelgado.com");
    exit();
}else{
    ?>
    <?php
    include("index.php")
    ?>
    <h1>Intenta de nuevo/h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
