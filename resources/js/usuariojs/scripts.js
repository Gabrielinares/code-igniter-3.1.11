$(document).ready( () =>{

	$('#cargarForm').click( function(){
		//Agregar titulo al modal
		$('#modal-title').text('Registrar usuarios');
		//Cargar form al modal
		$('#loadForm').load('usuario/loadFormAdd');
	})

	$('.btnEditar').click( function(){
		//Agregar titulo al modal
		$('#modal-title').text('Editar usuarios');
		//Cargar form al modal
		id =$(this).attr('data-id');
		$('#loadForm').load('usuario/loadFormEdit/'+ id);
	})
})
