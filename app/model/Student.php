<?php

declare(strict_types=1);
class Student
{
	private string $name;
	private string $surname;
	private string $gender;
	private $birthYear;
	private string $email;
	private string $group;
	private $score;
	private string $residence;

	public function __construct(
		string $name,
		string $surname,
		string $gender,
		$birthYear,
		string $email,
		string $group,
		$score,
		string $residence
	) {
		$this->name = $name;
		$this->surname = $surname;
		$this->gender = $gender;
		$this->group = $group;
		$this->email = $email;
		$this->score = $score;
		$this->birthYear = $birthYear;
		$this->residence = $residence;
	}

	public function getFullName(): string
	{
		return "$this->name $this->surname";
	}

	public function getGender(): string
	{
		return $this->gender;
	}

	public function getGroup(): string
	{
		return $this->group;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function getScore()
	{
		return $this->score;
	}

	public function getBirthYear()
	{
		return $this->birthYear;
	}

	public function getResidence(): string
	{
		return $this->residence;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSurname()
	{
		return $this->surname;
	}
}
