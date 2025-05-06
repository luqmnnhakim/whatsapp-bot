<?php
// Read incoming data from Twilio
$input = $_POST;
$from = $_POST['From'] ?? '';
$body = strtolower(trim($_POST['Body'] ?? ''));

// Your master user WhatsApp number (format: whatsapp:+60123456789)
$masterUser = 'whatsapp:+60147195118';
$voidCode = 'VOID-XYZ123'; // Your void code

// Decide on response
if ($from === $masterUser && $body === 'void code') {
    $responseMessage = "Your VOID code is: $voidCode";
} else {
    $responseMessage = "Unauthorized access or wrong command.";
}

// Twilio expects XML response
header("Content-Type: text/xml");
echo "<Response><Message>$responseMessage</Message></Response>";
?>
