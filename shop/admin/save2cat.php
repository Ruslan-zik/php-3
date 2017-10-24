<?php

	// подключение библиотек
	// require "secure/session.inc.php";
	require "../inc/config.inc.php";
	require "../inc/lib.inc.php";
	//addItemToCatalog($_POST['title'], $_POST['author'], $_POST['pubyear'], $_POST['price']);
	if(!addItemToCatalog($_POST['title'], $_POST['author'], $_POST['pubyear'], $_POST['price'])) {
	  echo 'Произошла ошибка при добавлении товара в каталог';
	} else {
		header("Location: add2cat.php");
		exit;
	};
	mysqli_close($link);
