<?php
	session_start();
	$current_file = array();
	session_destroy();
	header("Location:index.php");
?>