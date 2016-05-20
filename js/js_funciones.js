
function cargainicio(div,formulario)
{
	$("#"+div).load(formulario);
}
function pascid(a)
{
    //alert(a);
    document.frm_nca.txtncid.value=a;
}

function soloNumeros(e) 
{ 
    var key = window.Event ? e.which : e.keyCode 
    return ((key >= 48 && key <= 57) || (key==8))
}

function reg_empleado(){
	var pid = document.frm_regempleado.txtpersonaid;
        var direccion = document.frm_regempleado.txtdireccion;
        var fecha = document.frm_regempleado.txtfecha;
        var telefono = document.frm_regempleado.txttelefono;
        var cargo = document.frm_regempleado.cbocargo;
	//alert(pid.value+" "+direccion.value+" "+fecha.value+" "+telefono.value+" "+cargo.value);
	$.post('reg_empleado_ope.php', 
		{	pid		: pid.value,		
			direccion 	: direccion.value,
                        fecha           : fecha.value,
                        telefono        : telefono.value,
                        cargo           : cargo.value
		},
		function (data){
			if(data=="correcto"){
				alert("Empleado registrado correctamente");
                                document.frm_regempleado.txtpersonaid.value="";
                                document.frm_regempleado.txtpersona.value="";
                                document.frm_regempleado.txtdireccion.value="";
                                document.frm_regempleado.txtfecha.value="";
                                document.frm_regempleado.txttelefono.value="";
                                document.frm_regempleado.cbocargo.value="";
			}else{
				alert(data);
			}
		}
	);
}
function pasdemp(a,b)
{
    document.frm_regempleado.txtpersona.value=a;
    document.frm_regempleado.txtpersonaid.value=b;
}
function bus_empleado(){
	var usuario = document.frm_re.txtbusc;
	//alert(usuario.value);
	cargarformulario('busemple','bus_empleado.php?nombre='+usuario.value);
}
function persona_reg(){
    	
	var nombre	= document.form_persona_reg.txtnombre;
	if(nombre.value == ""){
		alert('Ingrese su nombre');
		return false;
    }
	
	var ape_paterno	= document.form_persona_reg.txtape_paterno;
	if(ape_paterno.value == ""){
		alert('Ingrese su apellido paterno');
		return false;
    }
	
	var ape_materno	= document.form_persona_reg.txtape_materno;
	if(ape_materno.value == ""){
		alert('Ingrese su apellido materno');
		return false;
    }
	
	var sexo = document.form_persona_reg.cbosexo;
	if(sexo.value == "Seleccionar"){
		alert('Ingrese el sexo al que pertenece');
		return false;
    }
	
	var dni	= document.form_persona_reg.txtdni;
	if(dni.value == ""){
		alert('Ingrese DNI');
		return false;
    }
	
	var telefono	= document.form_persona_reg.txttelefono;
	if(telefono.value == ""){
		alert('Ingrese el numero telefonico');
		return false;
    }
	
	var direccion	= document.form_persona_reg.txtdireccion;
	if(direccion.value == ""){
		alert('Ingrese la direccion');
		return false;
    }
	
	var email	= document.form_persona_reg.txtcorreo;
	if(email.value == ""){
		alert('Ingrese la direccion electronica');
		return false;
    }
	
	$.post('persona/persona_ope.php', 
		{	
			nombre 		: nombre.value,
			ape_paterno     : ape_paterno.value,
			ape_materno     : ape_materno.value,
			sexo 		: sexo.value,
			dni 		: dni.value,
			telefono	: telefono.value,
			direccion 	: direccion.value,
			email 		: email.value
			
			
		},
		function (data){
			if(data=='OK'){	
					
				nombre.value		="";
				ape_paterno.value	="";
				ape_materno.value	="";
				sexo.value		="Seleccionar";				
				dni.value		="";
				telefono.value		="";
				direccion.value		="";
				email.value		="";
				load_div("subcontenido", "persona/persona_list.php?q=");
			}
			else{
				alert(data);
			}
		}
	);
}
function registrousuario(){
        var codigo = document.frm_empleado.codigo;
	var clave = document.frm_empleado.empleado;
        alert(clave.value);
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('usuario_registrar.php', 
		{	codigo		: codigo.value,		
			empleaado	: empleado.value,
                       // pregunta        : pregunta.value,
                       // respuesta       : respuesta.value,
                       // empleado        : empleado.value
		},
		function (data){
			if(data=="SU REGISTRO FUE REALIZADO CORRECTAMENTE"){
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
			}
		}
	);
}

