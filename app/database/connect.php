<?php


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'students';

try {
	$dbh = new PDO(
		"mysql:host=$host; dbname=$dbname", 
		$user, $pass, 
		[PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
	$pdo = (new StudentsDataGateway($dbh));
} catch (PDOException $e) {
	echo "Error!: " . $e->getMessage() . "<br>";
	die();
}
