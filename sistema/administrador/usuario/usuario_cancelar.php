<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	session_start();
        //$_SESSION['intentos']=0;
	require_once("../../../conexion/conexion.php");
	$cnn=conectar();
        $usuario=$_POST["usuario"];
        $count=count($usuario);
        
        $query1 = "select  estado  FROM usuario where Usuario = '$usuario[0]' ";
        
        $result = mysql_query($query1, $cnn) or die("Error en la conexion");
        $row = mysql_fetch_array($result);
        
        if($row[0]== 1 ){
             for($i=0;$i<$count;$i++){
           
	$query = "UPDATE `usuario` SET `Estado`='2' WHERE `Usuario`='$usuario[$i]'";
        mysql_query($query,$cnn) or die(mysql_errno());       
        }
       echo"<script type=\"text/javascript\">alert('Usted realizo la operacion correctamente'); window.location='../index.php';</script>" ;
        }  else {
           
             for($i=0;$i<$count;$i++){
           
	$query2 = "UPDATE `usuario` SET `Estado`='1' WHERE `Usuario`='$usuario[$i]'";
        mysql_query($query2,$cnn) or die(mysql_errno());       
        }
       echo"<script type=\"text/javascript\">alert('Usted realizo la operacion correctamente'); window.location='../index.php';</script>" ;
        }
       
}
?>
	

