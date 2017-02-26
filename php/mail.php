<?php
require("class.phpmailer.php");

//form validation vars
$formok = true;
$errors = array();

//sumbission data
$ipaddress = $_SERVER['REMOTE_ADDR'];
$date = date('d/m/Y');
$time = date('H:i:s');

//form data
$name = $_POST['name'];
$email = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "mailout.one.com";                     // SMTP server
$mail->SMTPAuth = true;                                     // turn on SMTP authentication
$mail->Username = "mail@zugdirekt.com";                 // SMTP username
$mail->Password = "y{r6X_ma@MMd9Vm;";                             // SMTP password
$mail->Port = 587;                                      // SMTP Port
$mail->AddReplyTo($email);
$mail->From = "mail@zugdirekt.com";                 // SMTP username
$mail->AddAddress("mail@zugdirekt.com");                 // Your Adress
$mail->Subject = "[Kontaktformular] " . $name . ": " . $subject;
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';
$mail->Body = "
					  <p><strong>Name: </strong> {$name} </p>
					  <p><strong>Email-Addresse: </strong> {$email} </p>
					  <p><strong>Betreff: </strong> {$subject} </p>
					  <p><strong>Nachricht: </strong> {$message} </p>
					  <p><i>Diese Nachricht wurde von der IP-Adresse {$ipaddress} am {$date} um {$time} über das Kontaktformular auf <a href='http://zugdirekt.com/'>ZugDirekt.com</a> versendet.
					  </i></p>
					  ";

if (!$mail->Send()) {
    echo "E-Mail konnte nicht versendet werden.<p>";
    echo "Mailer-Fehlermeldung: " . $mail->ErrorInfo;
    exit;
}

echo "E-Mail erfolgreich versendet.";

?>
