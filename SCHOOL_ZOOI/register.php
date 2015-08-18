<?php
	$file = $_GET['file'];
	$port = $_GET['port'];
	$ip = $_GET['ip'];


	$mysqli = new mysqli('localhost', 'root', '', 'streamingserverlist');

	mysqli_query($mysqli,"INSERT INTO streamingservers (`file`, `port`,`ip`) VALUES ('$file', '$port', '$ip')");
?>