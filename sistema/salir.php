<?php
	session_start();
	unset($_SESSION['persona']);
	header('Location: ../index.php'); 
?>