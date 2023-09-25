<?php
include ("../Config/Conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['Correo'];
$sueldo = $_POST['Sueldo'];
$nacimiento = $_POST['Nacimiento'];
$edad = $_POST['edad'];


$sql = "INSERT INTO persona(nombre,Correo,Sueldo,Nacimiento,edad) VALUES('$nombre','$correo','$sueldo','$nacimiento','$edad')";


$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:../Index.php");
} else {
    echo "Datos NO insertados";
}
