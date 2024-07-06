<?php
// Define the recipient email address
$to = "info@arzulmusheer.com,futuretest45@gmail.com,info@f4futuretech.com";

// Define the subject of the email
$subject = "Test Email from PHP Mail";

// Define the HTML message content
$message = "
<html>
<head>
    <title>Test Email</title>
</head>
<body>
    <h1>This is a test email</h1>
    <p>If you are reading this, the email sending is working!</p>
</body>
</html>
";

// Define the headers for the email
$headers = "From: Register Form <webmaster@arzulmusheer.com>" . "\r\n";
$headers .= "CC: futuretest45@gmail.com" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Use the mail() function to send the email
if(mail($to, $subject, $message, $headers)) {
    echo "Email successfully sent to $to";
} else {
    echo "Failed to send email.";
}
?>
