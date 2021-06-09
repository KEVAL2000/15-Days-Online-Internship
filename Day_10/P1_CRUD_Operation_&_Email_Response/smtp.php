<?php
     
    include('smtp/PHPMailerAutoload.php');

   
    function smtp_mailer($to,$subject,$message){

       	$mail = new PHPMailer(); 
	      //$mail->SMTPDebug  = 3;
       	$mail->IsSMTP(); 
       	$mail->SMTPAuth = true; 
       	$mail->SMTPSecure = 'tls'; 
       	$mail->Host = "smtp.gmail.com";
       	$mail->Port = 587; 
       	$mail->IsHTML(true);
       	$mail->CharSet = 'UTF-8';
       	$mail->Username = "username";
       	$mail->Password = "password";
       	$mail->SetFrom("test.keval.parmar@gmail.com");
       	$mail->Subject = $subject;
       	$mail->Body =$message;
       	$mail->AddAddress($to);
       	$mail->SMTPOptions=array('ssl'=>array(
		         'verify_peer'=>false,
	         	'verify_peer_name'=>false,
	        	'allow_self_signed'=>false
       	));
       	if(!$mail->Send()){
          		echo $mail->ErrorInfo;
	      }else{
		         //return 'Sent';
       	}
    }

?>
