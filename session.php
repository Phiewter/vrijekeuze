<?php

include 'database.php';

session_start();

if (!isset($_SESSION['emailaddres'])) {
	header('Location: index.php');
}

?>