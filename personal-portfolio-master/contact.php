<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $association = $_POST['association'];

    // Compose the email message
    $to = "ceo@mobitessolution.co.za";
    $subject = "New Contact Form Submission";
    $message = "First Name: $fname\n" .
               "Last Name: $lname\n" .
               "Email: $email\n" .
               "Phone Number: $phone\n" .
               "Association: $association\n";

    // Send the email
    $mailSent = mail($to, $subject, $message);

    // Check if the email was sent successfully
    if ($mailSent) {
        // Redirect to a thank you page
        header("Location: index.html");
        exit;
    } else {
        // If email sending failed, display an error message or handle it accordingly
        echo "Error: Failed to send email. Please try again later.";
    }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>