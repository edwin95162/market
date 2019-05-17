<?php    
    include("database.php");

    $email=$_POST['aemail'];
	$pswd=password_hash($_POST['apswd'],PASSWORD_DEFAULT);
	
	//1. Create query
	$sql_validation1 = "SELECT * FROM usuarios WHERE email = '$email'"; 
	$sql_validation2 = "SELECT * FROM usuarios WHERE password = '$pswd'";
	//2. Execute query
	$result1=$conn->query($sql_validation1);
	$result2=$conn->query($sql_validation2);
	//3. Validation	

	if ($result1->num_rows == 0 and $result2->num_rows == 0){
		echo "<script language='javascript'>alert('DATOS INCORRECTOS')</script>";
		header("Refresh:0;url=login.php");    
	}else if ($result1->num_rows != 0 and $result2->num_rows == 0){
		echo "<script language='javascript'>alert('CONTRASEÑA INCORRECTA')</script>";
		header("Refresh:0;url=login.php");
	}else if ($result1->num_rows == 0 and $result2->num_rows != 0){
		echo "<script language='javascript'>alert('USUARIO NO ENCONTRADO')</script>";
		header("Refresh:0;url=login.php");
	}else{
		echo "<script language='javascript'>alert('Ingreso')</script>";
		header("Refresh:0;url=index.php");
	}		
?>