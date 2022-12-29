<?php

require_once 'app/controllers/Errors.php';
require_once 'app/controllers/Fields.php';


class StudentValidator {
	private int $val = 0;
	public function validator(Student $student) {
		if ($student->getName() === '') {
			Errors::$errName = 'Имя должно содержать хотя бы 2 символа';
			$this->val++;
		}
		if ($student->getSurname() === '') {
			Errors::$errSurname = 'Фамилия должна содержать хотя бы 2 символа';
			$this->val++;
		}
		if ($student->getGender() === '') {
			Errors::$errGender = 'Поле не может быть пустым';
			$this->val++;
		}
		if ($student->getBirthYear() === '' || !is_numeric($student->getBirthYear())) {
			Errors::$errBirthYear = 'Поле должно содержать цифры и не может быть пустым';
			Fields::$birthYear = '';
			$this->val++;
		} elseif ($student->getBirthYear() > 2020 || $student->getBirthYear() < 1970) {
			Errors::$errBirthYear = 'Год рождения должен быть больше 1970 и не меньше 2020';
			Fields::$birthYear = '';
			$this->val++;
		} 
		if ($student->getEmail() === '') {
			Errors::$errEmail = 'Поле не может быть пустым';
			$this->val++;
		}
		if ($student->getGroup() === '') {
			Errors::$errGroup = 'Поле не может быть пустым';
			$this->val++;
		}
		if ($student->getScore() === '') {
			Errors::$errScore = 'Поле не может быть пустым';
			$this->val++;
		} elseif (!is_numeric($student->getScore())) {
			Errors::$errScore = 'Поле должно содержать цифры';
			Fields::$score = '';
			$this->val++;
		} elseif ($student->getScore() > 300) {
			Errors::$errScore = 'Баллов должно быть не более 300';
			$this->val++;
		}
		if ($student->getResidence() === '') {
			Errors::$errResid = 'Поле не может быть пустым';
			$this->val++;
		}
		return $this;
	}

	public function isValid() {
		if ($this->val === 0) {
			return true;
		}
		return false;
	}
}