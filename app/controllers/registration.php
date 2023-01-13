<?php

require_once 'app/database/StudentsDataGateway.php';
require_once 'app/model/StudentValidator.php';
require_once 'app/controllers/Fields.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
	Fields::$name = trim($_POST['name']);
	Fields::$surname = trim($_POST['surname']);
	Fields::$gender = trim($_POST['gender']);
	Fields::$birthYear = trim($_POST['birthYear']);
	Fields::$email = trim($_POST['email']);
	Fields::$group = trim($_POST['group']);
	Fields::$score = trim($_POST['score']);
	Fields::$residence = trim($_POST['residence']);

	$student = new Student(
		Fields::$name,
		Fields::$surname,
		Fields::$gender,
		Fields::$birthYear,
		Fields::$email,
		Fields::$group,
		Fields::$score,
		Fields::$residence
	);

	$validate = (new StudentValidator())->validator($student);
	if ($validate->isValid()) {
		try {
			$pdo->addStudent($student);
			header("Location: index.php");
			die();
		} catch (PDOException $e) {
			echo $e;
		}
	}
}
