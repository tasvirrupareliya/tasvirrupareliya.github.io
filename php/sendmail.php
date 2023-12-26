<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Construct the email message
    $to = "tasvirrupareliya@gmail.com";
    $subject = "Form Portfolio Web";
    $headers = "From: $email";

    $email_message = "Full Name: $fullname\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully, redirect with a success message
        header("Location: /index.html");
        exit;
    } else {
        // Email failed to send, redirect with an error message
        header("Location: /index.html?status=error");
        exit;
    }
}
?>
