<?php

declare(strict_types=1);
class Student {
    private $name;
    private $surname;
    private $gender;
    private $group_member;
    private $email;
    private $score;
    private $birthYear;
    private $residence;

    public function __construct(string $name, string $surname, string $gender, string $group_member, string $email,
                                int $score, int $birthYear, string $residence) {
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
}

$student1 = new Student('Artur', 'Abzalov', 'm', '11b', 'bull@mail.ru',
    333, 1993, 'residence');

echo $student1->getFullName();