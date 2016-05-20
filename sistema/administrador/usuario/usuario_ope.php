<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$usuario 		= $_POST['usuario'];
	$contrasena		= $_POST['contrasena'];	
	$pregunta 		= $_POST['pregunta'];
	$respuesta   	= $_POST['respuesta'];	
	$fecact 	    = $_POST['fecact'];
	$feccan 		= $_POST['feccan'];	
	$cbotipo		= $_POST['cbotipo'];
	$empleado 		= $_POST['empleado'];	
	
	$sql2 = "INSERT INTO `USUARIO`(`USUARIO`, `CONTRASENA`, `PREGUNTA`, `RESPUESTA`, `USUARIO_FECACTI`, `USUARIO_FECCAN`, `IDTIPOCUENTA`, `ID_PERSONA`, `ESTADO`) VALUES ('$usuario',md5('$contrasena'),'$pregunta',md5('$respuesta'),'$fecact','$feccan',$cbotipo,$empleado,'1') ";	
			
		$result2 = mysql_query($sql2,$cnn);	
		//echo $result2;
		if ($result2>0) {
			echo "OK";
		} else {
			echo "Error al registrar el usuario: " . $sql2 . "<br>" . mysqli_error($cnn);
		}					

}else{
	header('Location: ../../index.php'); 
}
?>