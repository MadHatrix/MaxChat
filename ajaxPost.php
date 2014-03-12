<?php session_start();

include 'config.php';

$message = $_POST['messages'];
$handle = isset($_SESSION['userName']) ? $_SESSION['userName'] : '';


$stmt = $db->prepare("INSERT INTO messages (message, user) VALUES (:message, :handle)");
$stmt->bindParam(':message', $message);
$stmt->bindParam(':handle', $handle);
$stmt->execute();
//$db->query("INSERT INTO messages (message, user) VALUES ('$message', '$handle')");

echo $message;