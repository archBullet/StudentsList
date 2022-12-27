<?php

require_once('../controllers/Student.php');

try {
	$dbh = new PDO('mysql:host=localhost; dbname=students', 'root', '', [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
	foreach ($dbh->query('SHOW columns FROM students') as $column) {
		print_r($column);
		echo '<br>';
	}
} catch (PDOException $e) {
	echo "Error!: " . $e->getMessage() . "<br>";
	die();
}

$stmt = $dbh->prepare("INSERT INTO students
(`name`, `surname`, `gender`, `group_number`, `email`, `score`, `birth_year`, `residence`, `hash`) 
VALUES (:name, :surname, :gender, :group_name, :email, :score, :birth_year, :residence, :hash)");
$stmt->bindValue(':name', 'Arur');
$stmt->bindValue(':surname', 'Arur');
$stmt->bindValue(':gender', 'm');
$stmt->bindValue(':group_name', '25');
$stmt->bindValue(':email', 'b@.ru');
$stmt->bindValue(':score', 333);
$stmt->bindValue(':birth_year', 1992);
$stmt->bindValue(':residence', 'residence');
$stmt->bindValue(':hash', 'Arur');
$stmt->execute();