<?php
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Поступившие заказы</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Поступившие заказы:</h1>
<?php
$orders = getOrders();
if (!$orders) {
	echo "Заказов нету";
	exit;
}
foreach ($orders as $order) {
	$date = date("d-m-o h:i", $order["date"]);
?>
<h2>Заказ номер: <?= $order["orderid"] ?></h2>
<p><b>Заказчик</b>: <?= $order["name"] ?></p>
<p><b>Email</b>: <?= $order["email"] ?></p>
<p><b>Телефон</b>: <?= $order["phone"] ?></p>
<p><b>Адрес доставки</b>: <?= $order["address"] ?></p>
<p><b>Дата размещения заказа</b>: <?= $date?></p>


<h3>Купленные товары:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
</tr>
<?php
$i = 1;
$sum = 0;
foreach ($order["goods"] as $good) {
?>
<tr>
	 <td><?= $i?></td>
	 <td><?=$good["title"]?></td>
	 <td><?=$good["author"]?></td>
	 <td><?=$good["pubyear"]?></td>
	 <td><?=$good["price"]?></td>
	 <td><?=$good["quantity"]?></td>
</tr>
<?php
$i++;
$sum += $good["price"] * $good["quantity"];
}
?>
</table>
<p>Всего товаров в заказе на сумму: <?= $sum?>руб.</p>
<hr>
<?php
}
?>
</body>
</html>
