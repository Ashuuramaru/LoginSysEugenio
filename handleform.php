<?php 

session_start();

if(isset($_POST['submitBtn'])) {

	if(isset($_SESSION['firstName'])) {
		$_SESSION['message'] = $_SESSION['firstName'] . " is already logged in. Wait for him to log out first";
	} else {
		$firstName = $_POST['firstName'];

		$password = md5($_POST['password']);

		$_SESSION['firstName'] = $firstName;
		$_SESSION['password'] = $password;
	}

	header('Location: index.php');
	exit();
}
?>
