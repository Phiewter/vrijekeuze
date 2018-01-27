<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'eindproject';

// Maak de connectie
$connection = mysqli_connect($servername, $username, $password);

// Check de connectie
if (!$connection) {
	die('Connection failed: ' . mysqli_connect_error());
}

mysqli_select_db($connection, $database);

?>