 <!DOCTYPE html>
	 <html>
	 	<meta charset="UTF-8">
	 	<head>
	 		<link rel="stylesheet" type="text/css" href="style.css">
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
	 				<input type="password" name="contraseña">
	 				<br>
	 				<input type="submit" name="submit">
	 				</form>
	 		</center>
	 	<?php
	 		session_start();
	 		$user= "Universidad";
	 		$password= "Caribe";
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

