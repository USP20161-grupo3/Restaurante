
<?php

function getRealIP()
{

	if (isset($_SERVER["HTTP_CLIENT_IP"]))
	{
		return $_SERVER["HTTP_CLIENT_IP"];
	}
	elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
	{
		return $_SERVER["HTTP_X_FORWARDED_FOR"];
	}
	elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
	{
		return $_SERVER["HTTP_X_FORWARDED"];
	}
	elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
	{
		return $_SERVER["HTTP_FORWARDED_FOR"];
	}
	elseif (isset($_SERVER["HTTP_FORWARDED"]))
	{
		return $_SERVER["HTTP_FORWARDED"];
	}
	else
	{
		return $_SERVER["REMOTE_ADDR"];
	}

}
$IP=  getRealIP();

	session_start();
	require_once("conexion.php");
        $cnn = conectar();
	$usuario 	= $_POST['usuario'];
	$contrasena     = $_POST['clave'];	
        
	$sql = "select * from v_usuario ";	
	$sql .= " where Usuario='$usuario' and Contrasena=md5('$contrasena')";	
	//echo $sql;
	$result = mysql_query($sql,$cnn);
	$cantidad = is_resource($result)?mysql_num_rows($result):0;
        //echo $cantidad;
	if($cantidad>0){
		
		$fila = mysql_fetch_array($result);
		$_SESSION['estado']     = $fila[5];
            
                 if($_SESSION['estado']==1)
                    {
                        $_SESSION['persona']	= $usuario;
                        $_SESSION['tipouser'] 	= $fila[3];
                        $cliente		= $fila[4];


		//
                //echo $_SESSION['estado'];
                         if($fila[3]=="ADMINISTRADOR"){
                                $sql1 = "select * from persona where Id_Persona='$cliente' ";
                                $res1 = mysql_query($sql1,$cnn);
                                                              
                                $fil1 = mysql_fetch_array($res1);
                                $_SESSION['idpersona'] = $fil1[0];
                                $_SESSION['nombre'] = $fil1[1];
                                $_SESSION['ape_paterno'] = $fil1[2];
                                $_SESSION['dni'] = $fil1[4];
                                
                                $nombre = $fil1[1]." ".$fil1[2]." ".$fil1[3];
                                
                                $sql4 = "INSERT INTO `acceso`(`acceso_usuario`, `acceso_nombre`, `acceso_fecult`,`acceso_ipult`) VALUES ('$fila[1]','$nombre',CURRENT_TIMESTAMP(),'$IP')";
                               
                                $res4 = mysql_query($sql4,$cnn);
                                
                                echo 1;
                                
                         } 
               
                        if($fila[3]=="CLIENTE"){
                                $sql2 = "select * from persona where Id_Persona='$cliente' ";
                                $res2 = mysql_query($sql2,$cnn);
                              
                                $fil2 = mysql_fetch_array($res2);
                                $_SESSION['idpersona'] = $fil2[0];
                                $_SESSION['nombre'] = $fil2[1];
                                $_SESSION['ape_paterno'] = $fil2[2];
                                $_SESSION['dni'] = $fil2[4];
                                
                                 $nombre = $fil2[1]." ".$fil2[2]." ".$fil2[3];
                                 $sql4 = "INSERT INTO `acceso`(`acceso_usuario`, `acceso_nombre`, `acceso_fecult`,`acceso_ipult`) VALUES ('$usuario','$nombre',CURRENT_TIMESTAMP(),'$IP')";
                               
                                 $res4 = mysql_query($sql4,$cnn);
                                echo 2;
                         }
                                                
                         if($fila[3]=="MOZO"){
                                $sql3 = "select * from persona where Id_Persona='$cliente' ";
                                $res3 = mysql_query($sql3,$cnn);
                              
                                $fil3 = mysql_fetch_array($res3);
                                $_SESSION['idpersona'] = $fil3[0];
                                $_SESSION['nombre'] = $fil3[1];
                                $_SESSION['ape_paterno'] = $fil3[2];
                                $_SESSION['dni'] = $fil3[4];
                                
                                $nombre = $fil3[1]." ".$fil3[2]." ".$fil3[3];
                                 $sql4 = "INSERT INTO `acceso`(`acceso_usuario`, `acceso_nombre`, `acceso_fecult`,`acceso_ipult`) VALUES ('$usuario','$nombre',CURRENT_TIMESTAMP(),'$IP')";
                                 
                                 $res4 = mysql_query($sql4,$cnn);
                                echo 3;
                        } 
                           if($fila[3]=="CAJERO"){
                                $sql5 = "select * from persona where Id_Persona='$cliente' ";
                                $res5 = mysql_query($sql5,$cnn);
                              
                                $fil5 = mysql_fetch_array($res5);
                                $_SESSION['idpersona'] = $fil5[0];
                                $_SESSION['nombre'] = $fil5[1];
                                $_SESSION['ape_paterno'] = $fil5[2];
                                $_SESSION['dni'] = $fil5[4];
                                
                                $nombre = $fil5[1]." ".$fil5[2]." ".$fil5[3];
                                 $sql5 = "INSERT INTO `acceso`(`acceso_usuario`, `acceso_nombre`, `acceso_fecult`,`acceso_ipult`) VALUES ('$usuario','$nombre',CURRENT_TIMESTAMP(),'$IP')";
                                 
                                 $res5 = mysql_query($sql5,$cnn);
                                 
                                echo 4;
                        } 
                       
                     
                    }
                        else
                            {
                                echo "Usuario bloqueado o eliminado";
                            }
              
			
	}else{	
             $_SESSION['intentos']=$_SESSION['intentos']+1;
            if ($_SESSION['intentos']==3)
                {
                    $query2="update usuario set Estado=2 where usuario='".$usuario."'";
                    $rs=mysql_query($query2,$cnn) or die("error");
                    $_SESSION['intentos']=0;
                    
                    echo "Excedió el número de intentos, usuario bloqueado";
                }
            else
                {
                    echo "ERROR EN USUARIO O CLAVE \n INTENTO ".$_SESSION['intentos'];
                }
		
	}
?>