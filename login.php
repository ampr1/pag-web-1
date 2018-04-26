<!--login.php 
	Marcos Alejandro Pérez Ramírez
	 160300154
	 Ingeniería en Datos e Inteligencia Organizacional
	 
-->


 <!DOCTYPE html>
	 <html>
	 	<meta charset="UTF-8">
	 	<head>
	 		<link rel="stylesheet" type="text/css" href="style.css">
	 		<script src="script/script.js"></script> 
	 		<body background="img/bg.jpg">
	 		<title>Página web</title>
	 	</head>
		<header>
	 		<h1 class= "pp"> Primera página web en HTML5 </h1>
	 		<center>
	 			<nav>
	 				<a href= "index.html" title="Fotos" class="pp"> Fotos </a> |
	 				<a href= "index.html" title= "Biografía" class="pp"> Biografía </a> |
	 				<a href= "login.php" class="pp"> Login </a> |
	 				<a href= "registro.php" class="pp"> Registro </a>
	 			</nav>
	 		</center>
	 	</header>
	 	<body>
	 		<center>
	 			<br>
	 			<br>
	 			<form class= "registro">
	 				Usuario: 
	 				<input type="text" name= "usuario" id= "usuario">
	 				<br>
	 				Contraseña: 
	 				<input type="password" name="contraseña" pattern="(?=.*[`~!@#$%^&*);'[\]\x22{}])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title= "Debe contener al menos 1 número, una mayúscula, una minúscula, un caracter especial y al menos 8 caracteres." id = "contraseña">
	 				<br>
	 				<input type="submit" name="submit" onclick= "validarLogIn();">
	 				</form>
	 				<p class= "pp">Universidad <br> Caribe123*</p>

	 		</center>


	 	<?php
	 		$user= "Universidad";
	 		$password= "Caribe123*";
	 		if (isset($_GET['submit']))
	 		{

	 			$usu= $_GET['usuario'];
	 			$pass= $_GET['contraseña'];
	 			if($usu === $user && $password === $pass){
	 				header("Location: success.jpg");
	 			}
	 		}
	 		
	 		
	 	?>
	 	</body>
	 	<footer>
	 		<p>
	 			Marcos Alejandro Pérez Ramírez, 160300154
	 		</p>
	 		<aside>
	 			Contacto: 160300154@ucaribe.edu.mx
	 		</aside>
	 	</footer>
	 	</html>

