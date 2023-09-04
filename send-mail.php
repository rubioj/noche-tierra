<?php


// Rest of your PHP script...

// Check if the request method is post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];

    // Recipient email
    $to = $userEmail;

    // Subject
    $subject = 'Welcome ' . $userName;

    // Message
    $message = $userName . ' We are happy to have you as part of our art community - Arte Tierra';

    // Additional headers
    $headers = 'From: info@juanrubio.us' . "\r\n" .
        'Reply-To: info@juanrubio.us' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    // Check for success
    if ($success) {
        header("Location: http://juanrubio.us/contact.html");
    } else {
        echo 'Failed to send email. Check your server configuration.';
    }
} else {
    echo 'No POST data received.';
}
?>
