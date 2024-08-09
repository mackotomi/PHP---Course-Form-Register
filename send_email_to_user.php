<?php
// User's email address
$userEmail = 'user@example.com';

// Subject of the email
$subject = 'Welcome to Our Service!';

// Email content
$message = '
<html>
<head>
    <title>Welcome to Our Service</title>
</head>
<body>
    <p>Hello,</p>
    <p>Thank you for registering with us! We are excited to have you on board.</p>
    <p>Best regards,<br>The Team</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: no-reply@yourdomain.com' . "\r\n";

// Send email
if(mail($userEmail, $subject, $message, $headers)) {
    echo 'Welcome email sent successfully.';
} else {
    echo 'Failed to send welcome email.';
}
?>

<?php include 'head.php'; ?>
<?php include 'foot.php'; ?>
