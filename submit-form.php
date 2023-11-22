<?php
error_reporting(E_ALL);

$thankYouMessage = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can perform additional validation and processing here

    // Send email (you may need to configure your server for email sending)
    $to = "swarupt29@gmail.com"; // Replace with your email address
    $headers = "From: $email";

    // Mail content
    $mailContent = "Name: $name\n";
    $mailContent .= "Email: $email\n";
    $mailContent .= "Subject: $subject\n";
    $mailContent .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $mailContent, $headers)) {
        $thankYouMessage = 'Your message has been sent successfully!';
    } else {
        $error = 'Oops! Something went wrong and we couldn\'t send your message.';
    }
}

echo json_encode(["message" => $thankYouMessage ?: $error]);
?>
