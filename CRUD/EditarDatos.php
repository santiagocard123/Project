<?php

    include_once("../Config/Conexion.php");

    $id = $_POST['Id'];
    $Nombre = $_POST['Nombrep'];
    $Correo = $_POST['Correop'];
    $Sueldo = $_POST['Sueldop'];
    $Nacimiento = $_POST['Nacimientop'];
    $Edad = $_POST['edadp'];

    $sql = "UPDATE persona SET 
                    nombre='".$Nombre."',
                    Correo='".$Correo."',
                    Sueldo='".$Sueldo."',
                    Nacimiento='".$Nacimiento."',
                    edad='".$Edad."' WHERE Idpersona =".$id."";

    if ($resultado = $conexion->query($sql)) {
        header("location:../Index.php");
    }
