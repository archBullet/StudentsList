<?php

require_once 'app/controllers/Errors.php';
require_once 'app/controllers/Fields.php';


class StudentValidator {
	public function __construct(Student $student) {
		if ($student->getName() === '') {
			Errors::$errName = 'Имя должно содержать хотя бы 2 символа';
		}
		if ($student->getSurname() === '') {
			Errors::$errSurname = 'Фамилия должна содержать хотя бы 2 символа';
		}
		if ($student->getGender() === '') {
			Errors::$errGender = 'Поле не может быть пустым';
		}
		if ($student->getBirthYear() > 2020 || $student->getBirthYear() < 1970) {
			Errors::$errBirthYear = 'Год рождения должен быть больше 1970 и не меньше 2020';
		}
		if ($student->getBirthYear() === '' || !is_numeric($student->getBirthYear())) {
			Errors::$errBirthYear = 'Поле должно содержать цифры и не может быть пустым';
			Fields::$birthYear = '';
		}
		if ($student->getEmail() === '') {
			Errors::$errEmail = 'Поле не может быть пустым';
		}
		if ($student->getGroup() === '') {
			Errors::$errGroup = 'Поле не может быть пустым';
		}
		if ($student->getScore() === '') {
			Errors::$errScore = 'Поле не может быть пустым';
		}
		if ($student->getScore() > 300) {
			Errors::$errScore = 'Баллов должно быть не более 300';
		}
		if (!is_numeric($student->getScore())) {
			Errors::$errScore = 'Поле должно содержать цифры';
			Fields::$score = '';
		}
		if ($student->getResidence() === '') {
			Errors::$errResid = 'Поле не может быть пустым';
		}
	}
}