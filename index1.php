<?php

require_once 'app/controllers/StudentsOutput.php';


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
	<script type="text/javascript" src="assets/js/jquery-3.6.3.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.tablesorter.min.js"></script>
	<title>Список студентов</title>
</head>

<body>
	<div class="container wrapper">
		<div class="panel form-outline row g-2">
			<input class="search_area col-auto" type="search" id="form1" class="form-control" placeholder="Поиск" aria-label="Search" />
			<button type="button" class="btn btn-outline-dark col-auto">Редактировать</button>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col" class="head">Имя</th>
					<th scope="col" class="head">Фамилия</th>
					<th scope="col" class="head">Группа</th>
					<th scope="col" class="head">Баллы</th>
				</tr>
			</thead>
			<tbody>
				<?= studentsOutput($studentsArray) ?>
			</tbody>
		</table>
	</div>
	<script src="assets/js/script.js"></script>
</body>