<?php

//php encargado de obtener todas las loterias 
//para ellos  es necesario importar nuestro modelo
//llamado loteria

	include_once ("lib/loteria.php");

	//crear una instancia de un loteria.
	$loteria = new loteria();

	//mediante la instancia de usuario realiza una peticion
	//de los usuarios
	$result= $loteria->getLoterias();

	// Iniciamos creando  la parte superios de la tabla
	$html= "<tr>
				<td style='color: rgb(104, 223, 240); font-size: 18px;'>Loterias </td>
				
				
			</tr>";

	// con este foreach se recorren las filas retornadas
	// con las consulta de las loterias

	foreach ($result as $row ) {
		
			$html.="<tr>";
			$html.="<td>".$row["nombre"]."</td>";
			$html.="</tr>";
		}
		
		
	
	echo $html;


?>
