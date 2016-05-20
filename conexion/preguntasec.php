<?php
//echo "sasasa";
require_once("conexion.php");
$cnn=conectar();
$usuario=$_GET['usuario'];
//consulta datos de usuario
$query="SELECT `pregunta`,`id_persona` FROM `usuario` WHERE `usuario`='".$usuario."'";
$rs=mysql_query($query,$cnn)or die("error");

$n=is_resource($rs)?mysql_num_rows($rs):0;
if($n>0)
    {
	$row=mysql_fetch_array($rs);
        //consulta datos de persona
        $query1="SELECT concat(nombre,' ',ape_paterno,' ',Ape_materno) as nombre,`email` FROM `persona` WHERE `id_persona`='".$row[1]."'";
        $rs1=mysql_query($query1,$cnn)or die("error");
        $row1=mysql_fetch_array($rs1);
        
        $query2="update usuario set `Contrasena`=md5('".$usuario."') where usuario='".$usuario."'";
        $rs2=mysql_query($query2,$cnn) or die("error");
       // $row2=mysql_fetch_array($rs2);
       // echo  $row1[0].' '.$row1[1];
        ?>
            <center>
                <!-- <h4><?php //echo "".$row[0]; ?></h4>-->
                <input type="hidden" Id="phpmailer" name="phpmailer" value="phpmailer">
                <input type="hidden"  id="txtnombre" name="txtnombre" value="<?php echo $row1[0]; ?>" >
                <input type="hidden"  id="txtemail"  name="txtemail" value="<?php echo $row1[1]; ?>"  >
                 <input type="hidden"  id="clave"  name="clave" value="<?php echo $usuario;  ?>"  >
                  
                <button type="button" onclick="validpreg();" class="btn btn-primary">Enviar Correo</button>
            </center>
        
<?php    }
?>



