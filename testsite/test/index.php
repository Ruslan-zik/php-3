<?php
session_start([
	'cookie_lifetime' => 20,
]);
if (!isset($_SESSION['test']) and !isset($_POST['q'])) {
	$q = 0;
	$title = 'Пройдите тест';
	$kek = ++$q;
} else {
if ($_POST['q'] != '1' and isset($_POST['answer'])) {
		$_SESSION['test'][] = $_POST['answer'];
} else {
	$q = 5;
}
	$q = $_POST['q'];
	$title = $_POST['title'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Тест</title>
</head>
<body>

<table width="50%" border="1" align='center'>

<tr>
	<td align="center">
		<!-- Верхняя часть страницы -->
		<table width="100%">
			<tr>
				<td align="center">
					<h1><?= $title?></h1>
					<p><a href='/index.php'>Прервать тест и вернуться на сайт</a></p>
				</td>
			</tr>
		</table>
		<!-- Верхняя часть страницы -->
	</td>
</tr>

<tr>
	<td>
		<!-- Область основного контента -->
		 <?php
switch($q) {
	case 0:
		include 'start.php';
		break;
	case 1:
		include 'q1.php';
		break;
	case 2:
		include 'q2.php';
		break;
	case 3:
		include 'q3.php';
		break;
	case 5:
		include 'testerror.php';
		break;
	default:
		include 'result.php';
}
		 ?>
		<!-- Область основного контента -->
	</td>
</tr>
</table>

</body>
</html>
