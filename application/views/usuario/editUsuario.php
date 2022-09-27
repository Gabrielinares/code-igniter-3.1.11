<form action="" id="frmEditUser">
	<input type="text" name="txtId" placeholder="<?= $id ?>">
	<div class="row">
		<div class="col-lg-6">
			<label for="txtUsuario">Usuario: </label>
			<input type="text" name="txtUsuario" class="form-control">
		</div>
		<div class="col-lg-6">
			<label for="txtPass">Password: </label>
			<input type="password" name="txtPass" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<select name="txtRol" class="form-control">
				<option value="">Seleccionar rol</option>
				<?php
				foreach ($rol as $value) {
					echo "<option value='".$value->id."'>".$value->nombre."</option>";
				}?>
			</select>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<button type="button" class="btn btn-dark btn-block">Guardar</button>
		</div>
		<div class="col-lg-6">
			<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancelar</button>
		</div>
	</div>
</form>
