<?php

include  'lib/db_connect.php';
Class Loteria {

	private $nombre;

	function Loteria()
	{
		# code...
	}

	

	function getLoterias(){
		include 'lib/db_connect.php';
		$query = "SELECT * from loteria";
		$result = $conexion->query($query);
		
		return $result ;
	}


	function crearLoteria($nombre)
	{
		$this->nombre=$nombre;

		try{
			include 'lib/db_connect.php';

			$query= "INSERT INTO loteria SET nombre = ? ";
			echo $query;
			//conexion= PDOObject

			$stmt = $conexion->prepare($query);
			$stmt->bindParam(1,$this->nombre);
			

			//Execute the query
			if($stmt->execute())
			{
				echo "Loteria Registrada";

			}
			else
			{
				print $stmt->errorCode();
				print_r( $stmt->errorInfo());

			}
		}
		catch(PDOException $exception)
		{
			return "Error: " . $exception->getMessage();
		}

	}


}
?>