function get_table_by_ajax(){
	$.ajax({
		url: 'usuario/get_table',
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

function send_data_controller(frm, action){
	$.ajax({
		url: action,
		type: 'POST',
		dataType: 'json',
		data: frm.serializeArray(),
	})
		.done( function (data)  {
			alert(data.msj);
			$('.bd-example-modal-lg').modal('hide');
			get_table_by_ajax();
		})
		.fail(function (data) {
			console.log(data);
		});
}

$(document).ready( () =>{

	get_table_by_ajax();

	$('#cargarForm').click( function(){
		//Agregar titulo al modal
		$('#modal-title').text('Registrar usuarios');
		//Cargar form al modal
		$('#loadForm').load('usuario/loadFormAdd');
	});

	$(document).on('click', '.btnEditar', function (event) {
		//Agregar titulo al modal
		$('#modal-title').text('Editar usuarios');
		//Cargar form al modal
		id =$(this).attr('data-id');
		$('#loadForm').load('usuario/loadFormEdit/'+ id);
	});

	$(document).on('submit', '#frmAddUser', function (event) {
		event.preventDefault();
		frm = $(this);
		act = $(this).attr('action');
		send_data_controller(frm, act);
	});
	$(document).on('submit', '#frmEditUser', function (event) {
		event.preventDefault();
		frm = $(this);
		act = $(this).attr('action');
		send_data_controller(frm, act);
	});

})
