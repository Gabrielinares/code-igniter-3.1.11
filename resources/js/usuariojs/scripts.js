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

function delete_ajax(id){
	$.ajax({
		url: 'usuario/eliminarRegistro',
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

$(document).ready( () =>{

	$('#dataTable').DataTable();

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
	});

})
