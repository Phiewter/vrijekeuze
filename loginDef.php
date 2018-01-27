<?php

include 'database.php';

if (isset($_POST['submit'])) {
	$emailaddress = $_POST['emailaddress'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admin WHERE adminEmail = '$emailaddress' AND adminWachtwoord = '$password'";
	$result = mysqli_query($connection, $query);

	if ($row = mysqli_fetch_assoc($result)) {
		session_start();

		$_SESSION['loggedin'] = "YES";
		$_SESSION['emailaddress'] = $row['adminEmail'];
		$_SESSION['password'] = $row['adminWachtwoord'];
		
		header('Location: adminPage.php');
	} else {
		header('Location: login.php');
	}
}

?>