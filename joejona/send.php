<?php
  require 'phpmailer/PHPMailerAutoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $email_subject = $_POST["email_subject"];
    $message = $_POST["message"];
    $subject = "From $name";
    $body = "Name: $name\n" . "<br>";
    $body .= "Phone: $phone\n" . "<br>";
    $body .= "Email: $email\n" . "<br>";
    $body .= "Subject: $email_subject\n" . "<br>"; 
    $body .= "Message: $message";

    // Set the recipient email address
    $to = "jonagabrieljebarajs@gmail.com.com"; // Replace with your email address


$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();

 $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mailenquiry055@gmail.com';
        $mail->Password = 'kcxjrpbemprllvkd';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SetFrom('mailenquiry055@gmail.com');
        $mail->AddAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        if($mail->send()){
        //      echo '<script>alert("Mail sent Successfully. \nThank you for contacting us. We will be in touch with you very soon.")</script>';
        // echo'<script>window.location.href = "'.  $url  .'";</script>';
          header("Location: index.php");

        } else {
            echo 'We are sorry, but there appears to be a problem with the form you submitted.';
        }
}
