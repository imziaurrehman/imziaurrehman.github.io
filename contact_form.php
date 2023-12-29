<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Compose email message
$to = "imziaafridi@gmail.com";  // Replace with your email address
$subject = "New Form Submission";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

// Send email using PHP's mail() function
$headers = "From: $email";  // Set the From header with the user's email
if (mail($to, $subject, $body, $headers)) {
  echo "Message sent successfully!";
} else {
  echo "Message could not be sent.";
}
?>
