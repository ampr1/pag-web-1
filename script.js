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
	var usuario= document.getElementById('usuario');
	var correo = document.getElementById('correo');
	

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

	if (usuario.value == ""){
		alert("Ingresa usuario");
		return false;
	}

	if (correo.value == ""){
		alert("Ingresa correo");
		return false;
	}
}

function validarLogIn(){
	var usuario= document.getElementById('usuario');
	var pass1= document.getElementById('contraseña');
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

	if (usuario.value == ""){
		alert("Ingresa usuario");
		return false;
	}
}