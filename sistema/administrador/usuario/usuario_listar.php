<?php
	session_start();
	if(isset($_SESSION['persona'])){
            
            
            require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$query = "select  * FROM V_ACCESO";
	
	$result = mysql_query($query, $cnn) or die("Error en la conexion");
	$cantidad = is_resource($result) ? mysql_num_rows($result) : 0;
	if($cantidad>0){
?>

<form id="form_usuario_listar" name="form_usuario_listar" class="form-vertical">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Usuarios Registrados Actualmente</span> 
		</div>
		
		
		<div class="panel-body">
	<table class="table table-striped table-hover">	
	  <tr>
			
		<td>USUARIO</td>
		<td>NOMBRE</td>		
		<td>ULTIMO ACCESO</td>
                <td>IP DE ACCESO</td>
                <td>FECHA DE ALTA</td>
		<td>FECHA DE VIGENCIA</td>		
		
		
	  </tr>
	  <?php while ($row = mysql_fetch_array($result)) { ?>		
		  <tr>
				<td><h5><?php echo $row[0]; ?></h5></td>
				<td><h5><?php echo $row[1]; ?></h5></td>
				<td><h5><?php echo $row[2]; ?></h5></td>
				<td><h5><?php echo $row[3]; ?></h5></td>
                                <td><h5><?php echo $row[4]; ?></h5></td>
                                <td><h5><?php echo $row[4]; ?></h5></td>
                               		
		  </tr>				
	  <?php } ?>
                
	</table>
						
		</div>
		
	</div>

</form>
<?php
        }
 }else{
	header('Location: ../../../index.php'); 
}
 ?>

