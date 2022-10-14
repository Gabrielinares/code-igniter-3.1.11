function get_table_by_ajax(){
	$.ajax({
		url: 'cliente/get_table',
		type: 'POST',
		dataType: 'json',
		data: {get: true},
	})
		.done(function(data) {
			$('#construirTabla').empty().html(data.tabla);
		})
		.fail(function() {
			console.log('Error');
		});

}

$(document).ready( function () {
	get_table_by_ajax();
})
