<?php
//error_reporting(E_ALL);

// esta seccion recolectara los datos de las loterias
// para ellos es necesario importar nuestro modelo llamado loteria


include_once("lib/loteria.php");


// verificamos que los parametros de registro de una loteria sean enviados por  metodo get
if($_GET)
{
	/*
	*se obtienen dichos valores
	*/

	$name= $_GET["nombre"];
	
	//creamos una instancia de la clase loteria.

	$loteria = new loteria();
	//se imprime el resultado de registrar una loteria

	echo $loteria->crearLoteria($name);

}
else die("Loteria no registrada");

?>
