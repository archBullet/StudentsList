<?php
require_once 'app/controllers/registration.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/reboot.css">
	<title>Регистрация студента</title>
</head>

<body>
	<div class="container reg_form">
		<form class="row g-3" method="POST" action="reg.php">
			<div class="col-12">
				<label for="Name" class="form-label">Имя</label>
				<input type="text" name="name" value="<?= $name ?>" class="form-control" id="inputName">
			</div>
			<div class="col-12">
				<label for="Surname" class="form-label">Фамилия</label>
				<input type="text" name="surname" value="<?= $surname ?>" class="form-control" id="inputSurname">
			</div>
			<div class="col-12">
				<label for="inputState" class="form-label">Пол</label>
				<select id="inputState" name="gender" class="form-select">
					<option selected></option>
					<option value="m">Мужской</option>
					<option value="f">Женский</option>
				</select>
			</div>
			<div class="col-12">
				<label for="BirthYear" class="form-label">Год рождения</label>
				<input type="text" name="birthYear" value="<?= $birthYear ?>" class="form-control" id="inputBirthYear">
			</div>
			<div class="col-12">
				<label for="Mail" class="form-label">Электронная почта</label>
				<input type="email" name="email" value="<?= $email ?>" class="form-control" id="inputMail">
			</div>
			<div class="col-12">
				<label for="inputGroup" class="form-label">Номер группы</label>
				<input type="text" name="group" value="<?= $group ?>" class="form-control" id="inputGroup">
			</div>
			<div class="col-12">
				<label for="inputScore" class="form-label">Баллы</label>
				<input type="text" name="score" value="<?= $score ?>" class="form-control" id="inputScore">
			</div>
			<div class="col-12">
				<label for="inputScore" class="form-label">Проживание</label>
				<select id="inputState" name="residence" class="form-select">
					<option selected></option>
					<option value="residence">Местный</option>
					<option value="non-residence">Иногородний</option>
				</select>
			</div>
			<div class="col-12">
				<button type="submit" name="btn" class="btn btn-primary">Зарегестрировать</button>
			</div>
		</form>
	</div>
</body>

</html>