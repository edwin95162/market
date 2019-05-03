<?php
	$codigo = $_GET['cod']; // recibe el codigo a eliminar
	
	//1. Conectar a base de datos
	include ("database.php");
	//2. Create SQL de eliminaciòn
	$sql = "DELETE FROM productos WHERE codigo_prod = '$codigo'"; // elimina letras y nùmeros
	//3.Ejecuta SQL
	$conn->query($sql);
	//4. Confirma transacciòn
		echo "<script language='javascript'>
		alert('::: Producto Eliminado con exito :::')</script>"; //mensaje emergente
		header ("Refresh:0;url=index.php"); //redirecciona a la pagina pincipal







?>