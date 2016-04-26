
<?php


	$host = "localhost";
	$password = "luisa214";
	$user_db ="root";
	$db_name="TuChance";

	try{
		$conexion = new PDO("mysql:host={$host};dbname={$db_name}", $user_db, $password);
	}
	catch(PDOException $exception){
		echo "connection error: " . $exception->getMessage;
	}

?>