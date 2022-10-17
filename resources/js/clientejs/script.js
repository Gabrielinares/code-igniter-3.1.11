function send_data_controller(frm, action){
	$.ajax({
		url: action,
		type: 'POST',
		dataType: 'json',
		data: frm.serializeArray(),
	})
		.done( function (data)  {
			//alert(data.msj);
			Swal.fire({
				position: 'top-center',
				icon: 'success',
				title: data.msj,
				showConfirmButton: false,
				timer: 3000
			})
			$('.bd-example-modal-lg').modal('hide');
			get_table_by_ajax();
		})
		.fail(function (data) {
			console.log(data);
		});
}

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

function delete_ajax(id){
	$.ajax({
		url: 'cliente/eliminarRegistro',
		type: 'POST',
		dataType: 'json',
		data: {idUser : id}
	})
		.done(function (data){
			Swal.fire(
				'Eliminado',
				data.msj,
				'success'
			);
			get_table_by_ajax();
		})
		.fail(function (){
			console.log("Error")
;		});
}

	$('#cargarForm').click( function(){
		//Agregar titulo al modal
		$('#modal-title').text('Registrar Cliente');
		//Cargar form al modal
		$('#loadForm').load('cliente/loadFormAdd');
	});






	$(document).on('click', '.btnEditar', function (event) {
		//Agregar titulo al modal
		$('#modal-title').text('Editar clientes');
		//Cargar form al modal
		id =$(this).attr('data-id');
		$('#loadForm').load('cliente/loadFormEdit/'+ id);
	});


		$(document).on('submit', '#frmAddCliente', function (event) {
		event.preventDefault();
		frm = $(this);
		act = $(this).attr('action');
		send_data_controller(frm, act);
	});



	$(document).on('submit', '#frmEditCliente', function (event) {
		event.preventDefault();
		frm = $(this);
		act = $(this).attr('action');
		send_data_controller(frm, act);
	});

	$(document).on('click', '.btnEliminar', function (event) {
		id =$(this).attr('data-id');
		Swal.fire({
			title: 'Seguro que desea eliminar',
			text: "No podra recuperar los registros",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, eliminar'
		}).then((result) => {
			if (result.isConfirmed) {
				delete_ajax(id);
			}
		})
		console.log("Si");
		get_table_by_ajax();
	});

	
})