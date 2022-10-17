<form action="cliente/actualizarRegistro" method="POST" id="frmEditCliente">
	<input type="text" hidden readonly name="id" value="<?= $cliente->id ?>">
	<div class="row">
		<div class="col-lg-6">
			<label for="nombres">Nombre: </label>
			<input type="text" name="nombres" value="<?= $cliente->nombres ?>" class="form-control">
		</div>

		<div class="col-lg-6">
			<label for="apellidos">Apellidos: </label>
			<input type="text" name="apellidos" value="<?= $cliente->apellidos ?>" class="form-control">
		</div>

		<div class="col-lg-6">
			<label for="direccion">Direccion: </label>
			<input type="text" name="direccion" value="<?= $cliente->direccion ?>" class="form-control">
		</div>

		<div class="col-lg-6">
			<label for="teleono">Telefono: </label>
			<input type="number" name="telefono" value="<?= $cliente->telefono ?>" class="form-control">
		</div>

			<div class="col-lg-6">
			<label for="email">Email: </label>
			<input type="text" name="email" value="<?= $cliente->email ?>" class="form-control">
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
