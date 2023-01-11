<?php


require_once 'app/database/StudentsDataGateway.php';


$studentsArray = $pdo->getStudent();

function studentsOutput($studentsArray) {
	foreach($studentsArray as $k => $v) {
		echo "<tr class=\"list\">";
		echo "<td>{$v['name']}</td>";
		echo "<td>{$v['surname']}</td>";
		echo "<td>{$v['group_number']}</td>";
		echo "<td>{$v['score']}</td>";
		echo "</tr>";
	}
}