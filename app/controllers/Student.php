<?php


class Student {
    private $name;
    private $surname;
    private $gender;
    private $group_member;
    private $email;
    private $score;
    private $birth_year;
    private $residence;

    public function __construct($name, $surname, $gender, $group_member, $email, $score, $birth_year, $residence) {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->group_member = $group_member;
        $this->email = $email;
        $this->score = $score;
        $this->birth_year = $birth_year;
        $this->residence = $residence;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->surname;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getGroup() {
        return $this->group_member;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getScore() {
        return $this->score;
    }

    public function getBirthYear() {
        return $this->birth_year;
    }
}