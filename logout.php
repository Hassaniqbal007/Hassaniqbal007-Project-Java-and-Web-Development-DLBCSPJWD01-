<?php
session_start();

	session_destroy();
	unset($_SESSION['user']);
	unset($_SESSION['user_name']);
	header("Location:index.php");
?>
