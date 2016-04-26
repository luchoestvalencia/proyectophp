<?php

// esta seccion recolectara los datos de los usuarios registrador.
// para ellos es necesario importar nuestro modelo llamado usuario

include_once("lib/usuario.php");

echo "Hola mudnos";

// verificamos que los parametros de registro de un usuario sean enviados por  metodo get
if($_GET)
{
	/*
	*se obtienen dichos valores
	*/

	$username= $_GET["username"];
	$pass = $_GET["pass"];


	$contra= md5($pass);



	//creamos una instancia de la clase usuario.
	$usuario = new Usuario();
	//se imprime el resultado de logear un usuario

	$respuesta = $usuario->realizarLogin2($username, $contra);

	 if($respuesta != null && $respuesta->rowCount()>0)
       {
           setcookie("chsm", "logedin", time()+3600, "/");
           setcookie("name",''.$username, time()+3600, "/");
            echo "Logueado";

           header("Location: /proyectophp/index.html");

           exit;
       }else{
           echo "login fallido";
          
       }

}
else die("usuario no registrado");

?>
