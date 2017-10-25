<?php
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'eshop';
const ORDERS_LOG = 'orders.log';
$basket = [];

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_set_charset($link, "utf8"))
    echo "Ошибка при загрузке набора символов utf8: \n", mysqli_error($link);
basketInit();
count_arr();
