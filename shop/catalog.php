<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Каталог товаров</title>
</head>
<body>
<p>Товаров в <a href="basket.php">корзине</a>: <?= $count?></p>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>В корзину</th>
</tr>
<?php
// array_shift($basket);
// echo array_sum($basket);
// $date = getdate(1508531287);
// echo "$date[mday]-$date[mon]-$date[year] $date[hours]:$date[minutes]";
print_r($basket);
$goods = selectAllItems();
//print_r($goods);
foreach($goods as $item) {
	echo "<tr>
		<td>$item[title]</td>
		<td>$item[author]</td>
		<td>$item[pubyear]</td>
		<td>$item[price]</td>
		<td><a href='add2basket.php?id=$item[id]'>В корзину</a></td>
	</tr>";
}
?>
</table>
</body>
</html>
