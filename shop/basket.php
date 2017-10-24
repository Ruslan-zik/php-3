<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Корзина пользователя</title>
</head>
<body>
	<h1>Ваша корзина</h1>
<?php

?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>
<?php
if(count($basket) > 1)
	echo "<a href='catalog.php'>Вернуться в каталог</a>";
else
	echo "Корзина пуста.<br><a href='catalog.php'>Вернуться в каталог</a>";
//print_r(myBasket());
print_r($basket);
$i = 1;
$sum = 0;
$goods = myBasket();
//print_r($goods);
if (count($basket) > 1)
 foreach($goods as $item) {
?>
	<tr>
		<td><?= $i?></td>
		<td><?=$item['title']?></td>
		<td><?=$item['author']?></td>
		<td><?=$item['pubyear']?></td>
		<td><?=$item['price']?></td>
		<td><?=$item['quantity']?></td>
		<td><a href='delete_from_basket.php?id=<?=$item['id']?>'>Удалить</a></td>
	</tr>
<?php
	$i++;
	$sum += $item['price'] * $item['quantity'];
}
?>
</table>

<p>Всего товаров в корзине на сумму: <?= $sum?> руб.</p>

<div align="center">
	<input type="button" value="Оформить заказ!"
                      onClick="location.href='orderform.php'" />
</div>

</body>
</html>
