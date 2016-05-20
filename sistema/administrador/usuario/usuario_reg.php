<?php
	session_start();
	if(isset($_SESSION['persona'])){
?>

<form id="form_usuario_reg" name="form_usuario_reg" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Registro de Usuario</span> 
		</div>
		
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbspUsuario&nbsp;</span></span>
				<input type="text" name="txtuser" id="txtuser" class="form-control" placeholder="Ingrese nombre de Usuario">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk" aria-hidden="true">&nbsp;Contraseña</span></span>
				<input type="password" name="txtcontrasena" id="txtcontrasena" class="form-control" placeholder="Ingrese Contraseña">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Pregunta&nbsp; </span></span>
				<select id="cbpregunta" name="cbpregunta" class="form-control" >
				    <option value="Seleccionar"> Seleccionar</option>
					<option value="Nombre de tu mam&aacute;">Nombre de tu mamá</option>
					<option value="Color favorito"> Color favorito</option>								
					<option value="Nombre de tu mascota"> Nombre de tu mascota</option> 
				
				</select>
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Respuesta&nbsp;</span></span>
				<input type="text" name="txtrespuesta" id="txtrespuesta" class="form-control" placeholder="Ingrese su Respuesta">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;Fecha Activación</span></span>
				<input type="date" name="txtfecact" id="txtfecact" class="form-control"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;Fecha Cancelación</span></span>
				<input type="date" name="txtfeccan" id="txtfeccan" class="form-control" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
			</div>
			<br>
		<div class="input-group">							 

				<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbspTipo Cuenta</span></span>
				<select id="cbotipo" name="cbotipo" class="form-control">
					<option value="Seleccionar"> Seleccionar</option>
					<option value="1"> Administrador</option>								
					<option value="2"> Cliente</option>								
					<option value="3"> Asistente</option>								

				</select>
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbspEmpleado&nbsp;</span></span>
				<input type="text" name="txtempleado" id="txtempleado" class="form-control" placeholder="Ingrese empleado">
			</div>
			<br>
				
            <div class="input-group">					
				<button type="button" onclick="usuario_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span></button>
			
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span></button>
			
			</div>
						
		</div>
		
	</div>

</form>
<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

