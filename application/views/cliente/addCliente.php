<form action="cliente/agregarRegistro" method="POST" id="frmAddCliente">
	<input type="text" hidden readonly name="id" value="">
	<div class="row">
		<div class="col-lg-6">
			<label for="nombres">Nombre: </label>
			<input type="text" name="nombres" value="" class="form-control">
		</div>

		<div class="col-lg-6">
			<label for="apellidos">Apellidos: </label>
			<input type="text" name="apellidos" value="" class="form-control">
		</div>

		<div class="col-lg-6">
			<label for="direccion">Direccion: </label>
			<input type="text" name="direccion" value="" class="form-control">
		</div>

		<div class="col-lg-6">
			<label for="teleono">Telefono: </label>
			<input type="number" name="telefono" value="" class="form-control">
		</div>

			<div class="col-lg-6">
			<label for="email">Email: </label>
			<input type="text" name="email" value="" class="form-control">
		</div>
			<div class="col-lg-6">
			<label for="email">Estado: </label>
			<select name="estado" class="form-control">
				<option value="">Seleccionar rol</option>
				<option value="1">Activo</option>
				<option value="2">Inactivo</option>
			</select>
			</div>
		<br>



<div class="row">
		<div class="col-lg-6">
			<button type="submit" class="btn btn-dark btn-block">Guardar</button>
		</div>
		<div class="col-lg-6">
			<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancelar</button>
		</div>
	</div>


	
</form>
