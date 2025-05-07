<?php

$input = $_POST;
$from = $_POST['From'] ?? '';
$body = strtolower(trim($_POST['Body'] ?? ''));


$masterUser = 'whatsapp:+60147195118';
$voidCode = 'VOID-XYZ123'; // Your void code


if ($from === $masterUser && $body === 'void code') {
    $responseMessage = "Your VOID code is: $voidCode";
} else {
    $responseMessage = "Unauthorized access or wrong command.";
}


header("Content-Type: text/xml");
echo "<Response><Message>$responseMessage</Message></Response>";
?>
