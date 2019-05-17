$if(document).ready(function){
	
	$('#pwd1').keyup(function){
		
		var pass1 = $('#pwd1').val();
		var pass2 = $('#pwd2').val();
		
		if (pass1 == pass2){
			$('#error2').text('Coinciden!').css("color","green");
			}else{
				$('#error2').text('No Coinciden!').css("color","red");
			}

				if(pass2 == ""){
				$('#error2').text('Espacio en blanco').css("color","red");
			}
	});
	
});





















