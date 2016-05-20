<?php
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	$idusuario		= $_POST['idusuario'];
	$usuario 		= $_POST['usuario'];
	$contrasena		= $_POST['contrasena'];	
	$nombre 		= $_POST['nombre'];
	$ape_paterno 	= $_POST['ape_paterno'];	
	$ape_materno 	= $_POST['ape_materno'];
	$sexo 			= $_POST['sexo'];	
	$tipocuenta		= $_POST['tipo_cuenta'];
	$dni 			= $_POST['dni'];	
	$telefono 		= $_POST['telefono'];	
	$direccion 		= $_POST['direccion'];
	$email 			= $_POST['email'];
		
	
	$query = "update persona set Nombre='$nombre',Ape_Paterno='$ape_paterno',Ape_Materno='$ape_materno',DNI='$dni',Email='$email',Direccion='$direccion',Telefono='$telefono',Sexo='$sexo' where Id_Persona=$idusuario";
	mysql_query($query, $cnn) or die("Error en la conexion");
	
	 $query1 = "update usuario set Usuario='$usuario',Contrasena='$contrasena',Tipo_Cuenta='$tipocuenta' where Id_Usuario=$idusuario";
	mysql_query($query1, $cnn) ;
	echo "OK";
	
	
	
	
	

}else{
	header('Location: ../../index.php'); 
}
?>