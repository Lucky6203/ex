
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
$mail = new PHPMailer(true);

try {								 
	$mail->isSMTP();										 
	$mail->Host	 = 'smtp.gmail.com;';				 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'luckysingh49946@gmail.com';				 
	$mail->Password = 'gqkorlfgqujuoxhw';					 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('luckysingh49946@gmail.com', 'Name');		 
	$mail->addAddress('lk502295@gmail.com');
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Subject';
	$mail->Body    = "Name: $name<br>Email: $email<br>Message: $message";
	$mail->send();
	echo  '<script>alert("Mail has been sent successfully!")</script>';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>


<section class="contact_us" id="contact">
<div class="contact_contner">
    <h1 class="contact_title">Contact<span> Us</span></h1>
    <div class="contact_from">
        <div class="contact_item">
            <form method="post" action="">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" required></textarea><br>

                <button type="submit" name="send" class="read_contact" value="send">Submit</button>
            </form>
        </div>
    </div>
</div>
</section>