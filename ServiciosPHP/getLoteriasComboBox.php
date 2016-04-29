<?php

//php encargado de obtener todas las loterias 
//para ellos  es necesario importar nuestro modelo
//llamado loteria

	include_once ("lib/loteria.php");
//if($_GET)
{
	
	//crear una instancia de un loteria.
	$loteria = new loteria();

	//mediante la instancia de usuario realiza una peticion
	//de los usuarios
	//$citra1= $_GET["citra1"];
	//$citra2 = $_GET["citra2"];
	//$citra3 = $_GET["citra3"];
	//$citra4 = $_GET["citra4"];

	$result= $loteria->getLoterias();

    //$html = $citra1.$citra2;

	// Iniciamos creando  la parte superios de la tabla
	$html= "<option>Seleccione</option>";

	// con este foreach se recorren las filas retornadas
	// con las consulta de las loterias

	foreach ($result as $row ) {		
			$html.="<option>".$row["nombre"]."</option>";
			
		}
		
		
	
	echo $html;
}

?>
