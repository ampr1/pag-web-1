<!-- registro.php
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
	 				<input type="email" name="correo">
	 				<br>
	 				Contraseña: 
	 				<br>
	 				<input type="password" name="contraseña" id= "pass1"  title= "Debe contener al menos 1 número, una mayúscula, una minúscula, un caracter especial y al menos 8 caracteres.">
	 				<br>
	 				Repetir contraseña:
	 				<br>
	 				<input type="password" name="contraseña2" id= "pass2"  title= "Debe contener al menos 1 número, una mayúscula, una minúscula, un caracter especial y al menos 8 caracteres." onkeyup= "confirmar(); return false;">
	 				<br>
	 				<span id="mensaje"></span>
	 				<br>
	 				<input type="submit" name="submit" onclick= "validar();">
	 				</form>
	 		</center>
	 		<center>
	 			<!--
	 		<script>
	 			function confirmar()
	 			{
	 				var pass1= document.getElementById('pass1');
	 				var pass2= document.getElementById('pass2');
	 				var message= document.getElementById('mensaje');

	 				if (pass1.value == pass2.value){
	 					pass2.style.backgroundColor = 'green';

	 				}
	 				else{
	 					pass2.style.backgroundColor= 'red';
	 					message.style.color= 'red';
	 					message.innerHTML= "Las contraseñas no son iguales"
	 				}
	 			}

	 			function validar(){
	 				var pass1= document.getElementById('pass1');
	 				var pass2= document.getElementById('pass2');

	 				var minusculas= /[a-z]/g;
	 				if (!(pass1.value.match(minusculas))){
	 					alert("No hay minusculas");
	 					return false;
	 				}

	 				var mayusculas= /[A-Z]/g;
	 				if(!(pass1.value.match(mayusculas))){
	 					alert("No hay mayusculas");
	 					return false;
	 				}

	 				var numeros= /[0-9]/g;
	 				if(!(pass1.value.match(numeros))){
	 					alert("No hay numeros");
	 					return false;
	 				}

	 				if ((pass1.value.lenght < 8)){
	 					alert("La contraseña debe tener más de 8 caracteres");
	 					return false;
	 				}

	 				var cesp= /[@#$%^&*]/g;
	 				if (!(pass1.value.match(cesp))){
	 					alert("La contraseña debe tener caracteres especiales");
	 					return false;
	 				}

	 			}

	 		</script>
	 	-->
	 	
	 	
	 		<center>
	 		<?php
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
	 			if($pass === $pass2){
	 				$query= "INSERT INTO registros (usuario, password, correo) VALUES('$usu', '$pass', '$correo');";
	 				$conn = new mysqli($servername, $username, $password, $DBname);
	 				if($conn->query($query) === TRUE){
	 					echo "Registrado :D";
	 				}
	 				else{
	 					echo $conn->error;
	 				}
	 				
    				$conn-> close();
	 			}
	 		}
	 		?> 
	 	</center>
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

