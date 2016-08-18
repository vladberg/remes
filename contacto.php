<?php
include_once("lib/template.php");
if($_POST){
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
//$telefono = $_POST['telefono'];
$text = $_POST['mensaje'];

//Librerías para el envío de mail
include_once('lib/PHPMailer/class.phpmailer.php');
include_once('lib/PHPMailer/class.smtp.php');
 
//Recibir todos los parámetros del formulario
//$para = 'ventas@sartory.mx';
$para = 'bergman.pereira.novelo@gmail.com';
$asunto = $_POST['asunto'];
$mensaje = '<h2>Nombre: '.$nombre.'</h2><h3>Correo Electrónico: '.$email.'</h3><h3>Mensaje: '.$text.'</h3>';
//$archivo = $imagen;
 
//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
 
//Nuestra cuenta
$mail->Username ='bergman.pereira.novelo@gmail.com';
$mail->Password = 'vladberg01'; //Su password
 
//Agregar destinatario
$mail->AddAddress($para);
$mail->Subject = $asunto;
$mail->Body = $mensaje;
//Para adjuntar archivo
//$mail->AddAttachment($archivo, $archivo);
$mail->MsgHTML($mensaje);
  
//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");            
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
         </script>';
}
 }

cabezal();
?><style>
	.sub-page-banner {
	background:url(images/re2.jpg) no-repeat center !important;
	background-attachment:fixed;
	height:316px;
	position:relative;
}
.sub-page-banner .overlay {
	position:absolute;
	left:0;
	top:0;
	width:100%;
	height:100%;
}
</style>
<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
    <div class="overlay"></div>
    	<div class="container">
        	<h1 class="entry-title">Contáctanos</h1>
            <!--<p>.</p>-->
        </div>
    </section>
    
    
    <div class="sub-page-content">
    	<div class="container">
        	<h2 class="light bordered">Nuestra <span>Dirección</span></h2>
            <div class="row">
            	<div class="col-md-12">
                	<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.925480880331!2d-96.11504458464553!3d19.154738954469167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c34053710578bd%3A0x814e8acc838e1636!2sPalmeras+Medico+Dental!5e0!3m2!1ses!2smx!4v1460739887693" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    	<!--<div class="get-directions">
                        	<form action="http://maps.google.com/maps" method="get" target="_blank">
                               <input type="text" name="saddr" placeholder="Enter Your Address" />
                               <input type="hidden" name="daddr" value="Envato Pty Ltd, Elizabeth Street, Melbourne, Victoria, Australia" />
                               <input type="submit" value="Get directions" class="direction-btn" />
                            </form>
                        </div>-->
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-8 contact-form">
                	<h2 class="light bordered">Envíanos un <span>Mensaje</span></h2>
                    <form action="" method="post">
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="Correo Electrónico" name="email">
                    <input type="text" placeholder="Asunto" name="asunto">
                    <textarea placeholder="Mensaje" name="mensaje"></textarea>
                    <input type="submit" class="btn btn-default" value="Enviar">
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4">
                	<h2 class="light bordered">Comunícate con <span> nosotros</span></h2>
                    <div class="get-in-touch-widget">
                    	<ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i>(229) 130 4093</li>
                        <li><i class="fa fa-phone"></i>(229) 130 4094</li>
                        <li><i class="fa fa-phone"></i>(04422) 991 53525</li>
                        <li><i class="fa fa-envelope"></i><a href="#.">remesgo@hotmail.com</a></li>
                       <!-- <li><i class="fa fa-globe"></i><a href="#.">www.medicom-clinic.com</a></li>-->
                        <li><i class="fa fa-clock-o"></i>Lun - Sáb 9:00 am - 6:00 pm</li>
                        <li><i class="fa fa-map-marker"></i>Palmeras No. 562, Fracc. Jardines de Virginia, Boca del Río Veracruz.</li>
                        </ul>
                    </div>
                    
                    <ul class="social-rounded">
                    	<li><a href="https://www.facebook.com/remesgo"><i class="fa fa-facebook"></i>/remesgo</a></li>
                        <li><a href="https://twitter.com/9luka9"><i class="fa fa-twitter"></i>@9luka9</a></li>
                    	<!--<li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    	<li><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    	<li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                    	<li><a href="#."><i class="fa fa-youtube"></i></a></li>
                    	<li><a href="#."><i class="fa fa-vimeo-square"></i></a></li>
                    	<li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#."><i class="fa fa-rss"></i></a></li>
                        <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#."><i class="fa fa-android"></i></a></li>
                        <li><a href="#."><i class="fa fa-flickr"></i></a></li> -->
                    </ul>
                    
                </div>
            </div>
            
        </div>
    </div>

<?php
footer();
?>