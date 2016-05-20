<?php
function conectar(){
	$servidor 	="localhost";
	$db 		= "restaurant";
	$usuario 	= "root";
	$clave		="";
	
	$cnn = mysql_connect($servidor, $usuario, $clave) or die("Error en la conexion");
	mysql_select_db($db, $cnn);
	//
	mysql_query ("SET NAMES 'utf8'");
	return $cnn;	
}
function desconectar($co){
	mysql_close($co);
}
?>