<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "lukkmaaan@gmail.com"; 
    $subject = "New Form Submission";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
