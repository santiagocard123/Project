<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['contraseña']=$contraseña;

$conexion=mysqli_connect("localhost","root","","rol");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if ($filas == null) {
    
    ?>
    <?php
    include("indexform.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
} else if ($filas['id_cargo'] == 1) {
    header("location:index.php");
} else if ($filas['id_cargo'] == 2) {
    header("location:cliente.php");
} else {
    include("indexform.php");
    echo "<h1 class=\"bad\">ERROR EN LA AUTENTIFICACION</h1>";
}


mysqli_free_result($resultado);
mysqli_close($conexion);


