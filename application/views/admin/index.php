<?php
	session_start();
	if (isset($_SESSION['user'])) {
		include('dashboard.php');
	}
	else {
		include('login.php');
	}
?>