<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idusuario= $_GET['idusuario'];	
	
	$query = "select p.Id_Persona,p.Nombre,p.Ape_Paterno,p.Ape_Materno,p.DNI,p.Email,p.Direccion,p.Telefono,p.Sexo, u.Usuario,u.Contrasena,u.idTipoCuenta from persona p,usuario u where p.Id_Persona=u.Id_Persona and u.Id_Usuario=$idusuario";
				
	$result=mysql_query($query, $cnn) or die("Error en la conexion");
	$row= mysql_fetch_array($result);
	$nombre=$row[1];
	$ape_paterno=$row[2];
	$ape_materno=$row[3];
	$dni=$row[4];
	$email=$row[5];
	$direcion=$row[6];
	$telefono=$row[7];
	$sexo=$row[8];
	$usuario=$row[9];
	$contrasena=$row[10];
	$tipocuenta=$row[11];
	
	
?>



<form id="form_usuario_reg" name="form_usuario_reg" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Modificar Usuario</span> 
		</div>
		<div class="panel-body">
			
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbspUsuario&nbsp;</span></span>
				<input type="text" name="txtuser" id="txtuser" class="form-control" value="<?php echo $usuario;  ?>">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk" aria-hidden="true">&nbsp;Contraseña</span></span>
				<input type="password" name="txtcontrasena" id="txtcontrasena" class="form-control" value="<?php echo $contrasena;  ?>">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Nombres&nbsp</span></span>
				<input type="text" name="txtnombre" id="txtnombre" class="form-control" value="<?php echo $nombre;  ?>">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Ape.Paterno</span></span>
				<input type="text" name="txtape_paterno" id="txtape_paterno" class="form-control" value="<?php echo $ape_paterno;  ?>">
			
				<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Ape.Materno </span></span>
				<input type="text" name="txtape_materno" id="txtape_materno" class="form-control" value="<?php echo $ape_materno;  ?>">
			</div>
			<br>

			<div class="input-group">							 
				<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Sexo&nbsp&nbsp&nbsp </span></span>
				<select id="cbosexo" name="cbosexo" class="form-control" >
					<option value="Seleccionar"> Seleccionar</option>
					<option value="Masculino"> Masculino</option>								
					<option value="Femenino"> Femenino</option>
				</select>
				
				<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Tipo Cuenta</span></span>
				<select id="cbotipo" name="cbotipo" class="form-control">
					<option value="Seleccionar"> Seleccionar</option>
					<option value="Administrador"> Administrador</option>								
					<option value="Cliente"> Cliente</option>								
					<option value="Asistente"> Asistente</option>								

				</select>
			</div>
			</br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;DNI&nbsp&nbsp&nbsp</span></span>
				<input type="text" name="txtdni" id="txtdni" class="form-control" maxlength="8" value="<?php echo $dni;  ?>" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-earphone" aria-hidden="true">&nbsp;Telefono&nbsp</span></span>
				<input type="text" name="txttelefono" id="txttelefono" class="form-control" maxlength="15" value="<?php echo $telefono;  ?>" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Direccion&nbsp</span></span>
				<input type="text" name="txtdireccion" id="txtdireccion" class="form-control" value="<?php echo $direcion;  ?>">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;Email&nbsp</span></span>
				<input type="text" name="txtcorreo" id="txtcorreo" class="form-control" value="<?php echo $email;  ?>">
			</div>
			<br>
			<div class="input-group">
				
				<button type="button" data-dismiss="modal" class="btn btn-primary" onclick="usuario_modificar('<?php echo $idusuario;?>');" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;Modificar</span></button>
				&nbsp;&nbsp;<button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Cerrar</span></button>
			
			</div>
		</div>
	</div>

</form>
<script>
function usuario_modificar(idusuario){
	
	var usuario	= document.form_usuario_reg.txtuser;
	if( usuario.value == "" ) {
		alert('Ingrese usuario');
		return false;
    }
	
	var contrasena	= document.form_usuario_reg.txtcontrasena;
	if(contrasena.value == ""){
		alert('Ingrese una contraseña para su usuario');
		return false;
    }
	
	var nombre	= document.form_usuario_reg.txtnombre;
	if(nombre.value == ""){
		alert('Ingrese su nombre');
		return false;
    }
	
	var ape_paterno	= document.form_usuario_reg.txtape_paterno;
	if(ape_paterno.value == ""){
		alert('Ingrese su apellido paterno');
		return false;
    }
	
	var ape_materno	= document.form_usuario_reg.txtape_materno;
	if(ape_materno.value == ""){
		alert('Ingrese su apellido materno');
		return false;
    }
	
	var sexo = document.form_usuario_reg.cbosexo;
	if(sexo.value == "Seleccionar"){
		alert('Ingrese el sexo al que pertenece');
		return false;
    }
	
	var tipo_cuenta	= document.form_usuario_reg.cbotipo;
	if(tipo_cuenta.value == "Seleccionar"){
		alert('Ingrese el tipo de cuenta');
		return false;
    }
	
	var dni	= document.form_usuario_reg.txtdni;
	if(dni.value == ""){
		alert('Ingrese DNI del usuario');
		return false;
    }
	
	var telefono	= document.form_usuario_reg.txttelefono;
	if(telefono.value == ""){
		alert('Ingrese el numero telefonico del usuario');
		return false;
    }
	
	var direccion	= document.form_usuario_reg.txtdireccion;
	if(direccion.value == ""){
		alert('Ingrese la direccion del usuario');
		return false;
    }
	
	var email	= document.form_usuario_reg.txtcorreo;
	if(email.value == ""){
		alert('Ingrese la direccion electronica del usuario');
		return false;
    }
	
	$.post('usuario/usuario_mod.php', 
		{	idusuario	:idusuario,
			usuario 	: usuario.value,
			contrasena 	: contrasena.value,
			nombre 		: nombre.value,
			ape_paterno : ape_paterno.value,
			ape_materno : ape_materno.value,
			sexo 		: sexo.value,
			tipo_cuenta : tipo_cuenta.value,
			dni 		: dni.value,
			telefono	: telefono.value,
			direccion 	: direccion.value,
			email 		: email.value
			
			
		},
		function (data){
			if(data=='OK'){	
				usuario.value		="";		
				contrasena.value	="";		
				nombre.value		="";
				ape_paterno.value	="";
				ape_materno.value	="";
				sexo.value			="Seleccionar";
				tipo_cuenta.value	="Seleccionar";
				dni.value			="";
				telefono.value		="";
				direccion.value		="";
				email.value			="";
				load_div("subcontenido", "usuario/usuario_list.php?q=");
			}
			else{
				alert(data);
			}
		}
	);
	
	
	
	
}
</script>

<?php
	}else{
	header('Location: ../../index.php'); 
}
?>

