<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kavinduindumina1@gmail.com";  
    $subject = $_POST['email_subject'];
    $message = "Name: " . $_POST['full_name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Mobile Number: " . $_POST['mobile_number'] . "\n\n";
    $message .= "Message: " . $_POST['message'];
    
    $headers = "From: " . $_POST['email'];

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
