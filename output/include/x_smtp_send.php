<?php

    $mail = new PHPMailer;
    $mail->isSMTP();                                      
	$mail->Host =SMTPSERVER;                       
	$mail->SMTPAuth = true;  
	$mail->CharSet = 'UTF-8';                              
	$mail->Username = SMTPUSER;                   
	$mail->Password = SMTPPWD;            
	$mail->SMTPSecure = 'tls';                            
	$mail->Port = PORT;                                   
	$mail->setFrom(SETFROMMAIL,SETFROMMAILNAME);      
	$mail->WordWrap = 50;                                 
	$mail->isHTML(true);                                  
	$mail->AddAddress( $to2 , $to2 );
	$mail->Subject = $subject2;
	$mail->Body    = $message2;
	$mail->msgHTML($message2);
 
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Message sent!";
	};
?>