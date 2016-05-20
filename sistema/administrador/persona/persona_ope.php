<?php
   // header('Content-Type: text/html; charset=UTF-8');
	session_start();
	if(isset($_SESSION['persona'])){

	require_once("../../../conexion/conexion.php");
	$cnn = conectar();
	
	$nombre 		= $_POST['nombre'];
	$ape_paterno 	        = $_POST['ape_paterno'];	
	$ape_materno     	= $_POST['ape_materno'];
	$sexo 			= $_POST['sexo'];	
	$dni 			= $_POST['dni'];	
	$telefono 		= $_POST['telefono'];	
	$direccion 		= $_POST['direccion'];
	$email 			= $_POST['email'];
		
	
	$sql = "INSERT INTO `persona`(`Nombre`, `Ape_Paterno`, `Ape_Materno`, `DNI`, `Email`, `Direccion`, `Telefono`, `Sexo`, `Estado`) VALUES ('$nombre','$ape_paterno','$ape_materno','$dni','$email','$direccion','$telefono','$sexo','1')";	
			
		$result = mysql_query($sql,$cnn);	
		//echo $result2;
		if ($result>0) {
			echo "OK";
		} else {
			echo "Error al registrar persona: " . $sql . "<br>" . mysqli_error($cnn);
		}					

}else{
	header('Location: ../../index.php'); 
}
?>