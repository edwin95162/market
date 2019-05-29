<?php
    
    include("database.php");

    $firstname=$_POST['uname'];
    $lastname=$_POST['ulastname'];
	$gender = $_POST['gender'];
    $email=$_POST['uemail'];
	$identification =$_POST ['uide'];
	
	
	//if ($photo_url_db != ""){
	//if($photo_url_db!="jpg"||$photo_url_db!="png"){
		
		$file_name = $_FILES['photo']['name']; //'name nunca cambia, es de sistema'
		$file_type = $_FILES['photo']['type']; //trae el tipo de la foto
		$file_size = $_FILES['photo']['size']/1024; //trae el tamaño del archivo (default:KB) se divide para que sea en Megabytes
		$file_tmp = $_FILES ['photo']['tmp_name']; //el nombre de la carpeta donde se esta guardando temporalmente
		$photo_url_db = "photos/".$_FILES['photo']['name'];
	
				
	//}echo "<script language='javascript'>alert('File Fake')</script>";
	/*}else if ($gender == "M")
		$photo_url_db = "images/boy.png";
	elseif	($gender == "F")
		$photo_url_db = "images/girl.png";
	else	
		$photo_url_db = "images/img_default.png";	
	*/
	
		$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//1. Create query
	$sql_validation = "SELECT * FROM usuarios WHERE email = '$email' ";
	$sql_validation2 = "SELECT * FROM usuarios WHERE identification = '$identification' ";
	//2. Execute query
	$result=$conn->query($sql_validation);
	$result2=$conn->query($sql_validation2);
	//3. Validation
	if($result->num_rows == 0 and $result2->num_rows == 0){
		$sql="INSERT INTO usuarios (firstname, lastname,identification,email, password,photo) VALUES('$firstname','$lastname','$identification','$email','$pswd','$photo_url_db')";
		if ($conn->query($sql)===true) {
			echo "<script language='javascript'>alert('Usuario regisrado con exito')</script>";
			move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$_FILES['photo']['name']); //mueve la foto a la carpeta
			header("Refresh:0;url=login.php");    
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		echo "<script language='javascript'>alert('Usuario ya existe')</script>";
		header("Refresh:0;url=login.php");
	}	
	

?>