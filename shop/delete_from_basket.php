<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
	if (!$_GET['id']) {
		echo "Ошибка удаления товара";
		header("Refresh: 5, catalog.php");
		exit;
	}
	else {
		$id = $_GET['id'];
		deleteItemFromBasket($id);
		header("Location: basket.php");
		exit;
	}
