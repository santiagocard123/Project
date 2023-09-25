<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $conexion = mysqli_connect("localhost", "root", "", "rol");

    $usuario = $_SESSION['usuario'];
    $consulta = "SELECT nombre FROM usuarios WHERE usuario = '$usuario'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($fila = mysqli_fetch_array($resultado)) {
        echo "Usuario: " . $usuario . "<br>";
        echo "Nombre: " . $fila['nombre'] . "<br>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>
    <h1>hola cliente</h1>
</body>
</html>