<?php
	session_start();
	if(isset($_SESSION['persona'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>RESTARURANT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/style.css" type="text/css">
</head>

<body>

<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <span class="label label-default">
                       <img src="../../imagenes/logo.jpg" width="40px" height="40x"> 
                  La Cochera
					</span>
                </li>
                <li>
				<a href="#" onclick="load_div('contenido', 'usuario/usuario_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;EDT.PERFIL</SPAN></a>        
                 </li> 
                  <li>
				<a href="#" onclick="load_div('contenido', 'usuario/persona_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;REG.PERSONA</SPAN></a>        
                 </li> 
                  <li>
				<a href="#" onclick="load_div('contenido', 'usuario/usuario_pre_list.php');" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true">&nbsp;REG.CLIENTE</SPAN></a>        
                 </li> 
						
					
			
				<li>
                    <a href="#" onclick="" style="cursor:pointer"><span class="glyphicon glyphicon-glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;REG.COMPROBANTE</span></a>
                </li>
                
				<li>
                    <a href="../salir.php " style="cursor:pointer"> 
					<span class="glyphicon glyphicon-off"> Cerrar Sesion (<?php echo $_SESSION['persona']."</b>";?>)</span></a>               
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->


        <!-- Page Content -->
		<div id="background">
		<br>
			<div id="page">
			
				<div class="alert alert-warning" role="alert" style="width: 1000px; height: 240px;">
						<img src="../../imagenes/sea-sound.jpg" alt="Img"style="width:967px; height: 212px;">
				</div>
			
				<div id="contents">
				
					<div id="contenido" >
                                            
					</div>
				</div>
			</div>
			
		
		</div>
			
	</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      
	  <center><div id="modal_body" class="modal-body"></div></center>	
	  
      <div class="modal-footer">
        www.usp.edu.pe
	  </div>
    </div>
  </div>
</div>
 <style>
    #mdialTamanio{
      width: 80% !important;
    }
  </style>
<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdialTamanio">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      
	  <center><div id="modal_body1" ></div></center>	
	  
      <div class="modal-footer">
        www.usp.edu.pe
	  </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       
      </div>
      
	  <center><div id="micontenidocliente" class="modal-body"></div></center>	
	  
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModalPedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
       
      </div>
      <center><div id="micontenidopedido"class="modal-body"></div></center>
		
      </div>
    </div>
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/jquery-1.11.0"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/ajax_funciones.js"></script>
	<!--<script src="../../js/ajax_data.js"></script>-->	
  </body>
</html>
<?php
}else{
	header('Location: ../../index.php'); 
}
?>