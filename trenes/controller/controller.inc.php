<?php

/*
*	Muestra el contenido de la parte central de la página
*	E:
*	S:
*	SQL:
*/
function show_content() {
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {	// GET
		if (!isset($_GET['cmd'])){				// carga inicial de la página
			show_loging();
	
		}
		else {

			switch ($_GET['cmd']) {
				case 'start':
					show_loging();
					break;

				case 'billetes':
					show_billetes();
					break;

				case 'recorridos':
					show_recorridos_trenes();
					break;
	
				case 'logout':
					show_loging();
					break;
					
				case 'copiaSeguridad';
					show_backup();
					break;
					
				case 'respuestas';
					show_cambiar_precio();
					break;

				case 'subida_precio':
					show_subida_precio_billete();
					break;

				case 'selecBillete';
					show_billete_impreso(); 
					break;

				case 'btn_imprimir':
					imprimir_billete();
					show_msg("Billete impreso");
					show_billetes();
					break;


				default:
					"error de conexión";
					break;
			}

		}
	}
	else {										// POST
		if (isset($_POST['login'])) {

			if (login_ok()) {
				

				if (isset($_SESSION['admin'])) {

					show_recorridos_trenes();
			
				} elseif (isset($_SESSION['user'])) {
			
					show_billetes();
			
				}

			} else {
				
				show_msg("Error en la autentificación");
				show_loging();
			}
			
		}
		
		
		if (isset($_POST['subida_precio'])) {
			
				
			if (add_precio_billete()) {

				show_msg("Se han subido todos los precios correctamente.");
				show_subida_precio_billete();

			}
		}


		
		if (isset($_POST['btn_backup'])) {
				
			if (guardar_fichero_backup()) {
			
				show_msg("Se ha generado una copia de seguridad");
				show_backup();

			}

		}


		if (isset($_POST['buscar_billetes'])) { //buscar_trayectos
			
			show_billetes(buscar_billetes_bbdd());

		}

		
		if (isset($_POST['cambiar_precio'])) {
			
			if (cambiar_precio_bbdd()) {
			
				show_msg("Se ha cambiado el precio del billete");
				show_recorridos_trenes();

			}	

		}

	}
}

/*
* Realiza algunas acciones según esté la sesión abierta o no
* E: Mantendra un login ok guardando la variable de la contrasena del ususario  
* S: Seguira con el login ok o destruira la sesion y la cerrara
* SQL:
*/
function actualizar_sesion() {
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if (isset($_POST['login'])) {

			if (login_ok()) {


				if ($_POST['pass_user'] == '4') {

					$_SESSION['admin'] = $_POST['pass_user'];

				}else {

					$_SESSION['user'] = $_POST['pass_user'];
					
				}
				
				/*if ($_POST['pass_user'] == '4') {

					$_SESSION['user'] = $_POST['pass_user'];

				}*/
				
				
			}

		}

	} else {

		if (isset($_GET['cmd'])) {

			if  ($_GET['cmd'] == 'logout') {

				unset($_SESSION);
				session_destroy();
			}

		}
	}
}

/*
* Función que guarda el fichero backup con el nombre que quiera el administrador 
* E: 
* S: 
* SQL: SELECT * FROM trayectos;
*/
function guardar_fichero_backup() {


	return true;

}


/*
* Función que imprime el billete solicitado por el vendedor de taquilla 
* E: 
* S: 
* SQL: 
*/
function imprimir_billete() {


	return true;

}

?>