<?php

require_once('../Students/app/database/StudentsDataGateway.php');
// require_once('../Students/app/model/Student.php');


$name = '';
$surname = '';
$gender = '';
$birthYear = '';
$email = '';
$group = '';
$score = '';
$residence = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
	echo 'POST';
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$gender = $_POST['gender'];
	$birthYear = $_POST['birthYear'];
	$email = $_POST['email'];
	$group = $_POST['group'];
	$score = $_POST['score'];
	$residence = $_POST['residence'];

	echo $name;
	echo $birthYear;
	
	// $stud = new Student($name, $surname, $gender, $birthYear, $email, $group, $score, $residence);
	// var_dump($stud);
	$pdo->addStudent(new Student($name, $surname, $gender, $birthYear, $email, $group, $score, $residence));
}