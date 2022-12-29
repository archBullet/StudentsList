<?php
require_once 'app/controllers/registration.php';
require_once 'app/controllers/Errors.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/reboot.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Регистрация студента</title>
</head>

<body>
	<div class="container reg_form">
		<form method="POST" action="reg.php">
			<span class="err">
				<?= Errors::$errName ?>
			</span>
			<div class="row mb-3">
				<label for="Name" class="col-sm-3 col-form-label">Имя</label>
				<div class="col-sm-9">
					<input type="text" name="name" value="<?= Fields::$name ?>" class="form-control" id="inputName">
				</div>
			</div>
			<span class="err">
				<?= Errors::$errSurname ?>
			</span>
			<div class="row mb-3">
				<label for="Surname" class="col-sm-3 col-form-label">Фамилия</label>
				<div class="col-sm-9">
					<input type="text" name="surname" value="<?= Fields::$surname ?>" class="form-control" id="inputSurname">
				</div>
			</div>
			<span class="err">
				<?= Errors::$errGender ?>
			</span>
			<fieldset>
				<div class="row mb-3">
					<legend class="col-form-label col-sm-3 pt-0">Пол</legend>
					<div class="col-sm-9">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="m" checked>
							<label class="form-check-label" for="gridRadios1">
								Мужской
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="f">
							<label class="form-check-label" for="gridRadios2">
								Женский
							</label>
						</div>
					</div>
				</div>
			</fieldset>
			<span class="err">
				<?= Errors::$errBirthYear ?>
			</span>
			<div class="row mb-3">
				<label for="BirthYear" class="col-sm-3 col-form-label">Год рождения</label>
				<div class="col-sm-9">
					<input type="text" name="birthYear" value="<?= Fields::$birthYear ?>" class="form-control" id="inputBirthYear">
				</div>
			</div>
			<span class="err">
				<?= Errors::$errEmail ?>
			</span>
			<div class="row mb-3">
				<label for="Mail" class="col-sm-3 col-form-label">Эл. почта</label>
				<div class="col-sm-9">
					<input type="email" name="email" class="form-control" id="inputMail">
				</div>
			</div>
			<span class="err">
				<?= Errors::$errGroup ?>
			</span>
			<div class="row mb-3">
				<label for="inputGroup" class="col-sm-3 col-form-label">Номер группы</label>
				<div class="col-sm-9">
					<input type="text" name="group" value="<?= Fields::$group ?>" class="form-control" id="inputGroup">
				</div>
			</div>
			<span class="err">
				<?= Errors::$errScore ?>
			</span>
			<div class="row mb-3">
				<label for="inputScore" class="col-sm-3 col-form-label">Баллы</label>
				<div class="col-sm-9">
					<input type="text" name="score" value="<?= Fields::$score ?>" class="form-control" id="inputScore">
				</div>
			</div>
			<span class="err">
				<?= Errors::$errResid ?>
			</span>
			<fieldset>
				<div class="row mb-3">
					<legend class="col-form-label col-sm-3 pt-0">Проживание</legend>
					<div class="col-sm-9">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="residence" id="gridRadios3" value="residence" checked>
							<label class="form-check-label" for="gridRadios3">
							Местный
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="residence" id="gridRadios4" value="non-residence">
							<label class="form-check-label" for="gridRadios4">
							Иногородний
							</label>
						</div>
					</div>
				</div>
			</fieldset>
			<div class="col-12">
				<button type="submit" name="btn" class="btn btn-primary">Зарегестрировать</button>
			</div>
		</form>
	</div>
</body>

</html>