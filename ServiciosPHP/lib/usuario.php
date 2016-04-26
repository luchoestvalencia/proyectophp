<?php


include  'lib/db_connect.php';
class Usuario 
{
	private $nombre;
	private $username;
	private $pass;	
	private $onLine;
	private $tipo;
	private $last_connection;

	/**
	*Constructor del modelo
	*/
	function Usuario()
	{
		
	}

	function getData(){
		return $this->nombre." : ".$this->username." : ".$this->username;
	}

	/*
	*Obtiene todos los usuario que son empleados
	*/
	function getUsers(){
		include 'lib/db_connect.php';
		$query = "SELECT * from users WHERE tipo = 1";
		$result = $conexion->query($query);
		
		return $result ;
	}


	/*
	Metodo necargado de realizar la consulta a la base de datos para verificar que el usuario se encuentra registrado 
	*/
	function realizarLogin($username, $pass)
	{

		$this->username=$username;
		$this->pass=$pass;
		try{
			 include 'lib/db_connect.php';

			 $query="SELECT * FROM users WHERE username = ? AND pass = ? ";	
			 echo $query;
			 $stmt = $conexion->prepare($query);
			 $stmt->bindParam(1,$this->username);
			 $stmt->bindParam(2,$this->pass);

			if($stmt->execute())
			{
				echo "Logueadooooo";

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

	function realizarLogin2($username, $password)
	{

		 include 'lib/db_connect.php';

		$respuesta= $this->query("SELECT * FROM users WHERE username = '$username' AND pass= '$password'");

		print $respuesta->errorCode();
				print_r( $respuesta->errorInfo());
		return $respuesta;
	}

	// registra un usuario en la base de datos, esta funcionalidad
	// posee un problema de inyeccion de codigo, el cual podemos 
	//validar ingresando codigo HTML dentro de los campos de registros
	// en el html

	function registrarUsuarioEmpleado($nombre, $username, $pass)
	{
		$this->nombre =$nombre;
		$this->username =$username;
		$this->pass =$pass;

		try{
			include 'lib/db_connect.php';

			$query= "INSERT INTO users SET nombre = ?, username = ?, pass = ? , onLine = ? , tipo = ? ,last_connection = ? ";
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


	function registrarAdmin($nombre, $username, $pass)
	{
	    $this->nombre =$nombre;
		$this->username =$username;
		$this->pass =$pass;

		try{
			include 'lib/db_connect.php';

			$query= "INSERT INTO users SET nombre = ?, username = ?, pass = ? , onLine = ? , tipo = ? ,last_connection = ? ";
			echo $query;
			//conexion= PDOObject

			$stmt = $conexion->prepare($query);
			$fecha = date("Y-m-d",time());
			$online1= 0;
			$tipoA= 2; 

			$stmt->bindParam(1,$this->nombre);
			$stmt->bindParam(2,$this->username);
			$stmt->bindParam(3,$this->pass);
			$stmt->bindParam(4,$online1);
			$stmt->bindParam(5,$tipoA);
			$stmt->bindParam(6,$fecha);

			//Execute the query
			if($stmt->execute())
			{
				echo "Guardo Administrador";

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