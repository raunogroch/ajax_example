$(document).on('change', '.countries', function(){
	option_selected($('.countries').val(), "POST");
});

function option_selected(id, method){
	var data = {
		id: id,
	}

	$.ajax({
		url: 'cargar_nuevo.php',
		method : method,
		data: data,
		success: function(respuesta) {
			$(".submenu").html(respuesta);
		},
		error: function() {
	        console.log("No se ha podido obtener la información");
	    }
	});
}