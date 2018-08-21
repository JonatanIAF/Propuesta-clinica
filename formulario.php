<?php
    $nombre = $_POST['exampleName'];
    $celular= $_POST['examplePhone'];
    $correo= $_POST['exampleInputEmail'];
    $mensaje= $_POST['exampleTextarea'];
//Import the PHPMailer class into the global namespace
  require("PHPMailer/PHPMailer.php");
  require("PHPMailer/SMTP.php");
  require("PHPMailer/Exception.php");
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    //$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.Outlook.com";
    $mail->Port = 25; // or 587
    $mail->Username = "aguilarupch@hotmail.com";
    $mail->Password = "jonatan19";
//Set who the message is to be sent from
$mail->From= "aguilarupch@hotmail.com";
$mail->FromName= "$nombre";
$mail->IsHTML(false);
$mail->addAddress('sarge_52@hotmail.com', 'Campeche');
$mail->Subject = 'Cita';
$mail->Body="$mensaje";
$mail->Timeout=60;
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}