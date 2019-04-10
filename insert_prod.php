<?php
	
	include ("database.php");
	
	$nombre = $_POST["nomprod"];
	$codigo = $_POST["codprod"];
	$cantidad = $_POST["cantprod"];
	$estado = $_POST["estprod"];
	
	$sql = "insert into productos (nombre_prod, codigo_prod,cantidad_prod,estado_prod) values ('$nombre','$codigo',$cantidad,$estado)";
	
	if($conn->query($sql) ===TRUE){
		echo "Producto registrado con éxito<br>";
		echo "<a href='index.php'>Regresar</a>";
	}else{
		die ("Error: ". $conn->error);
	}
?>