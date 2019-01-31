<?php


require '/home/zuhrtech/test.ges.zuhrtech.com/mail/class.phpmailer.php';



function sendmail($to,$name="",$sub,$body){
    
    
 
   
  

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.zuhrtech.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "ges@zuhrtech.com";  // SMTP username
$mail->Password = "ges_zuhrtech"; // SMTP password

$mail->From = "ges@zuhrtech.com";
$mail->FromName = "Mailer";
$mail->AddAddress($to, $name);

$mail->Subject = $sub;
$mail->Body    = $body;
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   return "Message could not be sent! <br> Mailer Error: " . $mail->ErrorInfo;
   
}else{
    return  "Mail has been sent to ".$to;    
}



}






//sendmail('irfansiddiqui1445@gmail.com','irfan','test mail','test body');



?>