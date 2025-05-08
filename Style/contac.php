<?php
header('Content-Type: application/json');

$name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'Email invalide']);
    exit;
}

$to = "lagbomedji04@gmail.com";
$subject = "Nouveau message de $name";
$headers = "From: $email\r\nReply-To: $email";

if (mail($to, $subject, $message, $headers)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Erreur serveur']);
}
?>