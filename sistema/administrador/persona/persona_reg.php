<?php
	session_start();
	if(isset($_SESSION['persona'])){
?>

<form id="form_persona_reg" name="form_persona_reg" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Registro de Persona</span> 
		</div>
		
		
		<div class="panel-body">
						
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
				<input type="text" name="txtnombre" id="txtnombre" class="form-control" placeholder="Ingrese su Nombre">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Ape.Paterno</span></span>
				<input type="text" name="txtape_paterno" id="txtape_paterno" class="form-control" placeholder="Ingrese su Apellido Paterno">
			</div>
                        <br>
                        <div class="input-group">
				
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Ape.Materno </span></span>
				<input type="text" name="txtape_materno" id="txtape_materno" class="form-control" placeholder="Ingrese su Apellido Matenro">
			</div>
                        
			<br>
			<div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Sexo&nbsp&nbsp&nbsp </span></span>
				<select id="cbosexo" name="cbosexo" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
					<option value="Masculino"> Masculino</option>								
					<option value="Femenino"> Femenino</option>
				</select>
				
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;DNI&nbsp&nbsp&nbsp</span></span>
				<input type="text" name="txtdni" id="txtdni" class="form-control" maxlength="8" placeholder="Ingrese número de DNI" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-earphone" aria-hidden="true">&nbsp;Telefono&nbsp</span></span>
				<input type="text" name="txttelefono" id="txttelefono" class="form-control" maxlength="15" placeholder="Ingrese su número de Telefono" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Direccion&nbsp</span></span>
				<input type="text" name="txtdireccion" id="txtdireccion" class="form-control" placeholder="Ingrese su Direccion">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;Email&nbsp</span></span>
				<input type="text" name="txtcorreo" id="txtcorreo" class="form-control" placeholder="Ingrese su correo electronico">
			</div>
			<br>
						
				<button type="button" onclick="persona_reg();" class="btn btn-primary" ><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Guardar</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span></button>
			
						
		</div>
		
	</div>

</form>

<?php
 
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

