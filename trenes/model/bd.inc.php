<?php	


/*
*	Conexión a la base de datos
*	E:
*	S: conn (variable de tipo connection)
*	SQL:
*/
function connection() {

return true;

}

/*
*	Comprueba login
*	E:
*	S: la contraseña concuerda con la de la bbdd devuelve true
*	SQL: SELECT * FROM usuarios WHERE  contrasena = $password;
*/
function login_ok()	{
		
	return true;		
	
}



/*
*	Función para terminar la sesión
*	E:
*	S:
*	SQL:
*/
function unset_session() {

	unset($_SESSION['user']);
	unset($_SESSION['admin']);

}


/*
*	Función que filtra los trayectos de la bbdd.
*	E:
*	S: Array de 2 dimensiones
*	SQL: SELECT * FROM trayectos where origen = '$_POST['ciudad_origen'] and destino = '$_POST['ciudad_destino']';
*/
function buscar_billetes_bbdd() {

	return true;

}


/*
*	Función que actualiza el campo del precio en la base de datos
*	E:
*	S:
*	SQL: UPDATE trayectos SET precio = precio + $_POST['casillemail2f'];
*/
function add_precio_billete() {

	return true;

}

/*
*	Función que actualiza el precio de los billetes en la BBDD
*	E:
*	S:
*	SQL: UPDATE trayectos SET precio = '$variable' where id_trayecto = '$variable';
*/
function cambiar_precio_bbdd() {

	return true;

}
?>