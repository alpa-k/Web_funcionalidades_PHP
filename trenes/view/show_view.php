<?php

/*
*	Muestra el menú de Inicio segun la sesion del usuario
*	E:
*	S:
*	SQL:
*/
function show_menu() {

	
	if (isset($_SESSION['user'])) {

		echo '<header>

			

			<nav class="menu_normal">

			  <ul>
				<li><a href="index.php?cmd=billetes" class="btn">Comprar Billetes</a></li>
				<li><a href="index.php?cmd=logout" class="btn">Cerrar sesión</a></li>
			  </ul>
			</nav>
		   </header>';

	} elseif (isset($_SESSION['admin'])) {

		echo '<header>

			

			<nav class="menu">

			  <ul>
				<li><a href="index.php?cmd=recorridos" class="btn">Recorridos</a></li>
				<li><a href="index.php?cmd=subida_precio" class="btn">Subir Precio</a></li>
				<li><a href="index.php?cmd=copiaSeguridad" class="btn">Backup</a></li>
				<li><a href="index.php?cmd=logout" class="btn">Cerrar sesión</a></li>
			  </ul>
			</nav>
		   </header>';


	}
	
	

}



/*
*	Muestra la ventana de compra de un billete de tren
*	E:
*	S:
*	SQL:
*/
function show_cambiar_precio() {

	echo '

	<section id="ajustes">
  
		<form action="" method="post">
  
		  <label for="email"> Cambiar precio billete: </label>	</br></br>
			  <input type="number" id="email" name="casillaemail" placeholder="300€" required></br></br>
			
   				</br>
  
		  <button type="submit" name="cambiar_precio" >Cambiar</button></br></br>
  
	  </form>
  
	</section>
  
  ';

}

/*
*	Muestra el panel para anadir un billete de tren
*	E:
*	S:
*	SQL:
*/
function show_subida_precio_billete() {

	echo '

	<section id="ajustes">
  
		<form action="" method="post">
  
			<label for="email2"> Subir precio billetes : </label>	</br></br>
			  <input type="number" id="email2" name="casillemail2f" placeholder="20%" required></br></br>		  
			  
   				</br>
  
		  <button type="submit" name="subida_precio" >Añadir Billete</button></br></br>
  
	  </form>
  
	</section>
  
  ';

}



/*
*	Muestra el panel de inicio de sesion
*	E:
*	S:
*	SQL:
*/
function show_loging() {

	echo '


		<section id="slider">
			<form action="index.php" method="post" role="form">

					<h2> Compañía Estatal de Ferrocarriles </h2>

					<input id="pass" type="password" name="pass_user" placeholder="contraseña" required="" ><br><br>
	   				<button type="submit" name="login"> Acceder </button><br><br>

			</form>
		</section>';
}

/*
* 
* E: Muestra el tablon de billetes disponibles en la WEB de Ferrocariles
* S
* SQL:
*/
function show_billetes() { //show_trayectos

echo '

	<section id="chats">


	<form action="index.php" method="post" role="form">

                    <div id="contenedor">
                    
			
					
					</br>
			
					<label for="email"> Origen: </label>	
						<select name="ciudad_origen" required>
						  
							<option selected></option>
							<option>Gualate</option>
							<option>Cuzco</option>
							<option>Domyos</option>
							<option>Keyua</option>

				  
						</select></br></br>
						  
					<label for="email"> Destino: </label>	

						<select  name="ciudad_destino" required>

							<option selected></option>
							<option>Gualate</option>
							<option>Cuzco</option>
							<option>Domyos</option>
							<option>Keyua</option>

						</select></br></br>

					<label for="email"> Ida: </label><input type="radio" name="check" value="1" id="ida" checked></br></br>
					<label for="email"> Ida y vuelta: <input type="radio" name="check" value="1" id="vuelta" >
					<label>descuento: (20% )</label></br>
						
					 

					</br></br>

                        
					</div></br>
					
					<button type="submit" name="buscar_billetes" >Buscar</button>
					
					</br></br></br><hr>
					


	  <h3>

		Origen	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Destino	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Horario	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		KM		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		Precio 
	  
	  </h3>

		<p>
		Gualate		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Cuzco		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		09:16		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		750km		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="index.php?cmd=selecBillete">300€</a>
		</p>

	  <br><hr><br>

	  <h3>

		Origen	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Destino	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Horario	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		KM		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		Precio 
	  
	  </h3>

		<p>
		Gualate		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Cuzco		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		10:30		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		750km		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="index.php?cmd=selecBillete">450€</a>
		</p>

	  <br><hr><br>

	  <h3>

		Origen	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Destino	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Horario	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		KM		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		Precio 
	  
	  </h3>

		<p>
		Gualate		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Domyos		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		13:45		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		500km		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="index.php?cmd=selecBillete">200€</a>
		</p>

	  <br><hr><br>

	  
	</section>


';
}

/*
*	Muestra un mensaje de tipo alert
*	E: $msg (mensaje que se quiere mostrar en alert)
*	S:
*	SQL:
*/
function show_msg($msg)
{
	echo "<script type='text/javascript'>alert('".$msg."');</script>";
}



/*
* 
* E: Muestra la ventana de backup del Administrador
* S
* SQL:
*/
function show_backup() {
	echo '

  <section id="ajustes">

	


		<form action="" method="post">
  
		<label for="email"> Nombre fichero: </label>	</br></br>
			<input type="text" id="email" name="casillaemail" placeholder="nombre con el que lo quiere guardar" required></br></br>

   				</br>

		<button type="submit" name="btn_backup" > Aceptar </button></br></br>
  
	  </form>

  </section>

';
}
	

/*
* Muestra la ventana con todos los recorridos de los trenes a los usuarios Administradores
* E: 
* S:
* SQL: SELECT * FROM trayectos;
*/
function show_recorridos_trenes() {


	echo '

	<section id="chats">


	  <h3>Clase	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Salida	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Llegada &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Precio </h3>

		<p>
		Turista		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		06:20		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		09:16		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="index.php?cmd=respuestas">300€</a>
		</p>

	  <br><hr><br>

	  <h3>Clase	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Salida	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Llegada &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Precio </h3>

		<p>
		Turista		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		11:20		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		13:30		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="index.php?cmd=respuestas">450€</a>
		</p>

	  <br><hr><br>

	  <h3>Clase	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Salida	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Llegada &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Precio </h3>

		<p>
		Primera		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		10:00		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		12:25		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="index.php?cmd=respuestas">700€</a>
		</p>

	  <br><hr><br>

	  
	</section>


';


}


/*
*	Muestra la ventana del billete impreso
*	E:
*	S:
*	SQL:
*/
function show_billete_impreso() {

	echo '

	<section id="chats">
  
	<h3>

		Fecha Emision	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		Origen			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		Destino 		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		Precio			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Horario			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	</h3>

	<p>
		02/06/2020		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Cuzco			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Kechua			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		450€			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		11:42			
	</p>

  	<br><hr><br>
  
	<button type="submit" name="btn_imprimir" ><a href="index.php?cmd=btn_imprimir"> Imprimir </a></button> </br></br>
  
	  </form>
  
	</section>
  
  ';
}

?>
