function confirmarEstado(numeroVolqueta, categoria, estado, numero, fechaHora){
	//alert("aca");
	//alert(numeroVolqueta + ", "  + categoria + ", " + estado + ", " + fechaHora);
	/*if(fechaHora == null){
		alert("aca");
	}*/
	/*var selector = "#select" + numero;
	alert($(selector).val());*/

	//alert($('#select' + numero).val());
	if(estado != $('#select' + numero).val()){
		$.ajax({
			url : '/Volquetas/incidencia/confirmarEstado',
			type : 'POST',
			dataType : 'json',
			data : {'numeroVolqueta' : numeroVolqueta,
					'categoria' : categoria,
					'estado' : estado,
					'estadoUpdate' : $('#select' + numero).val(),
					'fechaHoraSolucion' : fechaHora},
			beforeSend: function(){
				$('#link' + numero).css('display', 'none');
				$('#spinner' + numero).css('display', 'block');
			}
		})
		.done(function(response){
			if(response['code'] == 'ok')
				window.location.href = "/Volquetas/incidencia/verTodasLasIncidencias";
		});
	}
	
}