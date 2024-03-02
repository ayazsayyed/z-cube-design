<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
include 'assets/emailers/contact-us/email-body.php';
$nameErr = $contactErr = $emailErr = $messageErr = $captchaErr = "";
$name = $contact = $email = $message = $captcha = "";
$emailSent = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $contact = test_input($_POST["contact"]);
    $message = test_input($_POST["message"]);

    $mail = new PHPMailer(true);

    var_dump($contact);
    var_dump($name);
    $emailBody = generateEmailBody($name, $contact, $email, $message);
    // echo($emailBody);
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();   
        $mail->Host = 'ssl://smtp.gmail.com:465';                                         //Send using SMTP
        // $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ayaz.sayyed94@gmail.com';                     //SMTP username
        $mail->Password   = 'cphyseilzxvbqlrp';                               //SMTP password
        $mail->SMTPSecure = false;
        $mail->Port       = 587;
        $mail->setFrom('ayaz.sayyed94@gmail.com', 'Zcube Design');
        $mail->addAddress('ayaz.sayyed94@gmail.com');
        $mail->addAddress('ayaz.sayyed94@gmail.com', 'Ayaz Sayyed' );
        $mail->addAddress('shaikhakil377@gmail.com', 'Akil Shaikh' );
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Congratulations! New Enquiry From Zcubedesign.com';
        $mail->Body = $emailBody;
        $mail->send();
        $name = $contact = $email = $message = '';
        $emailSent = true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>