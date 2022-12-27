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


$s = new Student('Bill', 'Milligan', 'm', '5b', 'rr@', 666, 2000, 'residence');

$stmt->bindValue(':name', $s->getName());
$stmt->bindValue(':surname', $s->getSurname());
$stmt->bindValue(':gender', $s->getGender());
$stmt->bindValue(':group_name', $s->getGroup());
$stmt->bindValue(':email', $s->getEmail());
$stmt->bindValue(':score', $s->getScore());
$stmt->bindValue(':birth_year', $s->getBirthYear());
$stmt->bindValue(':residence', $s->getResidence());
$stmt->bindValue(':hash', 'Arur');
$stmt->execute();