function login(){
	var usuario = document.form_usuario_reg.txtusuario;
	var clave = document.form_usuario_reg.txtclave;
	//alert(usuario.value+" "+clave.value);
        if(usuario.value !== "" && clave.value !== ""){
	$.post('conexion/usuario_validar.php', 
		{	usuario		: usuario.value,		
			clave 		: clave.value			
		},
		function (data){
                      
                     //  alert(co.value+" "+data);
			if(data==1){
                         alert("BIENVENIDO AL SISTEMA - REST. LA COCHERA");
                         $(location).attr('href','sistema/administrador/index.php');
			//	window.location.href = "sistema/administrador/index.php";
			}else{
                          
				 if(data==2){
                                        alert("BIENVENIDO AL SISTEMA - RESTAURANT YULISSA & JANET");
                                        $(location).attr('href','sistema/cliente/index.php');
                                 
                                   }else{
                                       
                                            if(data==3){
                                                alert("BIENVENIDO AL SISTEMA - RESTAURANT YULISSA & JANET");
                                                $(location).attr('href','sistema/mozo/index.php');
                                           
                                            }else{
                                               
                                                    if(data==4){
                                                    alert("BIENVENIDO AL SISTEMA - RESTAURANT YULISSA & JANET");
                                                    $(location).attr('href','sistema/cajero/index.php');
                                           
                                                    }else{

                                                           alert(data);
                                                    }
                                            }
                                   }
			}
                       
                         
		}
	);}else{
            alert('Complete los dos campos');
        }
}
function prg_sec(){
	var usuario = document.frm_re.txtusuario;
	//alert(usuario.value);
	$.post('conexion/preguntasec.php', 
		{	usuario	: usuario.value		
		},
		function (data){
			if(data){
				cargarformulario('recup','conexion/preguntasec.php?usuario='+usuario.value);
			}
		}
	);
}
function cargarformulario(div,formulario)
{
	$("#"+div).load(formulario);
	$( "#"+div ).hide();
	if ( $( "#"+div ).is( ":hidden" ) ) {
    $( "#"+div ).slideDown( "slow" );
  } //else {
    //$( "#contenido" ).hide();
  //}
}
function validpreg(){
	var nombre = document.frm_re.txtnombre;
        var email = document.frm_re.txtemail;
        var phpmailer =document.frm_re.phpmailer;
         var usuario =document.frm_re.clave;
	//alert(usuario.value);
	$.post('conexion/envio_email.php', 
		{   
                    nombre     : nombre.value,
                    email      : email.value,
                   phpmailer   : phpmailer.value,
                   usuario     : usuario.value
		},
		function (data){
                // alert(data);
			if(data==1){
                            alert("SE EL ENVIO UN CORREO CON SU NUEVA CONTRASEÑA");
                            window.location.href ="index.php";
			}else{
				alert("ERROR AL ENVIAR EL CORREO");
			}
		}
	);
}
function usuario_reg(){
	
	var usuario	= document.form_usuario_reg.txtuser;
	if( usuario.value == "" ) {
		alert('Ingrese usuario');
		return false;
    }
	
	var contrasena	= document.form_usuario_reg.txtcontrasena;
	if(contrasena.value == ""){
		alert('Ingrese una contraseña para su usuario');
		return false;
    }
	
	var pregunta	= document.form_usuario_reg.cbpregunta;
	if(pregunta.value == "Seleccionar"){
		alert('Ingrese su pregunta');
		return false;
    }

	var respuesta	= document.form_usuario_reg.txtrespuesta;
	if(respuesta.value == ""){
		alert('Ingrese su respuesta');
		return false;
    }
	
	var fecact	= document.form_usuario_reg.txtfecact;
	if(fecact.value == ""){
		alert('Ingrese su fecha de activación');
		return false;
    }
	
	var feccan = document.form_usuario_reg.txtfeccan;
	if(feccan.value == ""){
		alert('Ingrese su fecha de cancelación');
		 return false;	
    }
	 if(feccan.value < fecact.value){
		alert('Su fecha de cancelación es  errone');
		 return false;
	}
	var cbotipo	= document.form_usuario_reg.cbotipo;
	if(cbotipo.value == "Seleccionar"){
		alert('Ingrese el tipo de cuenta');
		return false;
    }
	
	var  empleado	= document.form_usuario_reg.txtempleado;
	if(empleado == ""){
		alert('Ingrese el empleado');
		return false;
    }
	
	
	$.post('usuario/usuario_ope.php', 
		{	usuario 	: usuario.value,
			contrasena 	: contrasena.value,
			pregunta 	: pregunta.value,
			respuesta   : respuesta.value,
			fecact      : fecact.value,
			feccan 		: feccan.value,
			cbotipo     : cbotipo.value,
			empleado	: empleado.value
			
		},
		function (data){
			if(data=='OK'){	
				usuario.value		="";		
				contrasena.value	="";		
				pregunta.value		="Seleccionar";
				respuesta.value	    ="";
				fecact.value	    ="";
				feccan.value		="";
				cbotipo.value	    ="Seleccionar";
				empleado.value		="";
				load_div("subcontenido", "usuario/usuario_list.php?q=");
			}
			else{
				alert(data);
			}
		}
	);
}
function registro(){
        var usuario = document.frm_creausuario.txtusuario;
	var clave = document.frm_creausuario.txtclave;
        var pregunta = document.frm_creausuario.txtpregunta;
        var respuesta = document.frm_creausuario.txtrespuesta;
        var empleado= document.frm_creausuario.txtPersonaID;
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('usuario_registrar_ope.php', 
		{	usuario		: usuario.value,		
			clave 		: clave.value,
                        pregunta        : pregunta.value,
                        respuesta       : respuesta.value,
                        empleado        : empleado.value
		},
		function (data){
			if(data=="SU REGISTRO FUE REALIZADO CORRECTAMENTE"){
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
			}
		}
	);
}



function eliminarusuario(usuario){
        //var usuario = document.frm_eliminarusuario.usuario;
      //  alert(usuario);
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('usuario_eliminar_ope.php', 
		{	usuario		: usuario	     
		},
		function (data){
			if(data=="correcto"){
                            alert('Su registro se elimino correctamente');
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
                                
			}
		}
	);
}

