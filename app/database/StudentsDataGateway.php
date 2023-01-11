<?php


require_once 'connect.php';
require_once 'app/model/Student.php';

class StudentsDataGateway
{
	private $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function addStudent(Student $student)
	{
		$stmt = $this->pdo->prepare(
			"INSERT INTO students (
							`name`, 
							`surname`, 
							`gender`, 
							`group_number`, 
							`email`, 
							`score`, 
							`birth_year`, 
							`residence`, 
							`hash`) 
						VALUES (
							:name, 
							:surname, 
							:gender, 
							:group_name,
							:email, 
							:score, 
							:birth_year, 
							:residence, 
							:hash)"
		);

		$stmt->bindValue(':name', $student->getName());
		$stmt->bindValue(':surname', $student->getSurname());
		$stmt->bindValue(':gender', $student->getGender());
		$stmt->bindValue(':group_name', $student->getGroup());
		$stmt->bindValue(':email', $student->getEmail());
		$stmt->bindValue(':score', $student->getScore());
		$stmt->bindValue(':birth_year', $student->getBirthYear());
		$stmt->bindValue(':residence', $student->getResidence());
		$stmt->bindValue(':hash', 'Arur');
		$stmt->execute();

		return $this;
	}

	public function getStudent() {
		$stmt = "SELECT name, surname, group_number, score FROM students";
		$query = $this->pdo->prepare($stmt);
		$query->execute();
		return $query->fetchAll();
	}
}
