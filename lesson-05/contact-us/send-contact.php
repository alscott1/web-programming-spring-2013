<?php
$to = 'amberleighscott@gmail.com';
$subject = "Help me plan my dream vacation to the Sonoma Coast";
$message = $_POST['customername'] . 'Needs a Sonoma Coast Vacation Planner';
$headers = 'From: Discover Sonoma Coast, Inc.' . "\r\n" .
    'Reply-To: amberleighscott@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>