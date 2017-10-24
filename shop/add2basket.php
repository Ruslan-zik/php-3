<?php
	// ����������� ���������
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
if (!$_GET['id']) {
	echo "Ошибка добавления товара";
	header("Refresh: 5, catalog.php");
	exit;
}
else {
	$id = $_GET['id'];
	add2Basket($id);
	header("Location: catalog.php");
	exit;
}
