<?php

include(__DIR__.'/mail/class.smtp.php');
include (__DIR__.'/mail/class.phpmailer.php'); 
require (__DIR__.'/mail/PHPMailerAutoload.php');

 function sendMail($email,$data)
{
	date_default_timezone_set('Etc/UTC');
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	// $mail->SMTPDebug = 3;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6
	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 465;
	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'ssl';
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "hondacodon92@gmail.com";
	//Password to use for SMTP authentication
	$mail->Password = "vuducngoc";
	//Set who the message is to be sent from
	$mail->setFrom("modelhouse@service.com", "Manager ModelHouse"); //email from
	//Set an alternative reply-to address
	// $mail->addReplyTo('hondacodon92@gmail.com', 'First Last');
	$mail->addAddress($email);
	$body = 'FORM Register '.$data['modelType'].' | '.$data['date'].' | '.$data['time'].' | '.$data['name'].' | '.$data['mail']. ' | '.$data['phoneNumber'].' | '.$data['note'];
	$mail->Body = $body;
	//Set who the message is to be sent to
	//Set the subject line
	$mail->Subject = 'Send Mail Confirm Register Modelhouse';
	//Read an HTML message body from an external file, convert referenced images to embedded,

	//convert HTML into a basic plain-text alternative body
	//Replace the plain text body with one created manually

	$mail->smtpConnect([
	    'ssl' => [
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    ]
	]);
	//Attach an image file
	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	    return FALSE;
	} else {
	    return TRUE;
	}

}

?>