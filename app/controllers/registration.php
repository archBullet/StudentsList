<?php

require_once 'app/database/StudentsDataGateway.php';
require_once 'app/model/StudentValidator.php';





if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
	$name = trim($_POST['name']);
	$surname = trim($_POST['surname']);
	$gender = trim($_POST['gender']);
	$birthYear = trim($_POST['birthYear']);
	$email = trim($_POST['email']);
	$group = trim($_POST['group']);
	$score = trim($_POST['score']);
	$residence = trim($_POST['residence']);


	// 	try {
	// 		$pdo->addStudent(new Student($name, $surname, $gender, $birthYear, $email, $group, $score, $residence));
	// 	} catch (PDOException $e) {
	// 		echo $e;
	// 	}

	$student = new Student($name, $surname, $gender, $birthYear, $email, $group, $score, $residence);
	$validate = new StudentValidator($student);
	
}
