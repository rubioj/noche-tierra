<?php
// Check if the request method is post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recipient email
    $to = 'rubiojuan@gmail.com';

    // Subject
    $subject = 'Test Email';

    // Message
    $message = 'This is a test email sent from a PHP script.';

    // Additional headers
    $headers = 'From: rubiojuan@gmail.com' . "\r\n" .
        'Reply-To: rubiojuan@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    // Check for success
    if ($success) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Check your server configuration.';
    }
} else {
    echo 'No POST data received.';
}
?>
