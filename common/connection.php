<?php
$dbhost = "localhost";
$dbuser = "root"; $dbpass = "";
$dbname = "sibol"; /* database name */
	if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
			die("Failed to connect!"); }
?>
