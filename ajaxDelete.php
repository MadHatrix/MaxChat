<?php
	include 'config.php';


	$id = $_POST['id'];

	$stmt = $db->prepare("DELETE FROM messages WHERE id = :id");
	$stmt->bindParam(':id', $id);
	$stmt->execute();
	//$db->query("DELETE FROM messages WHERE `id` = '$id'");


?>