//Validacion si la imagen es elegida o no (vacia)
//https://es.stackoverflow.com/questions/115981/como-validar-que-input-de-tipo-file-no-esta-vaci%C3%B3
$("#fileInput").change(function(){
    $("button").prop("disabled", this.files.length == 0);
});
//Validacion si la imagen tiene un peso determinado   
//https://codepen.io/kurosaki/pen/EaMvBO
$('#myFile').change( function() {
  
  if(this.files[0].size > 512000) { // 512000 bytes = 500 Kb
  		$(this).val('');
    $('#errores').html("El archivo supera el límite de peso permitido.");
  } else { //ok
     var formato = (this.files[0].name).split('.').pop();
    //alert(formato);
     	if(formato.toLowerCase() == 'jpg' || formato.toLowerCase() == 'png' || formato.toLowerCase() == 'gif') {
        	$('#errores').html("IMAGEN VALIDA, Ha pasado la prueba con éxito.");
      } else {
        $(this).val('');
        $('#errores').html("Formato no soportado");
      }
     }
});