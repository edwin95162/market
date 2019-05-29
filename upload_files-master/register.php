<?php
	include("database.php");
	
	$idnumber= $_POST['ide'];
	
	$file_name = $_FILES['photo']['name']; //'name nunca cambia, es de sistema'
	$file_type = $_FILES['photo']['type']; //trae el tipo de la foto
	$file_size = $_FILES['photo']['size']/1024; //trae el tamaño del archivo (default:KB) se divide para que sea en Megabytes
	$file_tmp = $_FILES ['photo']['tmp_name']; //el nombre de la carpeta donde se esta guardando temporalmente
	
	//echo $idnumber. "<br>".$file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp; //ver informacion

	$photo_url_db = "photos/".$_FILES['photo']['name'];
	//query
	$sql="INSERT INTO users (id_number, photo) VALUES ($idnumber, '$photo_url_db')";
	//ejecuta query
	$conn->query($sql);
	
	move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$_FILES['photo']['name']); //mueve la foto a la carpeta
	echo "<script language='javascript'>alert('User has been registered')</script>";
	header("Refresh:0;url=index.html");    
?>