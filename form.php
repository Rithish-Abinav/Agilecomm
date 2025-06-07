<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $services = $_POST['services'];
    $message = $_POST['message'];
    
    $to = "rithishabinav2001@gmail.com";
    $subject = "New Contact Form Submission";
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Mobile Number: $number\n";
    $email_content .= "Selected Service: $services\n";
    $email_content .= "Message:\n$message\n";
    
    $headers = "From: $email";
    
    mail($to, $subject, $email_content, $headers);
    
    header("Location: thankyou.html");
    exit();
}
?>