
<?php

//php encargado de obtener todos los usuarios 
//para ellos  es necesario importar nuestro modelo
//llamado usuario

	include_once ("lib/usuario.php");

	//crear una instancia de un usuario.
	$usuario = new usuario();

	//mediante la instancia de usuario realiza una peticion
	//de los usuarios
	$result= $usuario->getUsers();

	// Iniciamos creando  la parte superios de la tabla
	$html= "<tr>
				<td>Nombre</td>
				<td>Estado</td>
				<td>Acción</td>
				
			</tr>";

	// con este foreach se recorren las filas retornadas
	// con las consulta de los usuarios

	foreach ($result as $row ) {
		if($row["onLine"] == 1 )
		{
			$html.="<tr>";
			$html.="<td>".$row["nombre"]."</td>";
			$html.="<td><img class = 'line' src='images/Verde.png'></td>";
			$html.="<td>
						<select id='listaAccion' name='listaAccion' class='combo'>
							<option>Seleccione</option>
							<option>Enviar Mensaje </option>
							<option>Bloquear</option>
							<option>Ver ventas de chances</option>					
						</select>
				</td>";
			$html.="</tr>";
		}
		else
		{
			$html.="<tr>";
			$html.="<td>".$row["nombre"]."</td>";
			$html.="<td><img class = 'line' src='images/Rojo.png'></td>";
			$html.="<td>
						<select id='listaAccion' name='listaAccion' class='combo'>
							<option>Seleccione</option>
							<option>Enviar Mensaje </option>
							<option>Bloquear</option>
							<option>Ver ventas de chances</option>					
						</select>
				</td>";
			$html.="</tr>";	
		}
		
	}
	echo $html;


?>
