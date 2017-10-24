<?php
error_reporting(E_ALL & ~E_NOTICE);
$title = 'Супер-мега сайт';
$header = "Добро пожаловать на наш сайт!";
// Инициализация заголовков страницы
$id = strtolower(strip_tags(trim($_GET['id'])));
switch($id){
	case 'contact':
		$title = 'Контакты';
		$header = 'Обратная связь';
		break;
	case 'about':
		$title = 'О нас';
		$header = 'О нашем сайте';
		break;
	case 'info':
		$title = 'Информация';
		$header = 'Информация';
		break;
	case 'log':
		$title = 'Журнал посещений';
		$header = 'Журнал посещений';
		break;
	case 'gbook':
		$title = 'Гостевая книга';
		$header = 'Наша гостевая книга';
		break;
}
?>
