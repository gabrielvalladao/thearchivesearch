<?php
ob_start();

try {

	$con = new PDO("mysql:dbname=u240802769_search;host=localhost", "u240802769_search", "Gtirado98@neves");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>