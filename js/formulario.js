// (function(){
	function openNav(){
		document.getElementById("mobile-menu").style.width = "100%";
	}
	
	document.querySelector('.menu').addEventListener('click', openNav);
	
	function closeNav(){
		document.getElementById("mobile-menu").style.width = "0%";
	}
	
	document.querySelector('.close').addEventListener('click', closeNav);
	



	var formulario = document.getElementById('formulario'),
		usuario = formulario.usuario,
		contraseña = formulario.contraseña,
		terminos = formulario.terminos,
		error = document.getElementById('error');

	function validarUsuario(e){
		if (usuario.value == '' || usuario.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el nombre</li>';
			console.log('Por favor completa el nombre');

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarPassword(e){
		if (contraseña.value == '' || contraseña.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor completa el password</li>';
			console.log('Por favor completa el password');

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarSexo(e){
		if (sexo.value == '' || sexo.value == null){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor selecciona el sexo</li>';
			console.log('Por favor completa el sexo');

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	function validarTerminos(e){
		if (terminos.checked == false){
			error.style.display = 'block';
			error.innerHTML += '<li>Por favor acepta los terminos y condiciones</li>';
			console.log('Por favor completa el terminos');

			e.preventDefault();
		} else {
			error.style.display = 'none';
		}
	}

	// Funcion encargada de validar todos los campos
	function validarForm(e){
		// Reiniciamos el error para que inicie sin mensaje.
		error.innerHTML = '';

		validarUsuario(e);
		validarPassword(e);
		validarSexo(e);
		validarTerminos(e);
	}

	formulario.addEventListener('submit', validarForm);
// }())