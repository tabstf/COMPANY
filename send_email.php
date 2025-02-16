<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $business_name = htmlspecialchars($_POST['business_name']);
    $location = htmlspecialchars($_POST['location']);
    $business_needs = htmlspecialchars($_POST['business_needs']);

    $to = $email;
    $subject = "Thank you for your submission!";
    $message = "Hello $name,\n\nThank you for reaching out to us. Here are the details you submitted:\n\n"
             . "Business Name: $business_name\n"
             . "Location: $location\n"
             . "Business Needs: $business_needs\n\n"
             . "We will get back to you shortly.\n\nBest regards,\nShelfeat Team";
    $headers = "From: no-reply@shelfeat.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
