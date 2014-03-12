<?php
	$config = array();
	$config['host'] = 'localhost';
	$config['user'] = 'root';
	$config['pass'] = '';
	$config['database'] = 'messages';
	$user = $config['user'];
	$pass = $config['pass'];
	//include 'mysqli.class.php';
	//$db = new DB($config);
	$db = new PDO('mysql:host=localhost;dbname=messages', $user, $pass);