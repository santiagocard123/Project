

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD RELACIONAL</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>


<header class="header">

<div class="logo">
                <img src="img/pollo.png" alt="Logo de la marca">

            </div>
<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $conexion = mysqli_connect("localhost", "root", "", "rol");

    $usuario = $_SESSION['usuario'];
    $consulta = "SELECT nombre FROM usuarios WHERE usuario = '$usuario'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($fila = mysqli_fetch_array($resultado)) {
        echo "<div class=\"ver\" style=\"background-color: #f2f2f2; border: 1px solid #ddd; padding: 10px; \">Usuario: " . $usuario . "</div>";
        echo "<div class=\"mirar\" style=\"background-color: #f2f2f2; border: 1px solid #ddd; padding: 10px; margin: 15px;\">Nombre: " . $fila['nombre'] . "</div>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>
        

            <nav>
                <ul class="nav-links">
                    <li><a href="indexform.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>

            <a class="btn" href="#"><button>Codex</button></a>



            <a class="menu" href="#"><button>Menu</button></a>
            
            <div class="overlay" id="mobile-menu">
                <a  href="" class="close">&times;</a>
                <div class="overlay-content">
                <a href="indexform.php">Login</a>
                <a href="register.php">Register</a>
                </div>
            </div>



    </header>

  
    
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">LISTADO</h1>
    </div>
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id Departamento</th>
                    <th scope="col">Nombre Departamento</th>
                    <th scope="col">Area</th>
                    <th scope="col">Sueldo</th>
                    <th scope="col">Lugar de Nacimiento</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

    

                <?php
                require("Config/Conexion.php");

           

                    $sql = $conexion->query("SELECT * FROM persona
                        INNER JOIN departamento ON persona.nombre = departamento.Id
                        INNER JOIN empleado ON persona.correo = empleado.Id
                    ");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $resultado['Idpersona']?></th>
                        <th scope="row"><?php echo $resultado['nombredepartamento']?></th>
                        <th scope="row"><?php echo $resultado['Area']?></th>
                        <th scope="row"><?php echo $resultado['Sueldo']?></th>
                        <th scope="row"><?php echo $resultado['Nacimiento']?></th>
                        <th scope="row"><?php echo $resultado['edad']?></th>
                        <th>

                      
                            <a href="Formularios/EditarForm.php?Id=<?php echo $resultado['Idpersona']?>" class="btn btn-warning">Editar</a>
                            <a href="CRUD/EliminarDatos.php?Id=<?php echo $resultado['Idpersona']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
        <div class="container">
            <a href="Formularios/AgregarForm.php" class="btn btn-success">Agregar Producto</a>
        </div>
    </div>



    <script src="js/formulario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>