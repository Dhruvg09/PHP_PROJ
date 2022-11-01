<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

	function sendOTP($email,$otp) {
		require('PHPMailer/PHPMailer.php'); 
        	require('PHPMailer/Exception.php'); 
        	require('PHPMailer/SMTP.php'); 

		$mail = new PHPMailer(true);
	
		$mail->isSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->SMTPAuth= true;
		$mail->Username='garg90676@gmail.com';
		$mail->Password='khfkvcvcdsbcvpse';
		$mail->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port=465;
		
		$mail->setFrom('garg90676@gmail.com','Dhruv garg');
		$mail->addAddress ($email);
		$mail->isHTML(true);
		$mail->Subject= "OTP to Login";
		$mail->Body="Hello";
		$mail->MsgHTML ($otp) ;
		$result=$mail->send() ;

		if(!$result) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		else {
			return $result;
		}
	}
?> 

     
 
