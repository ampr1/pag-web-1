<!-- Marcos Alejandro Pérez Ramírez
	 160300154
	 Ingeniería en Datos e Inteligencia Organizacional
	 <-->

	 <!DOCTYPE html>
	 <html>
	 <meta charset="UTF-8">
	 <head>
	 	<link rel="stylesheet" type="text/css" href="style.css">
	 	<body background="img/bg.jpg">
	 	<title>Página web</title>
	 </head>
	 	<header>
	 		<h1 class= "pp"> Registro </h1>
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
	 				<br>
	 				<input type="text" name= "usuario" id= "usuario">
	 				<br>
	 				Correo:
	 				<br>
	 				<input type="text" name="correo">
	 				<br>
	 				Contraseña: 
	 				<br>
	 				<input type="password" name="contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
	 				<br>
	 				Repetir contraseña:
	 				<br>
	 				<input type="password" name="contraseña2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
	 				<br>
	 				<br>
	 				<input type="submit" name="submit">
	 				</form>
	 		</center>

	 		<?php
	 		session_start();
	 		$servername = "localhost:3306";
			$username = "ampr1";
			$password = "alex12345";
			$DBname= "usuarios";
	 		if (isset($_GET['submit']))
	 		{
	 			$usu= $_GET['usuario'];
	 			$pass= $_GET['contraseña'];
	 			$pass2= $_GET['contraseña2'];
	 			$correo= $_GET['correo'];
	 			#if($usu === $user && $password === $pass){
	 				#header("Location: success.jpg");
	 			#}
	 			if($pass === $pass2){
	 				
	 				
	 				$query= "INSERT INTO registros (usuario, password, correo) VALUES('$usu', '$pass', '$correo');";
	 				#$conn = new mysqli("mysql:host=$servername;dbname=$DBname", $username, $password);
	 				
	 				$conn = new mysqli($servername, $username, $password, $DBname);
	 			
	 				#echo $query;
	 				$conn->query($query);
    				$conn= null;
	 			}
	 		}
	 		
	 		
	 	?>
