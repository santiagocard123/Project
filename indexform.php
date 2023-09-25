
   <!DOCTYPE html>
   <html lang="en">
   <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
   </head>
   <body>
	



   <header class="header">
            <div class="logo">
                <img src="img/pollo.png" alt="Logo de la marca">
            </div>
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

	


<main>
<div class="contenedor">


		<form class="formulario" id="formulario" name="formulario" action="validar.php" method="post">
	<div class="contenedor-inputs">
			<h1 class="animate__animated animate__backInLeft" >LOGIN</h1>
    
   		 <input type="text" placeholder="ingrese su nombre" name="usuario">

   		 <input type="password"  placeholder="ingrese su contraseña" name="contraseña">
   
			<div class="sexo">
					<input type="radio" name="sexo" id="hombre" value="hombre">
					<label for="hombre" class="label-radio hombre">Hombre</label>
							
					<input type="radio" name="sexo" id="mujer" value="mujer">
					<label for="mujer" class="label-radio mujer">Mujer</label>
				</div>
						
		 
		   <div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
			</div>
				<ul class="error" id="error"></ul>
    </div>
			
    
	<input type="submit" class="btn" value="Ingresar">
		</form> 
</div>
   <script src="js/formulario.js"></script>
</main>



   




</body>
</html>






