<html>
	<head>
		<title>MARKET</title>
	</head>
	
	<body>
	
	<form name="form1" action="insert_prod.php" method="POST">
	 <table align= "center">
		<h1 align="center">MARKET</h1>
		
		<tr>
			<td>Código Producto:<font face="Arial" size="5" color="#FF0000">*</td>
			<td><input type="text" name="codprod" maxlength="50" required></td>
		</tr>
		
		<tr>
			<td>Nombre Producto:<font face="Arial" size="5" color="#FF0000">*</td>
			<td><input type="text" name="nomprod" maxlength="50" required></td>
		</tr>
		<tr>
			<td>Cantidad Producto:<font face="Arial" size="5" color="#FF0000">*</td>
			<td><input type="text" name="cantprod" maxlength="50" required></td>
		</tr>
		
		<tr>
			<td>Estado Producto <font face="Arial" size="5" color="#FF0000">*</td>
			<td align="left">
			<SELECT NAME="estprod" size=1 onChange="javascript:alert('Confirmar');"> 
	<OPTION VALUE="1">Habilitado</OPTION>
	<OPTION VALUE="0">Deshabilitado</OPTION>
			</SELECT> 
			</td>
		</tr> 
		
	
	   <td colspan="2" align ="center"><br> <center><input type ="submit" value="CALCULAR"></center> </td>
		
	 </table>
	 </form>
	 <hr>
	 </body>
</html>


 <table border = 1 align = "center">
	<tr><th>CÒDIGO</th><th>NOMBRE</th><th>CANTIDAD</th>
	<th>:</th><th>::</th></tr>



<?php
	//1.Conexiòn a BD
	include ("database.php");
	
	//2.Crear SQL y ejecuta SQL
	$sql = "SELECT * FROM productos"; //consulta
	$result = $conn->query($sql); // presionar f5
	
	//3. Mostrar Informaciòn
	if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){ //Crea vector, y Recorre tabla productos
				echo "<tr>";	//crea nueva fila en la <tabla> 
				echo "<td>".$row["codigo_prod"]."</td>";
				echo "<td>".$row["nombre_prod"]."</td>";
				echo "<td>".$row["cantidad_prod"]."</td>";
				echo "<td><img src='icons/edit.png'
				width='20'></td>";
				echo "<td><a href='delete_product.php?cod=".$row["codigo_prod"]."'><img src='icons/delete.png' 
				width='20'><a></td>"; //despues de  ?parametros para eliminar
				echo "</tr>";
			}		
	}else{ //si es igual a cero 
	echo "<table align = center>";
		echo "::: No hay Productos Registrados :::";
	echo"</table>";
	}	
	
?>

















