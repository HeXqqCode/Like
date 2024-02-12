<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "handedaksh@gmail.com"; // Replace with your email address
    $subject = "Refund Policy Inquiry";
    
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n\n";
    $message .= "Message:\n" . $_POST["message"];

    $headers = "From: " . $_POST["email"];

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
