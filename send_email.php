<?php
// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Validate form data
	if (empty($name) || empty($email) || empty($message)) {
		echo 'Please fill out all fields.';
		exit;
	}

	// Create email headers
	$headers = 'From: '.$name.' <'.$email.'>'."\r\n".'Reply-To: '.$email."\r\n".'X-Mailer: PHP/'.phpversion();

	// Send email
	$to = 'your@email.com'; // Replace with your email address
	$subject = 'New Contact Form Submission';
	$body = $message;
	if (mail($to, $subject, $body, $headers)) {
		echo 'Message sent successfully!';
	} else {
		echo 'An error occurred. Please try again later.';
	}
} else {
	echo 'Invalid request.';
}
?>