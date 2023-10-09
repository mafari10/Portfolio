<?php
session_start();

// Set your email address
$to = "recipient@example.com";

// Set a token to prevent cross-site request forgery (CSRF) attacks
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;

// Function to sanitize form input
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate CSRF token
    // if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    //     // Handle CSRF token mismatch
    //     die("CSRF validation failed.");
    // }

    // Retrieve and sanitize form data
    $name = sanitizeInput($_POST["name"]);
    $email = sanitizeInput($_POST["email"]);
    $subject = sanitizeInput($_POST["subject"]);
    $message = sanitizeInput($_POST["message"]);

    // Validate form data
    if (empty($name) || empty($email) || empty($subject)|| empty($message)) {
        // Handle validation error
        die("Please fill in all required fields.");
    }

    // Compose email body
    $emailBody = "Name: " . $name . "\n";
    $emailBody .= "Email: " . $email . "\n";
    $emailBody .= "Subject: " . $subject . "\n";
    $emailBody .= "Message: " . $message . "\n";

    // Set additional headers
    $headers = "From: your-email@example.com\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send the email
    if (mail($to, "New form submission", $emailBody, $headers)) {
        // Email sent successfully
        header('Location: thank-you.php');
        exit;
    } else {
        // Failed to send email
        die("Oops! Something went wrong. Please try again later.");
    }
}
?>
