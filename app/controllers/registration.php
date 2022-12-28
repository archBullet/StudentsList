<?php

require_once 'app/database/StudentsDataGateway.php';


$name = '';
$surname = '';
$gender = '';
$birthYear = '';
$email = '';
$group = '';
$score = '';
$residence = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$gender = $_POST['gender'];
	$birthYear = $_POST['birthYear'];
	$email = $_POST['email'];
	$group = $_POST['group'];
	$score = $_POST['score'];
	$residence = $_POST['residence'];

	try {
		$pdo->addStudent(new Student($name, $surname, $gender, $birthYear, $email, $group, $score, $residence));
	} catch (PDOException $e){
		echo $e;
	}

}