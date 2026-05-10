<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?status=error");
        exit();
    }
    
    // Email configuration
    $to = "zamanitc@gmail.com"; // Change this to your email
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $email_subject = "Contact Form: " . $subject;
    $email_body = "
    <html>
    <head>
        <title>New Contact Form Submission</title>
    </head>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Message:</strong></p>
        <p>{$message}</p>
    </body>
    </html>
    ";
    
    // Send email (commented out by default for local testing)
    // mail($to, $email_subject, $email_body, $headers);
    
    // For demo purposes, we'll just redirect with success
    // In production, uncomment the mail() function above
    
    // Save to file (optional)
    $log_entry = date('Y-m-d H:i:s') . " - Name: {$name}, Email: {$email}, Subject: {$subject}\n";
    file_put_contents('contact_log.txt', $log_entry, FILE_APPEND);
    
    // Redirect back to landing page with success message
    header("Location: index.php?status=success");
    exit();
} else {
    // If someone tries to access this file directly, redirect to home
    header("Location: index.php");
    exit();
}
?>