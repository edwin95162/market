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


<?php

?>