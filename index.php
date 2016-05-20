<!DOCTYPE HTML>
<?php
header('Content-Type: text/html; charset=UTF-8');  
if (isset($_SESSION['usuario'])){echo "<script language=javascript>
            location.href='index.php';
	   </script>";}else{
session_start();
session_destroy();
session_start();
$_SESSION['intentos']=0;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <script type="text/javascript" src="js/jquery.js" ></script>
         <!-- <script src="js/jquery-1.11.0.js" ></script>-->
         <script type="text/javascript" src="js/js_funciones.js" ></script>
         <script type="text/javascript" src="js/jquery.min.js" ></script>
         <script type="text/javascript" src="js/jquery-1.11.0.js" ></script>
       <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>-->
         
         <script src="js/bootstrap.min.js" ></script>
         <link href="css/bootstrap-theme.min.css" rel="stylesheet">
       <link href="css/bootstrap.min.css" rel="stylesheet" >  
       <!--  <link href="css/simple-sidebar.css" rel="stylesheet" >-->
        <link rel="stylesheet" href="css/style.css" type="text/css" >
      
        <title>Restaurant Yulissa & Janet</title>
    </head>
    <BODY BGCOLOR="TEAL">
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
	<TABLE ALIGN="CENTER" WIDTH=700>
		<TR>
			<TD BGCOLOR="#0080FF">
			<BR>
			<BR>
			<BR>
			<BR>
			<IMG SRC="IMAGENES/LOGO.PNG" WIDTH=250>
			<BR>
			<BR>
			<BR>
			<BR>
			<BR>
			<BR>
			</TD>
			<TD BGCOLOR="#FFFFFF">
			<IMG SRC="IMAGENES/BUFFET.JPG"WIDTH=500 HEIGHT=100>
                        <form id="form_usuario_reg" name="form_usuario_reg" class="form-vertical"  >
			    <div class="panel panel-warning">
				
					<div class="panel-heading">
						<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Inicio Sesión</span> 
					</div>
					
					<div class="panel-body">
					
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Usuario&nbsp;</span></span>
							<input type="text" name="txtusuario" id="txtusuario" class="form-control" placeholder="Ingrese nombre de Usuario">
						</div>
						<br>
						
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk" aria-hidden="true">&nbsp;Contraseña</span></span>
							<input type="password" name="txtclave" id="txtclave" class="form-control" placeholder="Ingrese Contraseña">
						</div>
						<br>
						
						<div >	
                                                     &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="#" data-toggle="modal" data-target="#recuperar" data-dismiss="modal"><B><I><FONT SIZE=4>Recuperar cuenta</FONT></I></B></a>
                                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                  <button type="button"  onclick="login();" class="btn btn-primary" ><span  
							class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;<B><I><FONT SIZE=4>Iniciar sesión</FONT></I></B></span></button>     
						
                                                     
                                                </div>			
					</div>
					
				</div>

            </form>
			</TD>
		</TR>
	</TABLE>

</BODY>

<div class="modal fade" id="recuperar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h5>RECUPERAR CUENTA</h5></center>
			</div>
                    <div class="modal-body">
                        <form id="frm_re" name="frm_re" class="form-vertical" action="<?php echo $_SERVER["PHP_SELF"];?>">
                            <center>
                        <table>
                            <tr>
                            <td width="15%"></td>
                            <td width="15%"><h4>Usuario</h4></td>
                            <td width="40%"><input type="text"  id="txtusuario" class="form-control" onkeypress="prg_sec();" placeholder="Username"></td>
                            
                             <td width="40%">
                             <center>
                                 <div id="recup" name="recup">
                                     
                                 </div>
                             </center>
                             </td>
                            </tr>
                             
                        </table></center>
                        </form>
                    </div>
			<div class="modal-footer">
				<center> <h7> SISTEMA DE RESTAURANTE - YULISSA & JANET</h7></center>
			</div>
		
	</div>
</div>
</div>
</HTML>
<?php } ?>
