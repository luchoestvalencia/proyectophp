
<?php
//error_reporting(E_ALL);

// esta seccion recolectara los datos de los usuarios.
// para ellos es necesario importar nuestro modelo llamado usuario


include_once("lib/usuario.php");


// verificamos que los parametros de registro de un usuario sean enviados por  metodo get
if($_GET)
{
	/*
	*se obtienen dichos valores
	*/

	$name= $_GET["nombre"];
	$user = $_GET["username"];
	$password = $_GET["pass"];

	$contra= md5($password);



	//creamos una instancia de la clase usuario.

	$usuario = new Usuario();
	//se imprime el resultado de registrar un usuario

	echo $usuario->registrarUsuarioEmpleado($name, $user, $contra);

}
else die("usuario no registrado");

?>
