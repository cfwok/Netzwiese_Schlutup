<?php
header('Content-Type: application/json');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo json_encode([
    'success' => true,
    'message' => 'Nachricht erhalten: ' . $name
]);
?>
