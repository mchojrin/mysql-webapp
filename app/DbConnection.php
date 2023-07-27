<?php
/* DbConnection.php
This is a comment. Comments are not displayed in the browser.
To run it as a php file:
http://localhost/webapp_p2p/DbConnection.php
*/
/* mariadb */
	$dbhost ="mysql:3306";
	$dbuser = "DBAuser";
	$dbpass = "app";
	$dbname = "prod_p2p";


	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// Test if connection occurred.
	if (mysqli_connect_errno()){
		die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
		);
	}
?>
