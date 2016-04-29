<?php

include  'lib/db_connect.php';
Class Apuesta extends Chance{

	private $fecha;
	private $valor;
	private $premio;

	function Apuesta()
	{
		# code...
	}

	function crearChance($numero, $loteria){
		
	}
//EN CONSTRUCCIONNNNNNNNNNNNNNNNNN
	function realizarApuesta($valor, $numero, $loteria)
	{
		$this->valor=$valor;
		$this->numero=$numero;
		$this->loteria=$loteria;

		try{
			include 'lib/db_connect.php';

			$query= "INSERT INTO apuesta SET nombre = ?, username = ?, pass = ? , onLine = ? , tipo = ? ,last_connection = ? ";
			echo $query;
			//conexion= PDOObject

			$stmt = $conexion->prepare($query);
			$fecha = date("Y-m-d",time());
			$online1= 0;
			$tipoE= 1; 

			$stmt->bindParam(1,$this->nombre);
			$stmt->bindParam(2,$this->username);
			$stmt->bindParam(3,$this->pass);
			$stmt->bindParam(4,$online1);
			$stmt->bindParam(5,$tipoE);
			$stmt->bindParam(6,$fecha);

			//Execute the query
			if($stmt->execute())
			{
				echo "Guardo Empleado";

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