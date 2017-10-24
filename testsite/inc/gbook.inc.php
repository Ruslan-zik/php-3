<?php
/* Основные настройки */
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'gbook';
$mysqli = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}
/* изменение набора символов на utf8 */
if (!mysqli_set_charset($mysqli, "utf8"))
    echo "Ошибка при загрузке набора символов utf8: \n", mysqli_error($link);

/* Основные настройки */
if (isset($_POST['name'])) {
  switch ($_POST['name']) {
    case '':
      echo "Введите имя";
      break;
    default:
      $table = 'msgs';
      $ins = "INSERT INTO $table SET
      name = ?,
      email = ?,
      msg = ?";
      $inss = mysqli_prepare($mysqli, $ins);
      mysqli_stmt_bind_param($inss, "sss", $name, $email, $msg);
      $name = $_POST['name'];
      $email = $_POST['email'];
      $msg = $_POST['msg'];
      mysqli_stmt_execute($inss);
      mysqli_stmt_close($inss);
      break;
    }
  }
$count = mysqli_affected_rows($mysqli);
if ($count != 0) {
  echo "Запись отправлена<br>Имя: $_POST[name]<br> Адрес почты: $_POST[email]<br>";
  if ($_POST['msg'] != '')
    echo "Сообщение: $_POST[msg]";
}
echo mysqli_error($mysqli);
mysqli_close($mysqli);
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="email" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />
<br />

<input type="submit" value="Отправить!" />

</form>
