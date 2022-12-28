<?php


require_once('../Students/app/database/connect.php');
require_once('../Students/app/model/Student.php');

class StudentsDataGateway
{
	private $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function addStudent(Student $student)
	{
		$this->pdo->query("INSERT INTO 
		students (
			`name`, `surname`, `gender`, 
			`group_number`, `email`, `score`, 
			`birth_year`, `residence`) 
		VALUES ('{$student->getName()}', '{$student->getSurname()}', '{$student->getGender()}', '{$student->getGroup()}', '{$student->getEmail()}', {$student->getScore()}, {$student->getBirthYear()}, '{$student->getResidence()}')");
		// // $this->pdo->prepare("INSERT INTO 
		// // students (
		// // 	`name`, `surname`, `gender`, 
		// // 	`group_number`, `email`, `score`, 
		// // 	`birth_year`, `residence`, `hash`) 
		// // VALUES (
		// // 	:name, :surname, :gender, 
		// // 	:group_name, :email, :score, 
		// // 	:birth_year, :residence, :hash)");
		return $this;
	}
}
