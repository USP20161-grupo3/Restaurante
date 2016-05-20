<?php

  header('Content-Type: text/html; charset=UTF-8');  
    $msg=null;
    // echo ;
    if(isset($_POST['phpmailer'])){
    $usuario = $_POST['usuario'];    
    $nombre=  htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $asunto=  htmlspecialchars("CAMBIO DE USUARIO");
    $mensaje = ""
            . "<html>"
            . "<body>"
            . "<table >"
            . "<tr>"
            . "<td bgcolor='DodgerBlue' align='center'><font color ='white' size='4'><br> Nueva Cuenta de Usuario</br></font></td>"
            . "</tr>"
           . "<tr>"
            . "<td bgcolor='DodgerBlue' whidth='30px'> </td>"
            . "</tr>"
            . "<tr>"
            . "<td><br>HOLA $nombre, <br/></td>"
            . "</tr>"
            . "<tr>"
            . "<td align='justify'><br>Acabas de recibir tu clave del sistema de restautrant - YULISSA & JANET, la cual "
            . "te permitir&aacute; ingresar nuevamente al sistema."
             . "</br>"
            . "<br>"
            . "</br>"
            . "Para iniciar sesi&oacute;n en el sistema deber&aacute;s ingresar tu clave que te "
            . "proporcionamos a continuaci&oacute;n, recuerda que esta credencial es de uso estrictamente"
            . "personal, por ser una clave de recuperaci&oacute;n se le recomienda cambiar "
            . "la clave a la brevedad posible."
            . "<br>"
            . "</br>"
            . "<br>"
            . "</br>"
            . "</td>"
            . "</tr>"
            . "</table>"
            
            . "<table align='center'>"
            . "<tr>"
            . "<td align='center'><font size='4'><b>Clave de Acceso</b></font></td>"
            . "</tr>"
            . "<tr>"
            . "<td align='center'><font size='3'>$usuario</font></td>"
            . "</tr>"
            . "<tr>"
            . "<td align='left'>"
            . "<br>"
            . "</br>"
            . "<br>"
            . "</br>"
            . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
            . "&nbsp;ATT. ADMINISTRADOR </br></td>"
            . "</tr>"
            . "</table>"
            . "</body>"
            . "</html>";
           
  //  $adjunto = $_FILES["adjunto"];
  
    
    require "../phpmailer/class.phpmailer.php";

    $mail=new PHPMailer;
    $mail->host ="localhost";
    $mail->From ="Reyesr300@gmail.com";
    $mail->FromName ="Adminitrador - Sistema Restaurante Yulissa & Janet ";
    $mail->Subject =$asunto;
    $mail->addAddress($email,$nombre);
    $mail->MsgHTML($mensaje);
   
    if($mail->send()){
        echo 1;
    }else
    {
        echo 2;
     
    }
    }  
?>
