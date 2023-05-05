<?php

if(isset($_POST['submit'])) {

    // EDIT THE FOLLOWING LINE TO YOUR EMAIL ADDRESS
    $to = "connorgeshan@gmail.com";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "CC: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message_body = "<p>Name: " . $name . "</p>";
    $message_body .= "<p>Email: " . $email . "</p>";
    $message_body .= "<p>Subject: " . $subject . "</p>";
    $message_body .= "<p>Message: " . $message . "</p>";

    if(mail($to, $subject, $message_body, $headers)) {
        echo "<script>alert('Your message has been sent. Thank you!');</script>";
    } else {
        echo "<script>alert('Unable to send your message. Please try again.');</script>";
    }
}
?>
