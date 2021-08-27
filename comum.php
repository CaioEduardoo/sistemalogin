<?php
try {
	$dsn = "mysql:dbname=users;host=localhost";
	$dbuser = "root";
	$dbpass = "";
	$pdo = new PDO($dsn, $dbuser, $dbpass);

} catch(PDOException $e) {
	die($e->getMessage());
}
?>
