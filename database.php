<?php
	//credenciales de conexiòn a BD
	//acceder a 127.0.0.1/market/database.php .. para efecto de prueba
	$username = "root";
	$servername = "localhost"; //ò  127.0.01
	$password = "";
	$dbname = "market";
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	
	if ($conn->connect_error){ //si la conección tiene un error..
			die("Error: ". $conn->connect_error);
	}else {
			//die ("Conexiòn Existosa a Market");
	}	
?>