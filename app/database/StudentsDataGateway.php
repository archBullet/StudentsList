<?php


use PDO;

class StudentsDataGateway
{
	private $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function addStudent(Student $student) {
		$this->pdo->prepare("INSERT INTO 
		students (
			`name`, `surname`, `gender`, 
			`group_number`, `email`, `score`, 
			`birth_year`, `residence`, `hash`) 
		VALUES (
			:name, :surname, :gender, 
			:group_name, :email, :score, 
			:birth_year, :residence, :hash)");
	}
}
