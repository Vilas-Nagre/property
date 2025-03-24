
 <?php
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['sendbutton']))
    {

        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $message = $_POST['message'];




require 'phpmail/Exception.php';
require 'phpmail/PHPMailer.php';
require 'phpmail/SMTP.php';


$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'vp2212000@gmail.com';                     
    $mail->Password   = 'zcct secl oioc cwtr';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('vp2212000@gmail.com', 'CODEFIRST ACEDAMY');
   $mail->addAddress('vishaldpatil2000@gmail.com', 'Vishal Dilip Patil');     
   

   

    //Content
    $mail->isHTML(true);                               
    $mail->Subject = 'Test Conatct Form';
    $mail->Body    = 'THANK YOU FOR VISIT OUR WEBSITE GET IN TOUCH';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }




?> 
