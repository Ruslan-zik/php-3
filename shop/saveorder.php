<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>
<?php
$time = mktime();
$or_id = $basket['orderid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$f = fopen("admin/orders.log", "a+");
fwrite($f, "$name|$email|$phone|$address|$or_id|$time\r\n");
fclose($f);
saveOrder($time);
?>
