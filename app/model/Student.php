<?php

declare(strict_types=1);
class Student
{
	private string $name;
	private string $surname;
	private string $gender;
	private int $birthYear;
	private string $email;
	private string $group_member;
	private int $score;
	private string $residence;

	public function __construct(
		string $name,
		string $surname,
		string $gender,
		int $birthYear,
		string $email,
		string $group_member,
		int $score,
		string $residence
	) {
		$this->name = $name;
		$this->surname = $surname;
		$this->gender = $gender;
		$this->group_member = $group_member;
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
		return $this->group_member;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function getScore(): int
	{
		return $this->score;
	}

	public function getBirthYear(): int
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
