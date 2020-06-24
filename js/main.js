//redirect 
$(buscar_datos());


function buscar_datos(consulta){
	$.ajax({
		url: 'App/controllers/search_students_controller.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta:consulta},


	})
	.done( function(respuesta){
		$("#datos").html(respuesta);
		console.log("succes");
	})	
	.fail(function(){
		
		console.log("error");
	})


}



$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}
	else{
		buscar_datos();
	}
})
