
<?php 
	
        $email;$comment;$captcha;
        if(isset($_POST['nombre'])){
          $email=$_POST['nombre'];
        }if(isset($_POST['email'])){
          $email=$_POST['email'];
        }if(isset($_POST['phone'])){
          $email=$_POST['phone'];
        }if(isset($_POST['msg'])){
          $email=$_POST['msg'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Por favor verifica el captcha</h2>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=YOUR SECRET KEY&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
  		print_r($_SERVER['REMOTE_ADDR']);
        if($response.success==false)

        {

          echo '<h2>Tu eres un spammer, no se aceptan estos mensajes</h2>';
        }else
        {
	    	// definimos a quien se lo enviamos
			$email_destiny="allangonzalezmiceli16@gmail.com";
			$subject="Mensaje Nuevo";
			 	$mensaje="";
 	$mensaje.="Contact from:". "\n\n";
 	$mensaje.="Name: ".$_POST['nombre']."\n";
 	$mensaje.="E-mail: ".$_POST['email']."\n";
 	$mensaje.="Phone: ".$_POST['phone']."\n";
 	$mensaje.="Comments: ".$_POST['msg']."\n";
			// verificamos si se envió
			if (mail($email_destiny,$subject,utf8_decode($mensaje),"From: Contact<".$_POST['email'].">")) {
			   
			} else {
			    echo '<p align="center">Error '.$_POST['fname'].'</p>';
			}
          	 echo '<p align="center"><b>Gracias, Hemos recbido su email, pronto nos contactaremos con ustedes</b></p>';;
        }


// if(isset($_POST['nombre'])&&!empty($_POST['nombre'])&&isset($_POST['email'])&&!empty($_POST['email'])
// 	&&isset($_POST['phone'])&&!empty($_POST['phone'])&&isset($_POST['msg'])&&!empty($_POST['msg']) 
// 	){
// 	$mensaje="";
// 	$mensaje.="Contact from:". "\n\n";
// 	$mensaje.="Name: ".$_POST['nombre']."\n";
// 	$mensaje.="E-mail: ".$_POST['email']."\n";
// 	$mensaje.="Phone: ".$_POST['phone']."\n";
// 	$mensaje.="Comments: ".$_POST['msg']."\n";
// 	// definimos a quien se lo enviamos
// 	$email_destiny="allangonzalezmiceli16@gmail.com";
// 	$subject="Mensaje Nuevo";
// 	// verificamos si se envió
// 	if (mail($email_destiny,$subject,utf8_decode($mensaje),"From: Contact<".$_POST['email'].">")) {
// 	    echo '<p align="center"><b>Gracias, Hemos recbido su email, pronto nos contactaremos con ustedes</b></p>';
// 	} else {
// 	    echo '<p align="center">Error '.$_POST['fname'].'</p>';
// 	}
// 	}

  ?>
